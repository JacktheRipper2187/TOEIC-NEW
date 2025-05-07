<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLanguage
{
    public function handle($request, Closure $next)
    {
        // Periksa apakah sesi memiliki 'locale'
        if (session()->has('locale')) {
            App::setLocale(session('locale')); // Atur bahasa dari sesi
        } else {
            App::setLocale('id'); // Default ke 'id' jika sesi tidak ada
        }

        return $next($request);
    }
}