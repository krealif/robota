<?php

namespace App\Http\Controllers;

use Throwable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {   
        
        $validator = Validator::make(request()->all(),[
            'image' => 'required|image'
        ]);

        if ($validator->fails())
        {
            return response()->json(["status" => "error", "message" => "File of invalid type"], 400);
        }

        $file = $request->file('image');
        try {
            $filename = $file->store('/', 'img-tmp');
            return $filename;
        } catch (Throwable $e) {
            return response()->json(["status" => "error", "message" => $e], 500);
        }
    }

    public function destroy(Request $request)
    {
        $filesystem = Storage::disk('img-tmp');
        $filename = $request->getContent();
        if ($filesystem->exists($filename)) {
            $filesystem->delete($filename);
            return response()->json(["status" => "success", "message" => "Upload successfully reverted"]);
        } else {
            return response()->json(["status" => "error", "message" => "An error has occurred"], 500);
        }
    }
}
