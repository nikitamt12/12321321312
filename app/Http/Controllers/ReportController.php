<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Status;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $query = Report::query();

        if ($request->sort == 'asc') {

            $query->orderBy('created_at', 'asc');

        }

        if ($request->sort == 'desc') {

            $query->orderBy('created_at', 'desc');

        }

        if ($request->status) {

            $query->where('status_id', $request->status);

        }

        $reports = $query->paginate(5);

        $statuses = Status::all();

        return view('report.index', compact(
            'reports',
            'statuses'
        ));
    }

    public function create()
    {
        return view('report.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'number' => 'required',
        'description' => 'required',
        'path_img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $path = null;

    if ($request->hasFile('path_img')) {

        $path = $request->file('path_img')
            ->store('reports', 'public');

    }

    Report::create([
        'number' => $request->number,
        'description' => $request->description,
        'status_id' => 1,
        'user_id' => auth()->id(),
        'path_img' => $path
    ]);

    return redirect()
        ->route('reports.index')
        ->with('success', 'Заявление успешно создано');
}

    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()->route('reports.index');
    }

    public function edit(Report $report)
    {
        return view('report.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $request->validate([
            'number' => 'required',
            'description' => 'required'
        ]);

        $report->update([
            'number' => $request->number,
            'description' => $request->description
        ]);

        
        return redirect()->route('reports.index')->with('success', 'Успешно!');
    }
}