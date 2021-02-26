<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MAdmin;

class ListController extends CommonController
{
    public function list()
    {
        $categories = $this->categories();
        $listAdmin = MAdmin::get();
        return view('admin.list',[
            'listAdmin' => $listAdmin,
            'categories' => $categories
        ]);
    }
}
