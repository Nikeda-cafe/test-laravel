<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Person;
use Illuminate\Support\Facades\DB;

class HappyController extends Controller
{
    //
    public function index(Request $req)
    {
      $user = Auth::user();
      $items = DB::table('people')->get();
      // dd($items);

      return view('happy',array('items' => $items, 'user' => $user));
    }
}
