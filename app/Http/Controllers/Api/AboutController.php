<?php

namespace App\Http\Controllers\Api;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AboutController extends Controller
{
    public function index()
    {
        return About::firstOrFail();
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $content = About::first();

        if (!$content) {
            return response()->json(['message' => 'Kayıt bulunamadı.'], 404);
        }

        $content->update($request->only('title', 'content'));

        return response()->json(['message' => 'Başarıyla Güncellendi.', 'data' => $content], 200);
    }
}