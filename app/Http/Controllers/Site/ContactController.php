<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $faqs     = Faq::where('is_active', true)->orderBy('order')->get();
        $settings = Setting::first();
        return view('site.pages.contact', compact('faqs', 'settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:30',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'fullname' => $request->input('name') . ' ' . $request->input('surname', ''),
            'email'    => $request->input('email'),
            'phone'    => $request->input('phone'),
            'subject'  => $request->input('service') ?? $request->input('subject', 'Genel'),
            'message'  => $request->input('message'),
            'is_read'  => false,
        ]);

        return redirect()->route('site.contact')->with('success', 'Mesajınız alındı. En kısa sürede size dönüş yapacağız.');
    }
}
