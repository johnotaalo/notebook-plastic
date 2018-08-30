<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserUpload extends Model
{
	protected $fillable = [
		"firebase_id",
		"latitude",
		"longitude",
		"image_path",
		"results"
	];
}
