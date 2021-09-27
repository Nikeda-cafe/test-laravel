<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class Person extends Model
{
    //

    public static function getPeople()
    {
      $people = DB::table('people')->paginate(2);
      return $people;
    }
}
