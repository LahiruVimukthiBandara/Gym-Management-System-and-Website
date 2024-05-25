<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShaduleController extends Controller
{
    // Index function
    public function index(){
        return view('admin/shadule/shadule');
    }
    
    public function show(){
        
    }

    // Create function
    public function create(){
        return view('admin/shadule.create');
    }

    // Store function
    public function store(){

    }

    // Edit function
    public function edit(){
        return view('createUser.edit');
    }
}
