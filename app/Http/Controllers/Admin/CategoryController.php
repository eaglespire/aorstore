<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories'=>Category::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(NewCategoryRequest $request)
    {
        if ($request->createNewCategory()){
            return redirect(route('admin.categories.index'))->with('success','new category added');
        }
        return back()->with('error','Error!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',[
            'category'=>$category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        /*
         * To update the image field, we first of all need to check to see if an image was
         * uploaded. If an image was uploaded, we want to remove the previously uploaded image
         * before uploading that new image. If an image was not uploaded previously, then
         * we will have a fresh image
         */
        try {
            $category = Category::findOrFail($id);
            $category->update([
               'name'=>$request->input('name'),
                'slug'=>$request->input('name'),
                'image'=>update_image('categories',$category->image)
            ]);
           return redirect(route('admin.categories.index'))->with('success','updated');
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return back()->with('error','Error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $category = Category::findOrFail($id);
       /*
        * We need to check to see if this category has an image uploaded
        */
        $oldImagePath = public_path("storage/categories/$category->image");
        if (file_exists($oldImagePath)){
            unset($oldImagePath);
        }
       $category->delete();
       return redirect()->route('admin.categories.index')->with('success','deleted');
    }
}
