    <?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (auth()->check()&&$request->user()->permission=='Admin') {
            return $next($request);
        }
         elseif (auth()->check()&&$request->user()->permission=='Pegawai') {
            return $next($request);
        }
         elseif (auth()->check()&&$request->user()->permission=='HRD') {
            return $next($request);
        }
         elseif (auth()->check()&&$request->user()->permission=='Keuangan') {
            return $next($request);
        }
        return redirect()->guest('/');
    }
}
