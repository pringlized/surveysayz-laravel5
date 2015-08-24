<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function showList()
    {
        $issues = \App\IssueModel::all();
        return view('admin.issue_list', ['issues' => $issues, 'statusType' => 'All']);
    }
    
    
    public function showListByStatus($status)
    {
        $issues = \App\IssueModel::where('status', $status)->get();
        return view('admin.issue_list', [
            'issues' => $issues, 
            'statusType' => ucfirst($status)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.issue_add');
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
        $issue = \App\IssueModel::findOrFail($id);
        $questions = \App\IssueModel::find($id)->questions;
        
        // get available status & editable status
        $editable = true;
        $availableStatus = getAvailableStatuses($issue->status);
    
        return view('admin.issue', [
            'issue' => $issue, 
            'questions' => $questions, 
            'editable' => $editable, 
            'availableStatus' => $availableStatus
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
