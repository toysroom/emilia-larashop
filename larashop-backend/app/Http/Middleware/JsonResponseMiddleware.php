<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class JsonResponseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->is('api/*')) {
            $data = (array) json_decode($response->getContent());

            if (is_array($data))
            {
                $wrapped = [
                    'data' => $data,
                    'timestamp' => Carbon::now()->format("Y-m-d H:i:s")
                ];

                $newData = json_encode($wrapped);
                $response->setContent($newData);
            }
        }

        return $response;
    }
}
