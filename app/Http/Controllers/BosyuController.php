<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BosyuController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->bosyu($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unbosyu($id);
        return redirect()->back();
    }
}
