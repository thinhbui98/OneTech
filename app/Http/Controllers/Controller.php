<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function category()
    {
        $category = MCategory::where([
            'deleted' => 0,
            'parent' => 0
        ])
        ->get()->toArray();
        return view('admin.index',['category' => $category]);
    }
}
