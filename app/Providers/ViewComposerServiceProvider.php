<?php
namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Auth\Guard;

class ViewComposerServiceProvider extends ServiceProvider {
    public function boot(Guard $auth) {
        view()->composer('*', function($view) use ($auth){
        	$user_role = Cache::remember('user_role', 60, function () use ($auth){
        		if(is_null($auth->user())){
        			return '';
        		}else{
        			return $auth->user()->roles->first()->name;
        		}
			
			});
			$user = Cache::remember('user', 60, function () use ($auth){
    		if(is_null($auth->user())){
    			return '';
    		}else{
    			return $auth->user();
    		}
			});  
			$view->with(['user_role' => $user_role, 'user' => $user] );
        });
    }
}