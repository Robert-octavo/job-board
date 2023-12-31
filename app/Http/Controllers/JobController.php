<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $jobs = Job::query();
        // $jobs->when(request('search'), function ($query) {
        //     $query->where(function ($query) {
        //         $query->where('title', 'like', '%' . request('search') . '%')
        //             ->orWhere('description', 'like', '%' . request('search') . '%');
        //     });
        // })->when(request('min_salary'), function ($query, $min_salary) {
        //     $query->where('salary', '>=', $min_salary);
        // })->when(request('max_salary'), function ($query, $max_salary) {
        //     $query->where('salary', '<=', $max_salary);
        // })->when(request('experience'), function ($query, $experience) {
        //     $query->where('experience', $experience);
        // })->when(
        //     request('category'),
        //     function ($query, $category) {
        //         $query->where('category', $category);
        //     }
        // );

        $filters = request()->only(['search', 'min_salary', 'max_salary', 'experience', 'category']);

        return view('jobs.index', ['jobs' => Job::with('employer')->filter($filters)->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job->load('employer.jobs')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
