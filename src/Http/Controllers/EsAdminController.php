<?php namespace MkiLabs\Espresso\Http\Controllers;

use App\Http\Controllers\Controller;
use Espresso;

class EsAdminController extends Controller
{
    public function __construct() {
        
    }

    public function hello(){
        // echo Espresso::hello();
        
        $text = 'Hello this is Espresso Admin';

        return view('espresso::admin.dashboard')->with('text', $text);
    }
}
