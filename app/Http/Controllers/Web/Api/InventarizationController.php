<?php

namespace App\Http\Controllers\Web\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class InventarizationController extends Controller
{
    public function setData(Request $request) {
        Log::debug($request->all());
        return $request->all();
//        DB::
    }
}
