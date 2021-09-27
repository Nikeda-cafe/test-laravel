<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //

    public static function getPeople()
    {
      $people = Person::select('*')->get();
      return $people->toArray();
    }
}
