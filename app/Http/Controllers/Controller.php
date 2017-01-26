<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cache;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected  $user_role;
    protected  $user;
    public function __construct(){
        
        $this->middleware(function ($request, $next) {
            
            $this->user_role = Cache::remember('user_role', 60, function () {
                return Auth::user()->roles->first()->name;
            });
            
            $this->user = Cache::remember('user', 60, function () {
                return Auth::user();
            });
    
             
            return $next($request);
            
        });
    }
}
