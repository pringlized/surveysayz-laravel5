<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function showList()
    {
        $users = \App\User::all();
        return view('admin.user_list', ['users' => $users, 'userType' => 'All']);
    }
    
    /**
     * Display list of users based on status.
     *
     * @return Response
     */
    public function showListByRole($role)
    {        
        $users = \App\User::where('role', $role)->get();
        return view('admin.user_list', [
            'users' => $users, 
            'userType' => ucfirst($role)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.user_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = \App\User::findOrFail($id);
        $issues = \App\User::find($id)->issues;
        $activities = \App\User::find($id)->activities;
        
        return view('admin.user', [
            'user'          => $user, 
            'issues'        => $issues,
            'activities'    => $activities
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
