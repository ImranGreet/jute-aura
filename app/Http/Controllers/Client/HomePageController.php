<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ClientRequirment;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('Pages.Client.welcome');
    }

    public function sendClientRequirment(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'required|string|max:20',
            'company'   => 'nullable|string|max:255',
            'website'   => 'nullable|string|max:255',
            'country'   => 'nullable|string|max:100',
            'message'   => 'nullable|string',
        ]);

        $clientRequirement = ClientRequirment::create($validated);
        $clientRequirement->save();

        // Here you can handle the validated data, e.g., save it to the database or send an email.
        return redirect()->back()->with('success', 'Your requirement has been sent successfully!');
    }

}
