<?php
namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Spatie\RobotsMiddleware\RobotsMiddleware;

class SelectiveRobotsMiddleware extends RobotsMiddleware
{
    protected function shouldIndex(Request $request) : string
    {
        if ($request->segment(1) === 'index' or $request->segment(1) == 'contact-us') {
            return 'noindex';
        }

        return 'all';
    }
}