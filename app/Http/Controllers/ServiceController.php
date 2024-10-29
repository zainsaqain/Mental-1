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
        $services = Service::all();
        return view('services.index', compact('services'));
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
        $imagePath = null;
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


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
    
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Only validate if an image is uploaded
        ]);
    
        // Update fields
        $service->name = $request->name;
        $service->description = $request->description;
    
        // Update image if a new one is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $service->image = $imagePath;
        }
    
        $service->save();
    
        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }
    
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
    
        // Optionally delete the image file
        if ($service->image) {
            Storage::delete('public/' . $service->image);
        }
    
        $service->delete();
    
        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }
    
}
