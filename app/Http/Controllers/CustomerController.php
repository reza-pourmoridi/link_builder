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

        return view('admin.customer', compact('result'));
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

    public function choose_item($id, $table, $items)
    {
        $chosen_item = new chosen_item();
        $chosen_item
            ->where('item_model', '=', $table)
            ->where('customer_id', '=', $id)
            ->delete();
        $chosen_item = new chosen_item();
        $chosen_item->item_model = $table;
        $chosen_item->customer_id = $id;
        $chosen_item->items_id = json_encode($items);
        $chosen_item->save();
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

            $this->choose_item($id,'programs', $request->get('program_check'));
            $this->choose_item($id,'pricesModel', $request->get('price_check'));
            $this->choose_item($id,'works', $request->get('work_check'));
            $this->choose_item($id,'demo', $request->get('demo_check'));
            $this->choose_item($id,'accountants', $request->get('accountants_check'));
            $this->choose_item($id,'faq', $request->get('faq_check'));
            $this->choose_item($id,'advertisement', $request->get('adds_check'));


        return redirect('/admin/customer/'.$id);

    }

    public function test()
    {
        return view('test');
    }
}
