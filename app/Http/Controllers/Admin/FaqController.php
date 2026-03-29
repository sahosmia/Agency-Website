<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Services\FaqService;

class FaqController extends Controller
{
    public const PAGES = ['home', 'about', 'service', 'software'];

    protected $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->faqService = $faqService;
    }

    public function index(Request $request)
    {
        $faqs = $this->faqService->getFaqs($request->all(), 10);
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
        $this->faqService->storeFaq($request->validated());
        return redirect()->route('admin.page-faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function edit(Faq $faq)
    {
        $pages = self::PAGES;
        return view('admin.faqs.edit', compact('faq', 'pages'));
    }

    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $this->faqService->updateFaq($faq, $request->validated());
        return redirect()->route('admin.page-faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $this->faqService->deleteFaq($faq);
        return redirect()->route('admin.page-faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
