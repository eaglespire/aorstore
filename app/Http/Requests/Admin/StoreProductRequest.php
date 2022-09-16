<?php

namespace App\Http\Requests\Admin;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class StoreProductRequest extends FormRequest
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
            'name'=>['required','unique:products','max:255','string'],
            'price'=>['required','numeric'],
            'discount'=>['required','numeric'],
            'quantity'=>['required','numeric'],
            'description'=>['required','string'],
            'cover_image'=>['required','image','max:1024'],
            'images.*'=>['required','image','max:1024']
        ];
    }

    public function createProduct()
    {
        // $this->name
        try {
            Product::create([
                'name'=>$this['name'],
                'price'=>$this['price'],
                'quantity'=>$this['quantity'],
                'description'=>$this['description'],
                'discount'=>$this['discount'],
                'slug'=>$this['name'],
                'SKU'=> Str::random(8),
                'cover_image'=> upload_single_image('products','cover_image'),
                'images'=>upload_multiple_images('products/sliders'),
                'category_id'=>$this['category_id']
            ]);
            return true;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
