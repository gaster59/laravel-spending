<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Earning;

class EarningController extends BaseController
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $page = $page - 1;
        $list = Earning::skip(0)->take(10)->get();
    }

    public function add()
    {

    }
}
