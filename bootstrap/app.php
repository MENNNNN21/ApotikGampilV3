<?php
// File: bootstrap/app.php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        // --- TAMBAHKAN KODE INI ---
        $middleware->redirectGuestsTo(function ($request) {
            // Jika URL yang diminta adalah untuk area admin...
            if ($request->is('admin') || $request->is('admin/*')) {
                // ...maka arahkan ke login admin.
                return route('admin.login');
            }

            // Jika tidak, arahkan ke login user biasa.
            return route('login');
        });
        // --- AKHIR KODE TAMBAHAN ---

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
// --- TAMBAHKAN KODE INI ---
