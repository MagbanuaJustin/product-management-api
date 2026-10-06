<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * Middleware: AuthMiddleware
 * 
 * Automatically generated via CLI.
 */
class AuthMiddleware
{
    /**
     * Handle the incoming request
     *
     * @param Closure $next
     * @return mixed
     */
    public function handle(Closure $next)
    {
        // TODO: Add your middleware logic here (authentication, authorization, etc.)

        $api = load_class('api', 'libraries');
        $api->require_jwt();   
        return $next(); 
    }
}
