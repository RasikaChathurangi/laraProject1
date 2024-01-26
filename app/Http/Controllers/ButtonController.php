<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function clickButton()
{
    // Your logic here
    return view('button.clicked'); // Replace 'button.clicked' with the view you want to display after clicking the button.
}

}
