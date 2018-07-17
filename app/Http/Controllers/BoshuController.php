<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoshuController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->boshu($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unboshu($id);
        return redirect()->back();
    }
}
