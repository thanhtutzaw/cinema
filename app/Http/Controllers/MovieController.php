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
        $id = [1,2,4,5,7,9];


        return view('child.movie', ['movies' => $mLists]) ;
    }

    // function movieid(){
    //     $id = [1,2,4,5,7,9];
    //     return view('child.movie'.$id);

    // }

}
