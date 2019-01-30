<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Link;


class LinksController extends Controller
{
    public function index() {
        $links = DB::table('links')->get();

        return view('links', ['links' => $links]);
    }

    public function showLinksForm() {
        return view('form');
    }

    public function handleLinksForm(Request $request) {
        $validData = $request->validate([
            'title' => 'required|min:8',
            'description' => 'required',
            'url' => 'required|url'
        ]);

        $newLink = new Link();
        $newLink->fill([
            'title'           => $validData['title'],
            'description'     => $validData['description'],
            'url'             => $validData['url']
        ]);


        $newLink->save();
        return redirect()->route('links');
    }
}

