<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public const PAGES = ['home', 'about', 'service', 'software'];
    public function index(Request $request)
    {
        $query = Faq::whereNull('faqable_type');

        if ($request->filled('q')) {
            $query->where('question', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        if ($request->filled('page')) {
            $query->where('page', $request->page);
        }

        $faqs = $query->latest()->paginate(10);
        $pages = self::PAGES;
        return view('admin.faqs.index', compact('faqs', 'pages'));
    }

    public function create()
    {
        $pages = self::PAGES;
        return view('admin.faqs.create', compact('pages'));
    }

    public function store(StoreFaqRequest $request)
    {
        Faq::create($request->validated() + ['faqable_id' => null, 'faqable_type' => null]);
        return redirect()->route('admin.page-faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function edit(Faq $faq)
    {
        $pages = self::PAGES;
        return view('admin.faqs.edit', compact('faq', 'pages'));
    }

    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());
        return redirect()->route('admin.page-faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('admin.page-faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
