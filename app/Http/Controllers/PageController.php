<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class PageController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'title' => 'Welcome to Inertia.js',
            'content' => 'This is a sample page using Inertia.js with Laravel, Vue.js, and Vite.',
        ]);
    }
}
