<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AdminProjectsController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::query()
            ->when($request->search, function ($query, $search) {
                $query->search($search);
            })
            ->when($request->status && $request->status !== 'all', function ($query) use ($request) {
                $query->byStatus($request->status);
            })
            ->when($request->category && $request->category !== 'all', function ($query) use ($request) {
                $query->byCategory($request->category);
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return Inertia::render('Admin/Projects/Index', [
            'projects' => $projects,
            'filters' => $request->only(['search', 'status', 'category']),
            'statuses' => Project::getStatuses(),
            'categories' => Project::getCategories(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Projects/Create', [
            'statuses' => Project::getStatuses(),
            'categories' => Project::getCategories(),
            'technologies' => Project::getTechnologies(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:' . implode(',', array_keys(Project::getStatuses())),
            'category' => 'required|string|max:255',
            'technologies' => 'required|array',
            'technologies.*' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'gallery' => 'nullable|array',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Handle thumbnail image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery')) {
            $galleryImages = [];
            foreach ($request->file('gallery') as $file) {
                $galleryImages[] = $file->store('projects', 'public');
            }
            $validated['gallery'] = $galleryImages;
        }

        Project::create($validated);

        return Redirect::route('admin-projects')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return Inertia::render('Admin/Projects/Show', [
            'project' => $project,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return Inertia::render('Admin/Projects/Edit', [
            'project' => $project,
            'statuses' => Project::getStatuses(),
            'categories' => Project::getCategories(),
            'technologies' => Project::getTechnologies(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:' . implode(',', array_keys(Project::getStatuses())),
            'category' => 'required|string|max:255',
            'technologies' => 'required|array',
            'technologies.*' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'gallery' => 'nullable|array',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Handle thumbnail image upload
        if ($request->hasFile('image')) {
            // Delete old thumbnail image
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery')) {
            // Delete old gallery images
            if ($project->gallery) {
                foreach ($project->gallery as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            $galleryImages = [];
            foreach ($request->file('gallery') as $file) {
                $galleryImages[] = $file->store('projects', 'public');
            }
            $validated['gallery'] = $galleryImages;
        }

        $project->update($validated);

        return Redirect::route('admin-projects')
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete thumbnail image if exists
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        // Delete gallery images if exists
        if ($project->gallery) {
            foreach ($project->gallery as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $project->delete();

        return Redirect::route('admin-projects')
            ->with('success', 'Project deleted successfully.');
    }

    /**
     * Bulk actions for projects
     */
    public function bulkAction(Request $request)
    {
        $validated = $request->validate([
            'action' => 'required|in:delete,update_status',
            'project_ids' => 'required|array',
            'project_ids.*' => 'exists:projects,id',
            'status' => 'required_if:action,update_status|in:' . implode(',', array_keys(Project::getStatuses())),
        ]);

        $projects = Project::whereIn('id', $validated['project_ids']);

        switch ($validated['action']) {
            case 'delete':
                // Delete images
                $projects->get()->each(function ($project) {
                    // Delete thumbnail image
                    if ($project->image) {
                        Storage::disk('public')->delete($project->image);
                    }
                    // Delete gallery images
                    if ($project->gallery) {
                        foreach ($project->gallery as $image) {
                            Storage::disk('public')->delete($image);
                        }
                    }
                });
                $projects->delete();
                $message = 'Projects deleted successfully.';
                break;

            case 'update_status':
                $projects->update(['status' => $validated['status']]);
                $message = 'Projects status updated successfully.';
                break;
        }

        return Redirect::route('admin-projects')
            ->with('success', $message);
    }
}
