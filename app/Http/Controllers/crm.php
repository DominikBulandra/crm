<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crm extends Controller
{
   public function toPage($name)
    {
        return view('pages.'. $name);
    }
}
