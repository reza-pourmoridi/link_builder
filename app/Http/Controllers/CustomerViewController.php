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
use Illuminate\Http\Request;
use App\customer;
use App\staff;
use App\chosen_item;


class CustomerViewController extends Controller
{
    public function show($slug)
    {
        $customer = customer::where('slug', $slug)->first();
        $chosen_staff = staff::findOrFail($customer->staff_id);
        $types = site_types::all();
        $works = works::all();
        $works = Helpers::change_site_types($works,$types);
        $faq = faq::all();
        $faq = Helpers::change_site_types($faq,$types);
        $advertisement = advertisement::all();


        $demo = demo::all();
        $programs = programs::all();
        $pricesModel = pricesModel::all();
        $accountant = accountant::all();
        $staff = staff::all();




        $chosen_works = $this->chosen_item('works' , $customer->id);
        $chosen_programs = $this->chosen_item('programs' , $customer->id);
        $chosen_pricesModel = $this->chosen_item('pricesModel' , $customer->id);
        $chosen_demo = $this->chosen_item('demo' , $customer->id);
        $chosen_accountants = $this->chosen_item('accountants' , $customer->id);
        $chosen_faq = $this->chosen_item('faq' , $customer->id);
        $chosen_adds = $this->chosen_item('advertisement' , $customer->id);

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
            'adds'=>$advertisement ,
            'chosen_adds'=>$chosen_adds ,
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

    public function chosen_item($table , $customer_id)
    {
        $chosen_item= chosen_item::where('customer_id', $customer_id)
            ->where('item_model', $table)
            ->get();
        if (isset($chosen_item[0]) && json_decode($chosen_item[0]->items_id) ){
            $chosen_item = json_decode($chosen_item[0]->items_id);
        } else {
            $chosen_item = array();
        }
        return $chosen_item;
    }

}
