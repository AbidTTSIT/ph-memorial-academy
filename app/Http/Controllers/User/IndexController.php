<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about-us.about-us');
    }

     public function contact()
    {
        return view('user.contact-us.contact-us');
    }
    
    public function mandatoryDiscloser()
    {
       $pdfId = '1lILiw8j2ax3JwVC79REVob_8-XKLT6jn';
       $data['pdfUrl'] = "https://drive.google.com/file/d/{$pdfId}/preview";
        return view('user.mandatory-discloser.mandatory-discloser', $data);
    }
}
