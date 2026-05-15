<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use event_manager\EventManager as Middleware;
use event_manager\Observers;

class StartingEvents
{
    /**
     * Handle an adding starting events.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $ctrl = new \App\Http\Controllers\Controller();
        Middleware::add('onInitingControllerResponse', $ctrl);
        Middleware::add('onEndingControllerResponse', $ctrl);
        return $next($request);
    }
}
