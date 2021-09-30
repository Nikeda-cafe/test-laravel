<?php

use App\Models\Restdata;
use Illuminate\Database\Seeder;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $params = array(
          'message' => 'Google',
          'url' => 'https://google.co.jp'
        );

        $restdata = new Restdata();
        $restdata->fill($params)->save();

        $params = array(
          'message' => 'Yahoo',
          'url' => 'https://yahoo.co.jp'
        );

        $restdata = new Restdata();
        $restdata->fill($params)->save();
        $params = array(
          'message' => 'MSN',
          'url' => 'https://www.msn.com/ja-jp'
        );

        $restdata = new Restdata();
        $restdata->fill($params)->save();
    }
}
