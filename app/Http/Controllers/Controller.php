<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use app\Helpers\Helper;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function generate_menus(Request $request)
    {
        $user_id = Auth::id();
        return Helper::generate_menus($request->url,$user_id);
    }

    public function get_number($old_number, $order_number)
    {
        if (empty($old_number)) {
        $order_number = $order_number.str_pad(1, 5, '0', STR_PAD_LEFT);
        } else {
        $old_number = str_replace($order_number, '', $old_number) + 1;
        $order_number = $order_number.str_pad($old_number, 5, '0', STR_PAD_LEFT);
        }

        return $order_number;
    }
}
