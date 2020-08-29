<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class EmailVarificationController extends Controller
{
    
    public function checkmail(){
    	return view('email.checkmail');
    }
    public function verify($id){
    	$user=User::find($id);
    	$user->varified=1;
    	$user->save();

    	return redirect('/todos');
    }

}
