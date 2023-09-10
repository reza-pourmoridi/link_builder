@extends('admin.layouts.layout')
@section('content')
<main class="multi-forms">
    <div class="main-dive">
        <form id="adds_form" action="#adds_form"  enctype="multipart/form-data" method="post"  >
            @csrf
            <h1>تبلیغات</h1>
            <lable>عنوان</lable>
            <input type="text"  value="" name="adds_title" id="">
            <br>
            <lable>لینک</lable>
            <input type="text" value="" name="adds_link" id="">
            <div>
                <lable>بنر</lable>
                <input class="images-input" required id="adds_pic" accept="image/*" type="file" name="adds_pic" value="">
            </div>
            <div>
                <lable>بنر موبایل</lable>
                <input class="images-input" required id="adds_pic_m" accept="image/*" type="file" name="adds_pic_m" value="">
            </div>
            <br>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <table>
            <tr>
                <th>عنوان</th>
                <th>لینک</th>
                <th>بنر</th>
                <th>حذف</th>
            </tr>
            @foreach($result['adds'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['link']}}</td>
                    <td><img src="{{asset('images/'.$item['pic'])}}"></td>
                    <td><img src="{{asset('images/'.$item['pic_m'])}}"></td>
                    <td><a  href="staff/adds/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>

    </div>
    <div class="main-dive">
        <form id="program_form" action="#program_form" method="post"  >
            @csrf
            <h1>نرم افزار ها</h1>
            <div>
                <lable>عنوان</lable>
                <input type="text"  value="" name="program_title" id="">
            </div>
            <div>
                <lable>لینک</lable>
                <input type="text"  value="" name="program_link" id="">
            </div>
            <br>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <table>
            <tr>
                <th>عنوان</th>
                <th>لینک</th>
                <th>حذف</th>
            </tr>
            @foreach($result['programs'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['link']}}</td>
                    <td><a  href="staff/programs/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="main-dive">
        <form id="demo_form" action="#demo_form"  enctype="multipart/form-data" method="post"  >
            @csrf
            <h1>دمو</h1>
            <div>
                <lable>عنوان</lable>
                <input type="text"  value=""  name="demo_title" id="">
            </div>
            <div>
                <lable>لینک</lable>
                <input type="text"  value="" name="demo_link" id="">
                <br>
            </div>
            <div>
                <lable>لوگو</lable>
                <input class="images-input" id="demo_logo" accept="image/*" type="file" name="demo_logo" value="">
            </div>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <form method="POST" >
            @csrf
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>لینک</th>
                    <th>لوگو</th>
                    <th>حذف</th>
                </tr>
                @foreach($result['demo'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['link']}}</td>
                        <td><img src="{{asset('images/'.$item['logo'])}}"></td>
                        <td><a  href="staff/demo/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </form>
    </div>
    <div class="main-dive">
        <form id="work_form" action="#work_form" enctype="multipart/form-data" method="post"  >
            @csrf
            <h1>نمونه کار</h1>
            <div>
                <lable>عنوان</lable>
                <input type="text"  value="" name="work_title" id="">
            </div>
            <div>
                <lable>لینک</lable>
                <input type="text"  value="" name="work_link" id="">
            </div>
            <div>
                <lable>عکس</lable>
                <input class="images-input" id="work_logo" accept="image/*" type="file" name="work_logo" value="">
            </div>
            <h3>نوع</h3>
            <div>
                @foreach($result['types'] as $item)
                    <lable>{{$item['title']}}</lable>
                    <input type="checkbox" value="{{$item['slug']}}" name="work_kind[]" id="">
                @endforeach
            </div>
            <br>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <table>
            <tr>
                <th>عنوان</th>
                <th>لینک</th>
                <th>عکس</th>
                <th>نوع</th>
                <th>حذف</th>
            </tr>
            @foreach($result['works'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['link']}}</td>
                    <td><img src="{{asset('images/'.$item['pic'])}}"></td>
                    <td>{{$item['kind_titles']}}</td>
                    <td><a  href="staff/works/{{$item['id']}}" class="btn btn-danger">Delete</a></td>

                </tr>
            @endforeach
        </table>
    </div>
    <div class="main-dive">
        <form id="accountant_form" action="#accountant_form" enctype="multipart/form-data" method="post"  >
            @csrf
            <h1>حسابداری </h1>
            <div>
                <lable>عنوان</lable>
                <input type="text"  value="" name="accountant_title" id="">
            </div>
            <div>
                <lable>لوگو</lable>
                <input class="images-input" id="accountant_logo" accept="image/*" type="file" name="accountant_logo" value="">
            </div>
            <br>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <table>
            <tr>
                <th>عنوان</th>
                <th>لوگو</th>
                <th>حذف</th>
            </tr>
            @foreach($result['accountants'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td><img src="{{asset('images/'.$item['logo'])}}"></td>
                    <td><a  href="staff/accountant/{{$item['id']}}" class="btn btn-danger">Delete</a></td>

                </tr>
            @endforeach
        </table>
    </div>
    <div class="main-dive">
        <form id="price_title" enctype="multipart/form-data" action="#price_title" method="post"  >
            @csrf
            <h1>لیست قیمت </h1>
            <div>
                <lable>عنوان</lable>
                <input type="text"  value="" name="price_title" id="">
            </div>
            <div>
                <lable>لینک</lable>
                <input type="text"  value="" name="price_link" id="">
            </div>
            <div>
                <lable>عکس</lable>
                <input class="images-input" id="price_pic" accept="image/*" type="file" name="price_pic" value="">
            </div>
            <h3>نوع</h3>
            <div>
                @foreach($result['types'] as $item)
                    <lable>{{$item['title']}}</lable>
                    <input type="checkbox" value="{{$item['slug']}}" name="price_kind[]" id="">
                @endforeach
            </div>
            <br>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <table>
            <tr>
                <th>عنوان</th>
                <th>لینک</th>
                <th>عکس</th>
                <th>نوع</th>
                <th>حذف</th>
            </tr>
            @foreach($result['pricesModel'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['link']}}</td>
                    <td><img src="{{asset('images/'.$item['pic'])}}"></td>
                    <td>{{$item['kind_titles']}}</td>
                    <td><a  href="staff/pricesModel/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="main-dive">
        <form id="faq_form" action="#faq_form" method="post"  >
            @csrf
            <h1>سوالات متداول</h1>
            <lable>سوال</lable>
            <textarea value="" name="faq_quastion" id=""></textarea>
            <br>
            <lable>جواب</lable>
            <textarea value="" name="faq_answear" id=""></textarea>
            <h3>نوع</h3>
            <div>
                @foreach($result['types'] as $item)
                    <lable>{{$item['title']}}</lable>
                    <input type="checkbox" value="{{$item['slug']}}" name="faq_kind[]" id="">
                @endforeach
            </div>
            <br>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <table>
            <tr>
                <th>سوال</th>
                <th>جواب</th>
                <th>نوع</th>
                <th>حذف</th>
            </tr>
            @foreach($result['faq'] as $item)
                <tr>
                    <td>{{$item['quastion']}}</td>
                    <td>{{$item['answear']}}</td>
                    <td>{{$item['kind_titles']}}</td>
                    <td><a  href="staff/faq/{{$item['id']}}" class="btn btn-danger">Delete</a></td>

                </tr>
            @endforeach
        </table>

    </div>

    <div class="main-dive">
        <form id="comment_form" action="#comment_form"  enctype="multipart/form-data" method="post"  >
            @csrf
            <h1>نظرات مشتری ها</h1>
            <div>
                <lable>عنوان:</lable>
                <input type="text"  value=""  name="comment_title" id="">
            </div>
            <div>
                <lable>نام مشتری:</lable>
                <input type="text"  value=""  name="comment_name" id="">
            </div>
            <div>
                <lable>آژانس:</lable>
                <input type="text"  value=""  name="comment_agency" id="">
            </div>
            <div>
                <lable>نظر:</lable>
                <textarea  value="" name="comment_c" id=""></textarea>
                <br>
            </div>
            <div>
                <lable>عکس مشتری</lable>
                <input class="images-input" id="comment_pic" accept="image/*" type="file" name="comment_pic" value="">
            </div>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <form method="POST" >
            @csrf
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>نام مشتری</th>
                    <th>آژانس</th>
                    <th>نظر</th>
                    <th>عکس</th>
                    <th>حذف</th>
                </tr>
                @foreach($result['comment'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['agency']}}</td>
                        <td>{{$item['comment']}}</td>
                        <td><img src="{{asset('images/'.$item['pic'])}}"></td>
                        <td><a  href="staff/comment/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </form>
    </div>

</main>
@endsection
