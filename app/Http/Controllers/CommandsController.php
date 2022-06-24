<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class CommandsController extends Controller
{
        function link(){
            Artisan::call('storage:link');
            return 'ok?';
        }  

}
