<?php

namespace App\Http\Controllers;

use App\accountant;
use App\demo;
use App\faq;
use App\Helpers;
use App\pricesModel;
use App\programs;
use App\site_types;
use App\works;
use Illuminate\Http\Request;
use App\customer;
use App\staff;
use App\chosen_item;


class CustomerController extends Controller
{
    public function show($id)
    {
        $customer = customer::findOrFail($id);
        $chosen_staff = staff::findOrFail($customer->staff_id);
        $types = site_types::all();
        $works = works::all();
        $works = Helpers::change_site_types($works,$types);
        $faq = faq::all();
        $faq = Helpers::change_site_types($faq,$types);

        $demo = demo::all();
        $programs = programs::all();
        $pricesModel = pricesModel::all();
        $accountant = accountant::all();
        $staff = staff::all();




        $chosen_works = chosen_item::where('customer_id', $customer->id)
            ->where('item_model', 'works')
            ->get();
        if (isset($chosen_works[0])  && json_decode($chosen_works[0]->items_id)){
            $chosen_works = json_decode($chosen_works[0]->items_id);
        } else {
            $chosen_works = array();
        }

        $chosen_programs = chosen_item::where('customer_id', $customer->id)
            ->where('item_model', 'programs')
            ->get();
        if (isset($chosen_programs[0])  && json_decode($chosen_programs[0]->items_id)){
            $chosen_programs = json_decode($chosen_programs[0]->items_id);
        } else {
            $chosen_programs = array();
        }

        $chosen_pricesModel = chosen_item::where('customer_id', $customer->id)
            ->where('item_model', 'pricesModel')
            ->get();
        if (isset($chosen_pricesModel[0])   && json_decode($chosen_pricesModel[0]->items_id) ){
            $chosen_pricesModel = json_decode($chosen_pricesModel[0]->items_id);
        } else {
            $chosen_pricesModel = array();
        }

        $chosen_demo = chosen_item::where('customer_id', $customer->id)
            ->where('item_model', 'demo')
            ->get();
        if (isset($chosen_demo[0])  && json_decode($chosen_demo[0]->items_id)){
            $chosen_demo = json_decode($chosen_demo[0]->items_id);
        } else {
            $chosen_demo = array();
        }

        $chosen_accountants = chosen_item::where('customer_id', $customer->id)
            ->where('item_model', 'accountants')
            ->get();
        if (isset($chosen_accountants[0]) && json_decode($chosen_accountants[0]->items_id) ){
            $chosen_accountants = json_decode($chosen_accountants[0]->items_id);
        } else {
            $chosen_accountants = array();
        }

        $chosen_faq = chosen_item::where('customer_id', $customer->id)
            ->where('item_model', 'faq')
            ->get();
        if (isset($chosen_faq[0]) && json_decode($chosen_faq[0]->items_id) ){
            $chosen_faq = json_decode($chosen_faq[0]->items_id);
        } else {
            $chosen_faq = array();
        }

//        dd($faq);

        $result = [
            'customer'=>$customer,
            'staff'=>$staff,
            'chosen_staff'=>$chosen_staff,
            'types'=>$types ,
            'works'=>$works ,
            'chosen_works'=> $chosen_works ,
            'faq'=>$faq ,
            'chosen_faq'=>$chosen_faq ,
            'demo'=>$demo ,
            'chosen_demo'=>$chosen_demo ,
            'programs'=>$programs ,
            'chosen_programs'=>  $chosen_programs,
            'pricesModel'=>$pricesModel ,
            'chosen_pricesModel'=>$chosen_pricesModel ,
            'accountants'=>$accountant,
            'chosen_accountants'=>$chosen_accountants,
        ];

        return view('admin.customer', compact('result'));
    }

    public function update(Request $request, $id)
    {

        if (isset($request->logo)){
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('images'), $imageName);
            $customerModel = new customer();
            $customerModel->where('id', $id)->update(['logo' => $imageName]);
        }

            $customerModel = new customer();
            $customerModel->where('id', $id)->update(
                [
                    'name' => $request->get('customer_name'),
                    'company' => $request->get('company_name'),
                    'providers' => $request->get('providers'),
                    'staff_id' => $request->get('staff_name'),
                ]
            );

            $chosen_item = new chosen_item();
            $chosen_item
                ->where('item_model', '=', 'programs')
                ->where('customer_id', '=', $id)
                ->delete();
            $chosen_item = new chosen_item();
            $chosen_item->item_model = 'programs';
            $chosen_item->customer_id = $id;
            $chosen_item->items_id = json_encode($request->get('program_check'));
            $chosen_item->save();

            $chosen_item = new chosen_item();
            $chosen_item
                ->where('item_model', '=', 'pricesModel')
                ->where('customer_id', '=', $id)
                ->delete();
            $chosen_item->item_model = 'pricesModel';
            $chosen_item->customer_id = $id;
            $chosen_item->items_id = json_encode($request->get('price_check'));
            $chosen_item->save();



            $chosen_item = new chosen_item();
            $chosen_item
                ->where('item_model', '=', 'works')
                ->where('customer_id', '=', $id)
                ->delete();
            $chosen_item->item_model = 'works';
            $chosen_item->customer_id = $id;
            $chosen_item->items_id = json_encode($request->get('work_check'));
            $chosen_item->save();



            $chosen_item = new chosen_item();
            $chosen_item
                ->where('item_model', '=', 'demo')
                ->where('customer_id', '=', $id)
                ->delete();
            $chosen_item->item_model = 'demo';
            $chosen_item->customer_id = $id;
            $chosen_item->items_id = json_encode($request->get('demo_check'));
            $chosen_item->save();



            $chosen_item = new chosen_item();
            $chosen_item
                ->where('item_model', '=', 'accountants')
                ->where('customer_id', '=', $id)
                ->delete();
            $chosen_item->item_model = 'accountants';
            $chosen_item->customer_id = $id;
            $chosen_item->items_id = json_encode($request->get('accountants_check'));
            $chosen_item->save();

            $chosen_item = new chosen_item();
            $chosen_item
                ->where('item_model', '=', 'faq')
                ->where('customer_id', '=', $id)
                ->delete();
            $chosen_item->item_model = 'faq';
            $chosen_item->customer_id = $id;
            $chosen_item->items_id = json_encode($request->get('faq_check'));
            $chosen_item->save();




        return redirect('/admin/customer/'.$id);

    }

    public function test()
    {
        return view('test');
    }
}
