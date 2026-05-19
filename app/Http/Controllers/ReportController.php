<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();

        return view('report.index', compact('reports'));
    }

    public function create()
    {
        return view('report.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'description' => 'required'
        ]);

        Report::create([
            'number' => $request->number,
            'description' => $request->description
        ]);

        return redirect()->route('reports.index');
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

        return redirect()->route('reports.index');
    }
}