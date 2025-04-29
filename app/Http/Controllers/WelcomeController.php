<?php

namespace App\Http\Controllers;

use App\Models\IndexPage;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = IndexPage::first();

        return view('website.page.index', [
            'data' => $data,
        ]);
    }
}
