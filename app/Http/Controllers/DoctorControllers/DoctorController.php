<?php

namespace App\Http\Controllers\DoctorControllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\DoctorRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data["doctors"] = User::with(['roles'])->latest()->get();
        return view("doctor_management/index", );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $doctors = DoctorRequest::all();
        return view("doctor_management/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        return redirect()->route(route: "doctor.index");
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
    public function edit(string $id): View
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
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

    public function status(string $id)
    {
        //
    }
}