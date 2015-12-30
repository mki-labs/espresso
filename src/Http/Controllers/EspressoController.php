<?php namespace MkiLabs\Espresso\Http\Controllers;

use Illuminate\Routing\Controller;
use Espresso;

class EspressoController extends Controller
{
    public function __construct() {
        
    }

    public function index($slug){
        // echo Espresso::hello();
        
        $text = 'Welcome to Espresso';
        
        return view('espresso::themes.home')
        ->with('text', $text)
        ->with('slug', $slug);
    }
}
