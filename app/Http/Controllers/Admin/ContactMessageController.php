<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;

class ContactMessageController extends Controller
{
    public function index()
    {
        $contactMessages = Contact::latest()->get();
        return view('admin.pages.contactMessages.index', compact('contactMessages'));
    }

    public function show(Contact $contactMessage)
    {
        $contactMessage->update(['is_read' => true]);
        return view('admin.pages.contactMessages.show', compact('contactMessage'));
    }

    public function destroy(Contact $contactMessage)
    {
        $contactMessage->delete();
        return redirect()->route('contactMessages.index')->with('success', 'Mesaj silindi.');
    }
}
