<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\User;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $user = User::find(1);

        if ($user == NULL) {
            return redirect('/signin');
        }

        return $next($request);
    }
}
