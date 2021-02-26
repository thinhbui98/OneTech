<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\MCategory;

class CommonController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function categories()
    {
        $categories = MCategory::where([
            'deleted' => 0,
            'parent' => 0
        ])
        ->get()->toArray();
        return $categories;
    }
}
