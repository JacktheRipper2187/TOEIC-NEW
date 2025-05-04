<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLanguage
{
    public function handle($request, Closure $next)
    {
        $lang = $request->lang ?? 'id'; // Default ke 'id' jika tidak ada parameter
        App::setLocale($lang); // Mengatur bahasa aplikasi
        return $next($request);
    }
}