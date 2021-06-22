<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect(route('product.getAll'))->withErrorMessage('No eres un administrador.');
        }else{
            if(!Auth::user()->hasRole('admin')){
                return redirect(route('product.getAll'))->withErrorMessage('No eres un administrador.');
            }
        }
        return $next($request);
    }
}
