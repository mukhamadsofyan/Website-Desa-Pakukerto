<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aduan extends Controller
{
    public function viewaduan(){
        $aduan = \App\Models\Aduan::all();
        return view('Admin.Aduan.viewAduan', compact('aduan'));
    }

    public function acceptAduan($id){
        $aduan = \App\Models\Aduan::find($id);
        $aduan->status = 1;
        $aduan->save();
        return redirect()->back();
    }
}
