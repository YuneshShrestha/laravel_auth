<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

// use Nexmo\
class SmsController extends Controller
{

    public function index(){
        Nexmo::message()->send([
            'to'=> '9779805332596',
            'from'=> '9779842064331',
            'text'=> 'Hello',
        ]);
        echo 'sent';
    }
}
