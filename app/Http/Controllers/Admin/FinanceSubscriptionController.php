<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Http\Request;
use App\Models\Plan;
use DataTables;

class FinanceSubscriptionController extends Controller
{
    private $api;

    public function __construct()
    {
        // $this->api = new LicenseController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $verify = $this->api->verify_license();

        // if($verify['status']!=true){
        //     die('Your license is invalid or not activated, please contact support.');
        // }

        if ($request->ajax()) {
            $data = Plan::all()->sortByDesc("created_at");
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                                <a class="dropdown-item" href="'. route("admin.finance.subscriptions.show", $row["id"] ). '"><i class="fa fa-file"></i> View</a>
                                                <a class="dropdown-item" href="'. route("admin.finance.subscriptions.edit", $row["id"] ). '"><i class="fa fa-pencil"></i> Edit</a>
                                                <a class="dropdown-item" data-toggle="modal" id="deleteSubscriptionButton" data-target="#deleteModal" href="" data-attr="'. route("admin.finance.subscriptions.delete", $row["id"] ). '"><i class="fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>';
                        return $actionBtn;
                    })
                    ->addColumn('created-on', function($row){
                        $created_on = '<span>'.date_format($row["created_at"], 'Y-m-d H:i:s').'</span>';
                        return $created_on;
                    })
                    ->addColumn('custom-plan-type', function($row){
                        return ($row["plan_type"] == "pre-paid") ? '<span class="cell-box payment-'.strtolower($row["plan_type"]).'">Pre Paid</span>' : '<span class="cell-box payment-'.strtolower($row["plan_type"]).'">'.ucfirst($row["plan_type"]).'</span>';
                    })
                    ->addColumn('custom-status', function($row){
                        $custom_priority = '<span class="cell-box plan-'.strtolower($row["status"]).'">'.ucfirst($row["status"]).'</span>';
                        return $custom_priority;
                    })
                    ->addColumn('custom-cost', function($row){
                        $custom_priority = $row["cost"] . ' ' . $row["currency"];
                        return $custom_priority;
                    })
                    ->rawColumns(['actions', 'custom-status', 'created-on', 'custom-plan-type', 'custom-cost'])
                    ->make(true);

        }

        return view('admin.finance-management.subscriptions.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.finance-management.subscriptions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // if ($this->api->api_url != 'https://license.berkine.space/') {
        //     return redirect()->back();
        // }

        request()->validate([
            'plan-type' => 'required',
            'plan-status' => 'required',
            'plan-name' => 'required',
            'cost' => 'required|numeric',
            'currency' => 'required',
            'characters' => 'required|integer',
            'bonus' => 'nullable|integer',
            'duration' => 'required|integer'
        ]);


        $plan = new Plan([
            'paypal_gateway_plan_id' => request('paypal_gateway_plan_id'),
            'stripe_gateway_plan_id' => request('stripe_gateway_plan_id'),
            'plan_type' => request('plan-type'),
            'status' => request('plan-status'),
            'plan_name' => request('plan-name'),
            'cost' => request('cost'),
            'currency' => request('currency'),
            'characters' => request('characters'),
            'bonus' => request('bonus'),
            'payment_frequency' => request('duration'),
            'primary_heading' => request('primary-heading'),
            'secondary_heading' => request('secondary-heading'),
            'plan_features' => request('features'),
        ]);

        $plan->save();

        return redirect()->route('admin.finance.subscriptions')->with("success", "New subscription plan has been created successfully");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $id)
    {
        return view('admin.finance-management.subscriptions.show', compact('id'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $id)
    {
        return view('admin.finance-management.subscriptions.edit', compact('id'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Plan $id)
    {
        // if ($this->api->api_url != 'https://license.berkine.space/') {
        //     return redirect()->back();
        // }

        request()->validate([
            'plan-type' => 'required',
            'plan-status' => 'required',
            'plan-name' => 'required',
            'cost' => 'required|numeric',
            'currency' => 'required',
            'characters' => 'required|integer',
            'bonus' => 'nullable|integer',
            'duration' => 'required|integer'
        ]);

        $id->update([
            'paypal_gateway_plan_id' => request('paypal_gateway_plan_id'),
            'stripe_gateway_plan_id' => request('stripe_gateway_plan_id'),
            'plan_type' => request('plan-type'),
            'status' => request('plan-status'),
            'plan_name' => request('plan-name'),
            'cost' => request('cost'),
            'currency' => request('currency'),
            'characters' => request('characters'),
            'bonus' => request('bonus'),
            'payment_frequency' => request('duration'),
            'primary_heading' => request('primary-heading'),
            'secondary_heading' => request('secondary-heading'),
            'plan_features' => request('features'),
        ]);


        return redirect()->route('admin.finance.subscriptions')->with("success", "Selected plan has been updated successfully");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::where('id', $id)->firstOrFail();

        if($plan) {
            $plan->delete();
        }

        return redirect()->route('admin.finance.subscriptions')->with('success', 'Selected plan was deleted successfully');
    }


    public function delete($id)
    {
        $plan = Plan::where('id', $id)->firstOrFail();

        return view('admin.finance-management.subscriptions.delete', compact('plan'));
    }
}
