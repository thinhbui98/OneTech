<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MAdmin;
use App\Models\MCategory;

class AdminController extends CommonController
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $inputRequest = $request->all();
            $errors = '';
            $checkAdmin = MAdmin::where([
                'username' => $inputRequest['username'],
                'password' => $inputRequest['password'],
                'deleted' => 0
            ])
            ->orWhere([
                'email' => $inputRequest['username'],
                'password' => $inputRequest['password'],
                'deleted' => 0
            ])
            ->get();
            if (count($checkAdmin) > 0) {
                return redirect('admin/list');
            } else {
                $errors = 'Wrong username or password';
                return view('admin.login',$errors);
            }
        }
        return view('admin.login');
    }
}
