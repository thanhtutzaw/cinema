<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    // function moviepage(){
    //     return view('movie');
    // }

    function movielist(){
        $mLists = ["Venom","No Way Home","Shan-Chi"];
        return view('child.movie', ['movies' => $mLists]) ;   }

}
