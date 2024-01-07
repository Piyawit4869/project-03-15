<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('backend.user.index')
 ;   }

    public function type(){
        return view('backend.category.type')
;   }

    public function item(){
        return view('backend.product.item')
;   }
}
