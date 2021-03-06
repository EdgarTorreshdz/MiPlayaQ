<?php

namespace App\Http\Middleware;

use Closure;

class MDusuariostandard
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
        if(\Auth::check()){

        
        $usuario_actual=\Auth::user();
        if($usuario_actual->permiso!=2){
            return redirect()->route('denied');
         //return view("welcome")->with("msj","Esta seccion es solo visible para el usuario estandard <br/> usted aun no ha sido asignado como usuario standard , consulte al administrador del sistema");
        }
        return $next($request);
    }else{
        return redirect()->route('login');
    }
    }
}
