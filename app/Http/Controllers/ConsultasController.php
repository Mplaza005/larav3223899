<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    //

    public function consulta(){

    //$user = new User();
    //$user=User::find(1);
    //return $user->profile;

    $categories = Category::with(['posts.user'])->get();

    //

    return "hola";
    return  $categories;

    }



}


 // $user = new User();
       //  $post = new User();


       // $user=User::find(1);

        //return $user;
