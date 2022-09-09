<?php

namespace App\Http\Requests\Admin;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class NewCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required','string','max:255','unique:categories'],
            'image'=>['nullable','image','max:300'],
        ];
    }

//    private function storeImage() : String
//    {
//        if ($this->hasFile('image')){
//            $image = $this->file('image');
//            //Get the image extension
//            $ext = $image->getClientOriginalExtension();
//            //Build the filename
//            $fileName = substr(rand(1,9000000000000).time(),2);
//            $fileNameToStore = $fileName.'.'.$ext;
//            //Store the image
//            $image->storeAs('categories',$fileNameToStore,'public');
//            return $fileNameToStore;
//        }else{
//            return 'no-image.png';
//        }
//    }

    public function  createNewCategory()
    {
        try {
            Category::create([
                'name'=>$this->name,
                'slug'=>$this->name,
                'image'=>upload_single_image('categories')
            ]);
            return true;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }


}
