<?php

namespace App\Http\Controllers;
use App\prices;
use Illuminate\Http\Request;
use App\staff;
use App\pricesModel;
use App\programs;
use App\works;
use App\faq;
use App\demo;
use App\site_types;
use App\accountant;

use App\Helpers;


class StaffController extends Controller
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
        $accountant = accountant::all();

        $demo = demo::all();
        $programs = programs::all();
        $pricesModel = pricesModel::all();

        $result=[
            'types'=>$types ,
            'works'=>$works ,
            'faq'=>$faq ,
            'demo'=>$demo ,
            'programs'=>$programs ,
            'pricesModel'=>$pricesModel ,
            'accountants'=>$accountant ,
            'helper' =>Helpers::helperfunction1()
        ];

        return view('admin.staff',compact('result'));
    }    /**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        return view('admin.staff');
    }    /**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {


        if ($request->get('price_title')){
            $this->store_prices($request);
        }
        if ($request->get('demo_title')){
            $this->store_demo($request);
        }
        if ($request->get('program_title')){
            $this->store_programs($request);
        }
        if ($request->get('work_title')){
            $this->store_work($request);
        }
        if ($request->get('faq_quastion')){
            $this->store_faq($request);
        }
        if ($request->get('accountant_title')){
            $this->store_accountant($request);
        }

        return redirect('admin/staff')->with('success', 'Contact saved!');
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
    public function destroy($id)
    {
        //
    }

    public function store_prices($request)
    {
        $request-> validate([
            'price_title'=>'required',
            'price_link'=>'required',
        ]);

        $pricesModel = new pricesModel([
            'title' => $request->get('price_title'),
            'link' => $request->get('price_link'),
        ]);

        $pricesModel->save();
    }
    public function store_demo($request)
    {
        $request-> validate([
            'demo_title'=>'required',
            'demo_link'=>'required',
        ]);

        $pricesModel = new demo([
            'title' => $request->get('demo_title'),
            'link' => $request->get('demo_link'),
        ]);

        $pricesModel->save();
    }
    public function store_programs($request)
    {
        $request-> validate([
            'program_title'=>'required',
            'program_link'=>'required',
        ]);

        $pricesModel = new programs([
            'title' => $request->get('program_title'),
            'link' => $request->get('program_link'),
        ]);

        $pricesModel->save();
    }
    public function store_accountant($request)
    {
        $request-> validate([
            'accountant_title'=>'required',
            'accountant_logo'=>'required',
        ]);

        $accountant = new accountant();
        $imageName = time().'.'.$request->accountant_logo->extension();
        $request->accountant_logo->move(public_path('images'), $imageName);

        $accountant->logo = $imageName;
        $accountant->title = $request->get('accountant_title');

        $accountant->save();
    }
    public function store_work($request)
    {
//        dd($request['work_kind']);
        $request-> validate([
            'work_title'=>'required',
            'work_link'=>'required',
        ]);

        $kind = '';
        foreach ($request['work_kind'] as $key => $value){
            $kind .= $value."|";
        }

            $pricesModel = new works([
            'title' => $request->get('work_title'),
            'link' => $request->get('work_link'),
            'kind' => $kind,
        ]);

        $pricesModel->save();
    }
    public function store_faq(Request $request)
    {
//        dd($request->all());
        $request-> validate([
            'faq_quastion'=>'required',
            'faq_answear'=>'required',
        ]);

        $kind = '';
        foreach ($request['faq_kind'] as $key => $value){
            $kind .= $value."|";
        }


        $pricesModel = new faq();
        $pricesModel->quastion = $request->get('faq_quastion');
        $pricesModel->answear = $request->get('faq_answear');
        $pricesModel->kind = $kind;


            $pricesModel->save();
    }

}