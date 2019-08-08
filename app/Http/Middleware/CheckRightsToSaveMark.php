<?php

namespace App\Http\Middleware;

use Closure;

class CheckRightsToSaveMark
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
        $jsonArray = (array)json_decode($request->getContent(), true);
        $hashString = "\"".sha1($jsonArray['tch_id']."andee".$jsonArray['point_id'])."\"";
        if(!$jsonArray['name'] == $hashString){
            return $request;
        }

        return $next($request);
    }
}
