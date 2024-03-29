<?php

namespace App\Http\Controllers;
use App\prices;
use Illuminate\Http\Request;
use App\staff;
use App\pricesModel;
use App\programs;
use App\works;
use App\faq;
use App\advertisement;
use App\demo;
use App\comment;
use App\LoginAdmin;
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
        $advertisement = advertisement::all();

        $demo = demo::all();
        $comment = comment::all();
        $programs = programs::all();
        $pricesModel = pricesModel::all();
        $pricesModel = Helpers::change_site_types($pricesModel,$types);

        $result=[
            'types'=>$types ,
            'works'=>$works ,
            'faq'=>$faq ,
            'adds'=>$advertisement ,
            'demo'=>$demo ,
            'comment'=>$comment ,
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
        if ($request->get('comment_title')){
            $this->store_comment($request);
        }
        if ($request->get('adds_title')){
            $this->store_adds($request);
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
 * @param int $id
 * @return \Illuminate\Http\Response
 */
    public function destroy(int $id): \Illuminate\Http\Response
    {
        //
    }

    public function destroyDemo(int $id)
    {
        demo::destroy($id);
        return redirect('admin/staff')->with('success', 'item deleted!');
    }
    public function destroyComment(int $id)
    {
        comment::destroy($id);
        return redirect('admin/staff')->with('success', 'item deleted!');
    }

    public function destroyPrograms(int $id)
    {
        programs::destroy($id);
        return redirect('admin/staff')->with('success', 'item deleted!');
    }

    public function destroyPricesModel(int $id)
    {
        pricesModel::destroy($id);
        return redirect('admin/staff')->with('success', 'item deleted!');
    }

    public function destroyWorks(int $id)
    {
        works::destroy($id);
        return redirect('admin/staff')->with('success', 'item deleted!');
    }

    public function destroyFaq(int $id)
    {
        faq::destroy($id);
        return redirect('admin/staff')->with('success', 'item deleted!');
    }
    public function destroyAdds(int $id)
    {
        advertisement::destroy($id);
        return redirect('admin/staff')->with('success', 'item deleted!');
    }

    public function destroyAccountants(int $id)
    {
        accountant::destroy($id);
        return redirect('admin/staff')->with('success', 'item deleted!');
    }

    public function store_prices($request)
    {
        $request-> validate([
            'price_title'=>'required',
            'price_link'=>'required',
            'price_kind'=>'required',
            'price_pic'=>'required',
        ]);
        $type = '';
        foreach ($request['price_kind'] as $key => $value){
            $type .= $value."|";
        }

        $imageName = $this->insert_pic('price_pic');

        $pricesModel = new pricesModel([
            'title' => $request->get('price_title'),
            'link' => $request->get('price_link'),
            'kind' => $type,
            'pic' => $imageName,
        ]);

        $pricesModel->save();
    }
    public function store_demo($request)
    {
        $request-> validate([
            'demo_title'=>'required',
            'demo_link'=>'required',
            'demo_logo'=>'required',
        ]);

        $pricesModel = new demo();

        $imageName = $this->insert_pic('demo_logo');
        $pricesModel->logo = $imageName;
        $pricesModel->title = $request->get('demo_title');
        $pricesModel->link = $request->get('demo_link');

        $pricesModel->save();

    }
    public function store_comment($request)
    {
        $request-> validate([
            'comment_title'=>'required',
            'comment_name'=>'required',
            'comment_agency'=>'required',
            'comment_c'=>'required',
            'comment_pic'=>'required',
        ]);

        $pricesModel = new comment();

        $imageName = $this->insert_pic('comment_pic');
        $pricesModel->pic = $imageName;
        $pricesModel->title = $request->get('comment_title');
        $pricesModel->name = $request->get('comment_name');
        $pricesModel->agency = $request->get('comment_agency');
        $pricesModel->comment = $request->get('comment_c');

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

        $imageName = $this->insert_pic('work_logo');

        $pricesModel = new works([
            'title' => $request->get('work_title'),
            'link' => $request->get('work_link'),
            'pic' => $imageName,
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

    public function store_adds(Request $request)
    {
        $request-> validate([
            'adds_title'=>'required',
            'adds_link'=>'required',
            'adds_pic'=>'required',
            'adds_pic_m'=>'required',
        ]);

        $addsModel = new advertisement();

        $imageName = $this->insert_pic('adds_pic');
        $imageName_m = $this->insert_pic('adds_pic_m', 'mobile');


        $addsModel->pic = $imageName;
        $addsModel->pic_m = $imageName_m;
        $addsModel->title = $request->get('adds_title');
        $addsModel->link = $request->get('adds_link');

        $addsModel->save();
    }

    public function insert_pic( $field , $additional_discription = 'm' )
    {
        global $request;
        $imageName = $additional_discription . '-' . time().'.'.$request->$field->extension();
        $request->$field->move(public_path('images'), $imageName);
        return $imageName;
    }


    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $AUTH_DETAIL = LoginAdmin::first();


        if ($AUTH_DETAIL->user_name == $request->username && $AUTH_DETAIL->password == $request->password) {
            // Assuming you have authenticated the user and verified their admin status
            session(['isAdmin' => true]);
            return redirect('/admin/staff');
        } else {
            return redirect()->back()->withInput()->withErrors(['login' => 'Invalid credentials']);
        }
    }


}
