<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function tnc()
    {
    	return view('vendor.bitaac.community.tnc');
    }

    public function contact()
    {
    	return view('vendor.bitaac.community.contact');
    }

    public function who_online()
    {
    	return view('vendor.bitaac.community.online');
    }

    public function download()
    {
        return view('vendor.bitaac.community.download');
    }
}
