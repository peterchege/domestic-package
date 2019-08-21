<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\User;
use App\Pr_dp_premise;
use App\Pr_dp_content;
use App\Pr_dp_allrisk;
use App\Pr_dp_domestic;
use App\Pr_dp_general_information;
use App\Ref_roof_material;
use App\Ref_wall_material;
use App\SocialFacebookAccount;
//use Illuminate\Support\Facades\Auth;
use Auth;
use PhpParser\Node\Stmt\Catch_;

class PremisesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start(Request $request)
    {
        //storing premises form data
        $this->validate($request, [
            'wall_material' => 'required',
            'roof_material' => 'required',
            'building_height' => 'required',
            'rad' => 'required|in:1,0',
            'dwelling' => 'required|in:private,self-contained,room-not-self-contained',
            'dwelling_occupation' => 'required|in:1,0',
            'thirty_day' => 'required|in:1,0',
            // 'let' => 'required|in:1,0'
            'repair_state' => 'required|in:1,0',
            'thirty_day' => 'required|in:1,0',
            'burglar_proof' => 'required|in:1,0'
        ]);

        $building_amount = $request->input('building_amount');
        $content_amount = $request->input('content_amount');
        $domestic_amount = $request->input('domestic_amount');
        $risk_amount = $request->input('risk_amount');
        $user_id = Auth::user()->user_id;

        if ($building_amount !== 'null' && $content_amount !== 'null' &&  $risk_amount !== 'null' && $domestic_amount !== 'null') {

            try {
                $feed = new Pr_dp_premise;
                $feed->user_id = $user_id;
                $feed->floors = $request->input('building_height');
                $feed->business = $request->input('rad');
                $feed->business_description = $request->input('rad_details');
                $feed->dwelling  = $request->input('dwelling');
                $feed->sole_occupation = $request->input('dwelling_occupation');
                $feed->for_hire = $request->input('let');
                $feed->thirty_day_inoccupancy = $request->input('thirty_day');
                $feed->thirty_day_inoccupancy_details =  $request->input('thirty_day_details');
                $feed->good_state_of_repair = $request->input('repair_state');
                $feed->burglar_proof = $request->input('burglar_proof');
                $feed->burglar_proof_details = $request->input('burglar_proof_details');
                $feed->other_sec_arrangement = $request->input('other_security');
                $feed->premises_value = $request->input('building_amount');
                $feed->save();
                return redirect()->route('product_content');
            } catch (\Exception $th) {
                //throw $th;
                return back();
            }
        } elseif ($building_amount !== 'null' && $content_amount == 'null' && $risk_amount == 'null' && $domestic_amount == 'null') {
            try {
                $feed = new Pr_dp_premise;
                $feed->user_id = $user_id;
                $feed->floors = $request->input('building_height');
                $feed->business = $request->input('rad');
                $feed->business_description = $request->input('rad_details');
                $feed->dwelling  = $request->input('dwelling');
                $feed->sole_occupation = $request->input('dwelling_occupation');
                $feed->for_hire = $request->input('let');
                $feed->thirty_day_inoccupancy = $request->input('thirty_day');
                $feed->thirty_day_inoccupancy_details =  $request->input('thirty_day_details');
                $feed->good_state_of_repair = $request->input('repair_state');
                $feed->burglar_proof = $request->input('burglar_proof');
                $feed->burglar_proof_details = $request->input('burglar_proof_details');
                $feed->other_sec_arrangement = $request->input('other_security');
                $feed->premises_value = $request->input('building_amount');
                $feed->save();
                return redirect()->route('general_information');
            } catch (\Exception $th) {
                //throw $th;
                return back();
            }
            return redirect()->route('general_information');
        } elseif ($building_amount !== 'null' && $content_amount !== 'null' && $risk_amount == 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount !== 'null' && $content_amount == 'null' && $risk_amount !== 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_allrisk');
        } elseif ($building_amount !== 'null' && $content_amount == 'null' && $risk_amount == 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_domestic');
        } elseif ($building_amount !== 'null' && $content_amount !== 'null' && $risk_amount !== 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount !== 'null' && $content_amount !== 'null' && $risk_amount == 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount !== 'null' && $content_amount == 'null' && $risk_amount !== 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_allrisk');
        } elseif ($building_amount == 'null' && $content_amount !== 'null' && $risk_amount == 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount == 'null' && $content_amount !== 'null' && $risk_amount !== 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount == 'null' && $content_amount !== 'null' && $risk_amount !== 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount == 'null' && $content_amount !== 'null' && $risk_amount == 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_content');
        }
    }


    /**
     * Feeding content data to db.
     *
     * @return \Illuminate\Http\Response
     */
    public function contentSubmit(Request $request)
    {
        //
        try {
            for ($i = 0; $i < count($request->item_description); $i++) {
                $description = new Pr_dp_content;
                $description->item_description = $request->item_description[$i];
                $description->item_value = $request->item_value[$i];
                $description->section_id = 2;
                $description->customer_role = 'owner';
                $description->premises_id = 3;
                $description->save();
            }
            return redirect('product_allrisk');
        } catch (\Exception $th) {
            return back();
        }
    }

    /**
     * Feeding all risk data to db.
     *
     * @return \Illuminate\Http\Response
     */
    public function allriskSubmit(Request $request)
    {
        //
        try {
            for ($i = 0; $i < count($request->item_description); $i++) {
                $description = new Pr_dp_allrisk;
                //from product content
                $description->content_id = 1;
                //from form
                $description->serial_number = $request->serial_number[$i];
                $description->make_model = $request->make_model[$i];
                $description->item_description = $request->item_description[$i];
                $description->value = $request->value[$i];
                //product section info
                $description->section_id = 3;
                //customer info
                $description->customer_role = 'owner';
                //premises info
                $description->premises_id = 3;

                $description->save();
            }
        } catch (\Exception $e) {
            // echo $e->getMessage();
            return back();
        }
        //exit('reached');
    }


    /**
     * Feeding domestic data to db.
     *
     * @return \Illuminate\Http\Response
     */
    public function domesticSubmit(Request $request)
    {
        //

        try {
            for ($i = 0; $i < count($request->employee_number); $i++) {
                //submit data
                $domestic = new Pr_dp_domestic;
                $domestic->employee_type = $request->employee_id[$i];
                $domestic->number_of_employees = $request->employee_number[$i];
                $domestic->annual_salary = $request->annual_salary[$i];
                $domestic->section_id = 1;
                $domestic->customer_role = 'owner';
                $domestic->premises_id = 3;
                $domestic->save();
            }
            return redirect('general_information');
        } catch (Exception $e) {
            report($e);
            return back();
        }
    }

    /**
     * Feeding general information data to db.
     *
     * @return \Illuminate\Http\Response
     */
    public function generalInformationSubmit(Request $request)
    {
        //
        //storing premises form data
        $this->validate($request, [
            'insurer_decline' => 'required',
            'special_terms' => 'required',
            'cancelled_refused_cover' => 'required',
            'increased_premium' => 'required',
            'sustained_loss_from_mentioned_perils' => 'required',
        ]);

        $user_id = Auth::user()->user_id;
        try {
            $general = new Pr_dp_general_information;
            $general->user_id = $user_id;
            $general->insurer_decline = $request->input('insurer_decline');
            $general->insurer_decline_details = $request->input('insurer_decline_details');
            $general->special_terms = $request->input('special_terms');
            $general->special_terms_details = $request->input('special_terms_details');
            $general->cancelled_refused_cover = $request->input('cancelled_refused_cover');
            $general->cancelled_refused_cover_details = $request->input('cancelled_refused_cover_details');
            $general->increased_premium = $request->input('increased_premium');
            $general->increased_premium_details = $request->input('increased_premium_detail');
            $general->sustained_loss_from_mentioned_perils = $request->input('sustained_loss_from_mentioned_perils');
            $general->sustained_loss_from_mentioned_perils_details = $request->input('sustained_loss_from_mentioned_perils_details');
            $general->save();
            return redirect()->route('billingDetailsFetch');
        } catch (Exception $e) {
            report($e);
            return back();
        }
    }



    /**
     * Fetching current user instance.
     *
     * @return \Illuminate\Http\Response
     */
    public function billingDetailsFetch()
    {
        $userDetails = User::where('user_id', Auth::user()->user_id)->get();
        return view('billing_details', compact('userDetails'));
    }


    /**
     * Updating user details from billing details form.
     *
     * @return \Illuminate\Http\Response
     */
    public function billingDetailsSubmit(Request $request)
    {
        //
        //validating form data from billing details page
        $this->validate($request, [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'other_number' => 'required',
            'email' => 'required',
            'kra' => 'required',
            'national_id' => 'required',
            'postal_address' => 'required',
            'city_town' => 'required',
            'post_code' => 'required',
            'county' => 'required',
            'terms_conditions' => 'required',

        ]);

        // getting id of current user
        $user_id = Auth::user()->user_id;
        try {
            $updateData = new User;


            // redirect to payments page after updating user data in users table
            return redirect()->route('');
        } catch (Exception $e) {
            report($e);
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function premisesStore(Request $request)
    { }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
