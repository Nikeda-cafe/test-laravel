<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
     /**
     * (GET)名前を呼んで挨拶を返してくれるAPI
     *
     * @param Request $request
     * @return JsonResponse
     *
     * @group hello
     * @queryParam name string  呼んで欲しい名前
     * @response 200{
     *   "message":"Hello 名無しさん!!GETだよ!!",
     *   "status" :200
     * }
     */
    public function get(Request $req)
    {
      $name = $req->input('name','xxx');
      return response()->json([
        'message' => 'hello'. $name,
        'status' => 200
      ]);
    }


    /**
     * (POST)名前を呼んで挨拶を返してくれるAPI
     *
     * @param Request $request
     * @return JsonResponse
     *
     * @group hello
     * @bodyParam name string  呼んで欲しい名前
     * @response 200{
     *   "message":"Hello 名無しさん!!POSTやで!!",
     *   "status" :200
     * }
     */
    public function post(Request $req)
    {
      $name = $req->input('name','名無し');
      return response()->json([
        'message' => 'hello'. $name,
        'status' => 200
      ]);
    }
}
