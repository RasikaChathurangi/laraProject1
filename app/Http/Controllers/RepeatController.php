<?php

namespace App\Http\Controllers;

use App\Models\Repeat;
use Illuminate\Http\Request;

class RepeatController extends Controller
{
    public function index()
    {
        $data = Repeat::all();

        return view('/money_transfer/form1', ['data' => $data]);
    }
}
