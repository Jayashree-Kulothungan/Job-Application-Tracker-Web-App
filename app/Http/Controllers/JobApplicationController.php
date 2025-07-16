<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = auth()->user()->jobApplications()->latest()->get();
        return view('applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'status' => 'required|in:Applied,Interview,Offer,Rejected',
            'applied_date' => 'nullable|date',
            'notes' => 'nullable|string',
        ]);

        JobApplication::create([
            'user_id' => auth()->id(),
            'company' => $request->company,
            'job_title' => $request->job_title,
            'status' => $request->status,
            'applied_date' => $request->applied_date,
            'notes' => $request->notes,
        ]);

        return redirect()->route('applications.index')->with('success', 'Job application added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobApplication $jobApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $jobApplication)
    {
        //
    }
}
