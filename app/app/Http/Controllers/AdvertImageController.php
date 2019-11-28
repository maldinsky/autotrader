<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class AdvertImageController extends Controller
{
    public function index(ImageRequest $request)
    {
        $imageName = Storage::putFile('images/adverts', new File($request->file('advert_image')));

        return ['success' => $imageName];
    }
}
