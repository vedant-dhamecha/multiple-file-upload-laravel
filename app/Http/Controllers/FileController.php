<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class FileController extends Controller
{
    public function fileupload(Request $request)
    {

        $fileNames = [];
        foreach($request->file('file') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path().'/images/', $imageName);
            $fileNames[] = $imageName;
        }

        $images = json_encode($fileNames);
        Image::create(['images' => $images]);
        return back();
    }
}
