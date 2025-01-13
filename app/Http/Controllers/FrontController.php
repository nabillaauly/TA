<?php

namespace App\Http\Controllers;
use App\Models\ukm;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function forum()
    {
        return view('pages.forum');
    }

    public function rekomendasi()
    {
        return view('pages.rekomendasi');
    }

    public function recruitment()
    {
    $ukms = ukm::all();
    
        // Kirim data UKM ke view 'pages.recruitment'
        return view('pages.recruitment', compact('ukms'));
    }
    

    public function padus()
    {
        return view('pages.padus');
    }

    public function register()
    {
        return view('register');
    }
}
