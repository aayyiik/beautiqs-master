<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,...$roles)
    {
        if(in_array($request->user()->id_role,$roles)){
            return $next($request);
        }
        return redirect('/');
    }

//     public function handle($request, Closure $next, $pegawai, $pemilik)
// {
//     $roles = Auth::check() ? Auth::user()->role->pluck('name')->toArray() : [];

//     if (in_array($pegawai, $roles)) {
//         return $next($request);
//     } else if (in_array($pemilik, $roles)) {
//         return $next($request);
//     }

    
// }
// return redirect::route('/');
}
