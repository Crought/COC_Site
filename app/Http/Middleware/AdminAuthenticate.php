<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)   #1)
    {
        $user = $request->getUser();
        $pass = $request->getPassword();
        if($user == 'user' && $pass = 'cthulhu'){
            return $next($request);   #2)
        }

        $headers = ['WWW-Authenticate' => 'Basic'];
        return new Response('Invalid credentials.', 401, $headers);
    }
}
