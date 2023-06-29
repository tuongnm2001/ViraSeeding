<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Services\Statistics\UserUsageYearlyService;
use App\Services\Statistics\UserPaymentsService;
use App\Models\Subscription;
use App\Models\Payment;
use DataTables;

class ServiceController extends Controller{
    private $api;

    public function __construct(){

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
       return view('user.service.facebook.likepost.viplike',[
            'title'=>$request->__get('plan_name')
       ]);
    }


}
