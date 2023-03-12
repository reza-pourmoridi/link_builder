@extends('admin.layouts.layout')
@section('content')
<main class="multi-forms">
    <div class="main-dive">
        <form method="post"  >
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
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <form method="POST" action="staff/delete">
            @csrf
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>لینک</th>
                    <th>حذف</th>
                </tr>
                @foreach($result['demo'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['link']}}</td>
                        <td><button type="submit" name="demo_link_delete" value="{{$item['id']}}" class="btn btn-danger">Delete</button></td>
                    </tr>
                @endforeach
            </table>
        </form>

    </div>
    <div class="main-dive">
        <form method="post"  >
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
            </tr>
            @foreach($result['programs'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['link']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="main-dive">
        <form method="post"  >
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
            <br>
            <input value="ذخیره اطلاعات" type="submit">
        </form>
        <table>
            <tr>
                <th>عنوان</th>
                <th>لینک</th>
            </tr>
            @foreach($result['pricesModel'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['link']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="main-dive">
        <form method="post"  >
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
                <th>نوع</th>
            </tr>
            @foreach($result['works'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['link']}}</td>
                    <td>{{$item['kind_titles']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="main-dive">
        <form method="post"  >
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
            </tr>
            @foreach($result['faq'] as $item)
                <tr>
                    <td>{{$item['quastion']}}</td>
                    <td>{{$item['answear']}}</td>
                    <td>{{$item['kind_titles']}}</td>
                </tr>
            @endforeach
        </table>

    </div>
    <div class="main-dive">
        <form enctype="multipart/form-data" method="post"  >
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
            </tr>
            @foreach($result['accountants'] as $item)
                <tr>
                    <td>{{$item['title']}}
                    <td><img src="{{asset('images/'.$item['logo'])}}"></td>
                </tr>
            @endforeach
        </table>
    </div>
</main>
@endsection
