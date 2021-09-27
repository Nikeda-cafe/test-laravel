<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Validator;

class Person extends Model
{
    //

    public static function getPeople()
    {
      $people = DB::table('people')->paginate(5);
      return $people;
    }

    public static function getInsertPersonValidator($req)
    {
      $validator = Validator::make($req->all(),array(
        'name' => 'required'
      ));

      return $validator;
    }

    public static function insertPerson($req)
    {
      $params = array(
        'name' => $req->name,
        'mail' => $req->mail,
        'age' => $req->age
      );
      $insert = DB::table('people')->insert($params);

      return $insert;
    }
}
