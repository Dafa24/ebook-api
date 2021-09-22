<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103119013',
            'Albiyana Akbar Dafa Pradipa',
            'Laki-laki',
            '+62 815-4804-5546',
            'XII RPL 1'
        ]);
    }
}
