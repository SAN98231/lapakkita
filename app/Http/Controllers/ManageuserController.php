<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManageuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminmanageuser = User::where('usertype', '!=', 'admin')->get();
        return view('admin.manageuser',compact('adminmanageuser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('manageuser')->with('success','user success to added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $data = User::find($id);
        $data->update($request->all());

        return redirect()->route('manageuser')->with('success','success to edit user data');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::find($id);
        
        return view('admin.edituserdata', compact('data'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect()->route('manageuser')->with('success','success to delete user');
    }
}
