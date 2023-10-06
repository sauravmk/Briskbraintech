<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Models\PageMetadata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageMetadataController extends Controller
{
    public function index()
    {
        $pageMetadata = PageMetadata::all();
        $pageNames = $this->getPageNamesFromRoutes();

        return view('admin.page-metadata.index', compact('pageMetadata', 'pageNames'));
    }

    public function create()
    {
        $pageNames = $this->getPageNamesFromRoutes();
        return view('admin.page-metadata.create', compact('pageNames'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'page_name' => 'required|unique:page_metadata',
            'title' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        // Create a new page metadata record
        PageMetadata::create([
            'page_name' => $request->input('page_name'),
            'title' => $request->input('title'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
        ]);

        return redirect()->route('admin.page-metadata.index')
            ->with('success', 'Page metadata created successfully');
    }

    public function edit($id)
    {
        $pageMetadata = PageMetadata::find($id);
        $pageNames = $this->getPageNamesFromRoutes();

        return view('admin.page-metadata.edit', compact('pageMetadata', 'pageNames'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'title' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $pageMetadata = PageMetadata::find($id);

        // Update the page metadata record
        $pageMetadata->update([
            'title' => $request->input('title'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
        ]);

        return redirect()->route('admin.page-metadata.index')
            ->with('success', 'Page metadata updated successfully');
    }

    public function destroy($id)
    {
        $pageMetadata = PageMetadata::find($id);
        $pageMetadata->delete();

        return redirect()->route('admin.page-metadata.index')
            ->with('success', 'Page metadata deleted successfully');
    }

    private function getPageNamesFromRoutes()
    {
        $routes = Route::getRoutes()->getRoutesByName();
        $pageNames = [];

        foreach ($routes as $name => $route) {
            // Extract the page name from the route name
            $pageName = str_replace(['.', ''], ' ', $name);
            $pageNames[$name] = ucwords($pageName);
        }

        return $pageNames;
    }
}
