<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;




    function testInteractWithDB() {
        $users = DB::select('select * from testtable');
       
        return view('welcome', $data = [
            'users' => $users
        ]);
    }
}
