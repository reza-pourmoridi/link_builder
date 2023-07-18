<?php

namespace App\Http\Controllers;

use App\accountant;
use App\demo;
use App\faq;
use App\advertisement;
use App\Helpers;
use App\pricesModel;
use App\programs;
use App\site_types;
use App\works;
use App\staff;
use App\customer;
use App\chosen_item;
use Illuminate\Http\Request;

class selectAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $types = site_types::all();
        $works = works::all();
        $works = Helpers::change_site_types($works,$types);
        $faq = faq::all();
        $faq = Helpers::change_site_types($faq,$types);
        $adds= advertisement::all();


        $demo = demo::all();
        $programs = programs::all();
        $pricesModel = pricesModel::all();
        $staff = staff::all();
        $accountant = accountant::all();


        $result=[
            'types'=>$types ,
            'works'=>$works ,
            'faq'=>$faq ,
            'adds'=>$adds ,
            'demo'=>$demo ,
            'programs'=>$programs ,
            'pricesModel'=>$pricesModel ,
            'staff'=>$staff,
            'accountants'=>$accountant
        ];

        return view('forms.select_app',compact('result'));
    }    /**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        $customer = customer::all();
        $staff = staff::all();

        $result = [
            'customer' => $customer,
            'staff' => $staff
        ];
        return view('forms.customers',compact('result'));
    }    /**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {

        $request-> validate([
            'logo'=>'required',
            'customer_name'=>'required',
            'company_name'=>'required',
            'providers'=>'required',
            'benefits'=>'required',
            'honors'=>'required',
            'staff_name'=>'required',
        ]);

        $imageName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('images'), $imageName);

        $customerModel = new customer();
        $customerModel->logo = $imageName;
        $customerModel->name = $request->get('customer_name');
        $customerModel->company = $request->get('company_name');
        $customerModel->providers = $request->get('providers');
        $customerModel->benefits = $request->get('benefits');
        $customerModel->honors = $request->get('honors');
        $customerModel->staff_id = $request->get('staff_name');
        $customerModel->save();


        if ($request->get('program_check')){
            $chosen_item = new chosen_item();
            $chosen_item->item_model = 'programs';
            $chosen_item->customer_id = $customerModel->id;
            $chosen_item->items_id = json_encode($request->get('program_check'));
            $chosen_item->save();
        }
        if ($request->get('price_check')){
            $chosen_item = new chosen_item();
            $chosen_item->item_model = 'pricesModel';
            $chosen_item->customer_id = $customerModel->id;
            $chosen_item->items_id = json_encode($request->get('price_check'));
            $chosen_item->save();
        }
        if ($request->get('work_check')){
            $chosen_item = new chosen_item();
            $chosen_item->item_model = 'works';
            $chosen_item->customer_id = $customerModel->id;
            $chosen_item->items_id = json_encode($request->get('work_check'));
            $chosen_item->save();
        }
        if ($request->get('demo_check')){
            $chosen_item = new chosen_item();
            $chosen_item->item_model = 'demo';
            $chosen_item->customer_id = $customerModel->id;
            $chosen_item->items_id = json_encode($request->get('demo_check'));
            $chosen_item->save();
        }
        if ($request->get('faq_check')){
            $chosen_item = new chosen_item();
            $chosen_item->item_model = 'faq';
            $chosen_item->customer_id = $customerModel->id;
            $chosen_item->items_id = json_encode($request->get('faq_check'));
            $chosen_item->save();
        }
        if ($request->get('adds_check')){
            $chosen_item = new chosen_item();
            $chosen_item->item_model = 'advertisement';
            $chosen_item->customer_id = $customerModel->id;
            $chosen_item->items_id = json_encode($request->get('adds_check'));
            $chosen_item->save();
        }
        if ($request->get('accountants_check')){
            $chosen_item = new chosen_item();
            $chosen_item->item_model = 'accountants';
            $chosen_item->customer_id = $customerModel->id;
            $chosen_item->items_id = json_encode($request->get('accountants_check'));
            $chosen_item->save();
        }



        return redirect('/admin/customers/');
    }   /**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function show($id)
    {
        //
    }    /**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function edit($id)
    {
        //
    }    /**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function update(Request $request, $id)
    {
        //
    }    /**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy(Request $request)
    {
        $record = customer::findOrFail($request['delete']);
        $record->delete();
        return redirect('/admin/customers');
    }
}
