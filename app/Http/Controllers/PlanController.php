<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::all();
        return view('plans.plan', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plans.plan_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'plan_name' => 'required|string|min:2|max:40',
            'plan_price' => 'required|min:2|max:9',
            'plan_bandwidth' => 'required|min:2|max:9',
            'plan_ftp_number' => 'required|min:2|max:9',
            'plan_disk_space' => 'required|min:2|max:9',
            'plan_databases' => 'required|min:2|max:9',
            'plan_domain_type' => 'required|string|min:2|max:40'
        ]);
        Plan::insert([
            'plan_name' => $request->plan_name,
            'plan_price' => $request->plan_price,
            'plan_bandwidth' => $request->plan_bandwidth,
            'plan_ftp_number' => $request->plan_ftp_number,
            'plan_disk_space' => $request->plan_disk_space,
            'plan_databases' => $request->plan_databases,
            'plan_domain_type' => $request->plan_domain_type,
            'created_at' => Carbon::now()

        ]);
        return redirect()->route('plans.show')->with('message', 'plan added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan, $id)
    {
        $plan = Plan::findOrFail($id);
        return view('plans.plan_edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'plan_name' => 'required|string|min:2|max:40',
            'plan_price' => 'required|min:2|max:9',
            'plan_bandwidth' => 'required|min:2|max:9',
            'plan_ftp_number' => 'required|min:2|max:9',
            'plan_disk_space' => 'required|min:2|max:9',
            'plan_databases' => 'required|min:2|max:9',
            'plan_domain_type' => 'required|string|min:2|max:40'
        ]);

        $id = $request->id;
        Plan::findOrFail($id)->update([
            'plan_name' => $request->plan_name,
            'plan_price' => $request->plan_price,
            'plan_bandwidth' => $request->plan_bandwidth,
            'plan_ftp_number' => $request->plan_ftp_number,
            'plan_disk_space' => $request->plan_disk_space,
            'plan_databases' => $request->plan_databases,
            'plan_domain_type' => $request->plan_domain_type,
        ]);
        return redirect()->route('plans.show')->with('message', 'plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Plan::findOrFail($id)->delete();
        return redirect()->route('plans.show')->with('message', 'plan deleted successfully');
    }

    public function choosePlan(Request $request)
    {
        $id = $request->id;
        Plan::findOrFail($id)->update([
            "user_id" => auth()->user()->id,
        ]);
        $user = User::findOrFail(auth()->user()->id);
        $user->plan_id = $id;
        $user->save();


        return view('success', compact('user'));
    }
}
