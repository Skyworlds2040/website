<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendorApplicationRequest;
use App\Models\VendorApplication;
use App\Mail\VendorApplicationSubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class VendorApplicationController extends Controller
{
    public function create(): View
    {
        return view('registration');
    }

    public function store(VendorApplicationRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $application = VendorApplication::create($validated);

        Mail::to(config('app.admin_email'))
            ->send(new VendorApplicationSubmitted($application));
            
        return redirect()->route('vendor.application.create')
            ->with('success', 'Your vendor application has been submitted! We will be in touch soon.');
    }
}
