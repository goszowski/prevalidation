<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use DB;

class PrevalidationController extends Controller
{
    public function prevalidate(Request $request)
    {
        return DB::table('Validation')
            ->where('telephone', $request->GSW_PHONE)
            ->exists() ? response()->json(['GSW_CALL_RESULT' => 49], 409) : response('OK', 200);
    }
}
