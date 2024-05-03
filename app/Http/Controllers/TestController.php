<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function test_show_form()
	{
		return view('test');
	}

	function test_save()
	{
		$postdata = request()->validate(['title' => ['required']]);
	}
}
