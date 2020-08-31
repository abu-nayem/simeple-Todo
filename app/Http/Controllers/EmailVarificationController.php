<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class EmailVarificationController extends Controller
{
    
    public function checkmail(){
    	if(Auth::user()->varified==0){
    		return view('email.checkmail');
    	}else{
    		return redirect('/todos');
    	}
    }
    public function verify($id){
    	$user=User::find($id);
    	$user->varified=1;
    	$user->save();

    	return redirect('/todos');
    }

}
