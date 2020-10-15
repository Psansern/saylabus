<?php

namespace App\Http\Middleware;

use Closure;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     * เพ่ิมส่วนของการสร้างระบบcheck ผู้ใช้งาน
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user=$request->user();
        if($user && $user->status=='admin'){

            return $next($request);

        }
        abort(403);
    }
}
