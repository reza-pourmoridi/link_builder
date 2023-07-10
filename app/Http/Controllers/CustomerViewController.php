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


class CustomerViewController extends Controller
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

        return view('customer', compact('result'));
    }
}
