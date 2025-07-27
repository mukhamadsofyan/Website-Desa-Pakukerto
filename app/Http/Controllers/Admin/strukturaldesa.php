<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class strukturaldesa extends Controller
{
    public function strukturalDesa()
    {
        return view('Admin.strukturaldesa');
    }

    public function tambahstruktural()
    {
        return view('Admin.tambahstruktural');
    }

    public function insertstruktural(Request $request)
    {
        // Logic to insert structural data
        // ...
        return redirect()->route('viewstrukturalDesa')->with('success', 'Data successfully added.');
    }

    public function editstruktural($id)
    {
        // Logic to get structural data by ID for editing
        // ...
        return view('Admin.editstruktural', compact('id'));
    }

    public function updatestruktural(Request $request, $id)
    {
        // Logic to update structural data
        // ...
        return redirect()->route('viewstrukturalDesa')->with('success', 'Data successfully updated.');
    }

    public function deletestruktural($id)
    {
        // Logic to delete structural data by ID
        // ...
        return redirect()->route('viewstrukturalDesa')->with('success', 'Data successfully deleted.');
    }
}
