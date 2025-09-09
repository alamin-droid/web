<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VpsPlan;
use Illuminate\Http\Request;

class VpsPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vpsPlans = VpsPlan::all();
        return view('admin.vps-plans.index', compact('vpsPlans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vps-plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'cpu' => 'required|integer',
            'ram' => 'required|integer',
            'disk' => 'required|integer',
            'bandwidth' => 'required|integer',
        ]);

        VpsPlan::create($request->all());

        return redirect()->route('admin.vps-plans.index')
            ->with('success', 'VPS plan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(VpsPlan $vpsPlan)
    {
        return view('admin.vps-plans.show', compact('vpsPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VpsPlan $vpsPlan)
    {
        return view('admin.vps-plans.edit', compact('vpsPlan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VpsPlan $vpsPlan)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'cpu' => 'required|integer',
            'ram' => 'required|integer',
            'disk' => 'required|integer',
            'bandwidth' => 'required|integer',
        ]);

        $vpsPlan->update($request->all());

        return redirect()->route('admin.vps-plans.index')
            ->with('success', 'VPS plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VpsPlan $vpsPlan)
    {
        $vpsPlan->delete();

        return redirect()->route('admin.vps-plans.index')
            ->with('success', 'VPS plan deleted successfully.');
    }
}
