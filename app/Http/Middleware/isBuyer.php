<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Auth;

class isBuyer
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
            return redirect(route('product.getAll'))->withErrorMessage('No eres un comprador.');
        }else{
            if(!Auth::user()->hasRole('buyer')){
                return redirect(route('product.getAll'))->withErrorMessage('No eres un comprador.');
            }
        }
        return $next($request);
    }
}
