<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Software;
use App\Models\SoftwareCategory;
use Illuminate\Http\Request;

class SoftwareFrontController extends Controller
{
    public function index(Request $request)
    {
        $software_categories = SoftwareCategory::get();

        $softwares = Software::with('software_category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('software_category_id', $request->category);
            })
            ->paginate(6);
        return view('frontend.softwares.index', ['softwares' => $softwares, 'software_categories' => $software_categories]);
    }

    public function show(Software $software)
    {
        $software->load('software_category:id,title');
        $softwares = Software::with('software_category:id,title')->limit(5)->get();
        return view('frontend.softwares.show', ['softwares' => $softwares, 'software' => $software]);
    }
}
