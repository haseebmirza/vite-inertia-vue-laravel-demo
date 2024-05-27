<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * Determines the current asset version.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public function version($request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function share($request)
    {
        return array_merge(parent::share($request), [
            // Shared props go here.
        ]);
    }
}
