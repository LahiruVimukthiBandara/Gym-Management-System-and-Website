<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\User;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    // Index function
    public function index(){
        return view('admin/fees/fees');
    }

    // Show function
    public function show(){

    }
    
    // Create function
    public function create(){
        $members = User::pluck('name', 'id');

        return view('admin/fees.create', compact('members'));
    }

    // Store function
    public function store(Request $request){

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'amount' => 'required|integer',
        ]);

        $fee = new fee();

        $fee->user_id = $request->input('user_id');
        $fee->date = $request->input('date');
        $fee->amount = $request->input('amount');
        $fee->save();

        return redirect()->route('fees.index')->with('success', 'Fees Added Successfully!');
    }

    // Edit function
    public function edit( Fee $fee){
        $members = User::pluck('name', 'id');
        return view('admin/fees.edit', compact('fee','members'));
    }
    
    // Update function
    public function update(Request $request, Fee $fee){

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'amount' => 'required',
        ]);

        $fee->user_id = $request->input('user_id');
        $fee->date = $request->input('date');
        $fee->amount = $request->input('amount');
        $fee->update();

        return redirect()->route('fees.index')->with('success', 'Fees Edited Successfully!');
    }

    // Delete function
    public function destroy(Fee $fee){
        $fee->delete();

        return redirect()->route('fees.index')->with('success', 'Fees Deleted Successfully!');
    }
}
