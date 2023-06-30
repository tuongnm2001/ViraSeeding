<?php

namespace App\Http\Controllers\User;

use App\Models\Plan;
use App\Services\FbService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller{

    protected $fbService ;

    public function __construct(FbService $fbService){
        $this->fbService = $fbService ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function show(Request $request, $id){

      // Lấy giá trị của tham số đường dẫn 'id'
      $planId = $request->route('id');
      //  echo $request->route('id');

      // Hoặc có thể lấy trực tiếp giá trị của biến $id
      // $userId = $id;
      $data = Plan::find($planId);

      // echo $data ;

      return view('user.service.facebook.likepost.viplike',[
         'content'=>$data
      ]);
      
   }

   public function listService(Request $request){
       if ($request->ajax()) {
            $data = User::latest()->get();
        }

        return view('user.service.facebook.likepost.viplike');
   }

    public function index(Request $id){
      //   $product = $this->fbService->show($id);
         // dd($product);
         // dd($id);
         echo $id;
         echo '$test';
      //  return view('layouts.nav-aside',[
      //       'title'=>$this->fbService->show()
      //  ]);
    }
}
