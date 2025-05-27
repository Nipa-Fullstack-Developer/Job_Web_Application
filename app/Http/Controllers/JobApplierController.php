<?php

namespace App\Http\Controllers;

use App\Models\JobApplier;
use Illuminate\Http\Request;

class JobApplierController extends Controller
{
    
    public function edit(JobApplier $jobapplier)
    {
        return view('dashboard.user.jobapplier.edit', compact('jobapplier'));
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
