<?php

if (!function_exists('upload_single_image')){
    function upload_single_image($folder)
    {
        $fileNameToStore = 'no-image.png';
        if (request()->hasFile('image')){
            $image = request()->file('image');
            //Get the image extension
            $ext = $image->getClientOriginalExtension();
            //Build the filename
            $fileName = substr(rand(1,9000000000000).time(),2);
            $fileNameToStore = $fileName.'.'.$ext;
            //Store the image
            $image->storeAs($folder,$fileNameToStore,'public');
        }
        return $fileNameToStore;
    }
}

if (!function_exists('update_image')){
    function update_image($folder,$currentImagePath) : String{
        if (request()->hasFile('image')){
            $imagePath = public_path("storage/$folder/$currentImagePath");
            if (file_exists($imagePath)){
                unset($imagePath);
            }
            //upload the new image
            $image = request()->file('image');
            //Get the image extension
            $ext = $image->getClientOriginalExtension();
            //Build the filename
            $filename = substr(rand(1,9000000000000).time(),2);
            $currentImagePath = "$filename.$ext";
            //Store the image
            $image->storeAs($folder,$currentImagePath,'public');
        }
        return $currentImagePath;
    }
}
