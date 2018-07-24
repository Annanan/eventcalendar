<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventFavoriteController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->event_favo($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->event_unfavo($id);
        \Auth::user()->unboshu($id);
        return redirect()->back();
    }
}
