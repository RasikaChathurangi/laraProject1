<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Form;
class Form1Controller extends Controller
{
     function store(Request $request){

        /*Form::create([
            'user_id'=>auth()->user()->id,
            'full_name'=>$request->name,
            'student_num'=>$request->num,
            'address'=>$request->address,
            'amount'=>$request->amount
        ]);*/
        

        
                   $form=new Form();
                    $form->full_name=$request->name;
                    $form->student_num=$request->num;
                    $form->address=$request->address;
                    $form->amount=$request->amount;
    
                    $form->save();

                    return redirect('/money_transfer/downlod_form1');

    }
}
