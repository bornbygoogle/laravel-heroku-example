<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;


class InstagramController extends Controller
{
	public function InstagramFeed()
	{
    	$instagram = new Instagram('1655047706.1677ed0.bd42b08a2d7345de9ad3fbf54a93b150');
    	$instagrams = $instagram->get();

    	return view('instagram', compact('instagrams'));
    }
}
