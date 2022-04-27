<?php

namespace App\Http\Controllers\Api\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    public function getDocuments(Request $request)
    {
        $documents = [];
        $doc_1 = [
            'fullname' => 'asdfasdfas',
            'date' => '21.04.2020',
            'status' => 'status',
            'uuid' => Str::uuid()
        ];
        $doc_2 = [
            'fullname' => 'vczxcvz',
            'date' => '21.02.2020',
            'status' => 'status',
            'uuid' => Str::uuid()
        ];
        $documents[] = $doc_1;
        $documents[] = $doc_2;
        return response()->json([
            'documents' => $documents
        ]);
    }

    public function getDocument(Request $request, $uuid)
    {
        $items = [];
        for($i = 0; $i < 3; $i++) {
            $items[] = [
                'code' => rand(100000, 999999),
                'name' => Str::random(6),
                'exists' => false
            ];
        }
        $document = [
            'fullname' => 'vczxcvz',
            'date' => '21.02.2020',
            'status' => 'status',
            'uuid' => Str::uuid(),
            'items' => $items
        ];
        return response()->json([
            'document' => $document
        ]);
    }

    public function setDocument(Request $request, $uuid)
    {
        Log::debug($request->all());
    }

    public function setItems(Request $request) {
        Log::debug($request->all());
        return response()->json([
            'uuid' => $request->uuid,
            'items_count' => sizeof($request->items)
        ]);
    }
}
