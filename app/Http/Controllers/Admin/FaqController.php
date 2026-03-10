<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('order')->orderBy('id')->get();
        return view('admin.pages.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.pages.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:500',
            'answer'   => 'required|string',
        ]);

        Faq::create([
            'question'  => $request->input('question'),
            'answer'    => $request->input('answer'),
            'order'     => $request->input('order', 0),
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('faqs.index')->with('success', 'SSS eklendi.');
    }

    public function edit(Faq $faq)
    {
        return view('admin.pages.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:500',
            'answer'   => 'required|string',
        ]);

        $faq->update([
            'question'  => $request->input('question'),
            'answer'    => $request->input('answer'),
            'order'     => $request->input('order', 0),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('faqs.index')->with('success', 'SSS güncellendi.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'SSS silindi.');
    }
}
