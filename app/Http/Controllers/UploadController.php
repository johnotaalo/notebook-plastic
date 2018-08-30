<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use \App\UserUpload;

class UploadController extends Controller
{
	function uploadData(Request $request){
		$path = $request->file('user_image')->store('public/uploads');
		$upload = new UserUpload();

		$upload->firebase_id = $request->firebase_id;
		$upload->latitude = $request->latitude;
		$upload->longitude = $request->longitude;
		$upload->image_path = $path;
		$upload->results = "TBA";

		$upload->save();

		return $upload;
	}

	function index(){
		$data['uploads'] = UserUpload::all();
		return view('dashboard.upload.index')->with($data);
	}
}
