<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CategoryUser;
use Illuminate\Support\Facades\Auth;
class CheckUserCategoryComum
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifique se o usuário está autenticado
        if (Auth::check()) {
            $user_category = Auth::user()->user_category_id;

            if ($user_category != CategoryUser::ADMIN && $user_category != CategoryUser::GERENTE  && $user_category != CategoryUser::COMUM) {
                abort(403, 'Acesso não autorizado');
            }
        }

        return $next($request);
    }
}
