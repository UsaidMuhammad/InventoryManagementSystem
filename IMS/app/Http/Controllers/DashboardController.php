<?php

namespace App\Http\Controllers;

use Illuminate\Session\SessionManager;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * '/home' calls this route 
     * 
     * @param none
     * @return view dashboard
     */
    public function index()
    { 
        $this->permission();
        $data = [
            'pagetitle' => 'Dashboard',
            'permission' => Session()->get('permission'),
            'name' => \Auth::user()->name,
        ];
        return view('dashboard',$data);;
    }


    /**
     * Checks if session has permission in it if not they adds to it
     * 
     * @param null
     * @return null
     */
    private function permission()
    {
        if (!Session()->has('permission')) {
            $permission = User::find(\Auth::user()->id)->details;
            $permission_arr = [
                'customer' => $permission->permission_customer,
                'supplier' => $permission->permission_supplier,
                'product' => $permission->permission_product,
                'stocks' => $permission->permission_stocks,
                'sales' => $permission->permission_sales,
                'payment' => $permission->permission_payment,
                'report' => $permission->permission_report,
                'users' => $permission->permission_users,
            ];

            Session()->put('permission', $permission_arr);
        }
    }
}
