<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AugmentsController extends Controller
{
    public function getSingle($slug) {
		
		//fetch form the database based on slug
		$post= Post::where('slug', '=', $slug)->first();

		//return the view and pass it in the post object
		return view('augments.single')->withPost($post);

	}
}
