<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RequestController extends Controller
{
    //

    public function index(Request $req, Response $res)
    {
      $name = $req->input('name');
      $data = [
        'name' => $name
      ];
      return view('request.index',$data);
    }

}
