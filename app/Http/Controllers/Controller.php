<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use UxWeb\SweetAlert\SweetAlert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(
            function ($request, $next) {
                if (session('success')) {
                    SweetAlert::success(session('success'));
                }

                if (session('error')) {
                    SweetAlert::error(session('error'));
                }

                return $next($request);
            }
        );
    }
}
