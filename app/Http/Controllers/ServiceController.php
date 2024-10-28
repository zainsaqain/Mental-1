<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's an image file
    ]);

    // Store the uploaded image in the 'services' folder and get its path
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('services', 'public'); // Store in 'public/services'
    }

    // Create the new service with the provided data
    Service::create([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $imagePath, // Save the image path
    ]);

    // Redirect back or to another page with a success message
    return redirect()->route('services.index')->with('success', 'Service created successfully!');
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
