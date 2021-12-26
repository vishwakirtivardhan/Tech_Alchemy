<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAuthToken
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
        $flag = false;
        $headers = $request->header();
        // return $headers;
        // echo '<pre>'; print_r($headers);die();
        if(isset($headers['content-type'][0]) and strpos($headers['content-type'][0], 'application/json')!==false)
        {
            if(isset($headers['authtoken'][0]) and !empty($headers['authtoken'][0]))
            {
            $token = str_replace('Bearer ', '', $headers['authtoken'][0]);
            if($token=='8jfdj-uhfudh-43jnfnj83-jnfjdn-34njvnjdnf-83y8fngrjn')
            {
                $flag = true;
                return $next($request);

            }

            }

        }
        else
        {
             return response(['error' => ['code' => 'INVALID_HEADERS','description' => 'Invalid Headers.-'.$headers['content-type'][0]]], 401);

        }
        if($flag==false)
            return response(['error' => ['code' => 'INVALID_TOKEN','description' => 'Invalid Token or Input Type.']], 401);
        
       // return $next($request);
    }
}
