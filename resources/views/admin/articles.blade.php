@extends('admin.layouts.layout')
@section('content')

    <main class="multi-forms">
        <div class="main-dive">
            <form method="post"  >
                @csrf
                <h1>دسته بندی</h1>
                <div>
                    <lable>عنوان</lable>
                    <input type="text"  value="" name="cat_name" id="">
                </div>
                <div>
                    <lable>شرح</lable>
                    <input type="text"  value="" name="cat_description" id="">
                </div>
                <br>
                <input value="ذخیره اطلاعات" type="submit">
            </form>
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>شرح</th>
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
            <form enctype="multipart/form-data" method="post"  >
                @csrf
                <h1>مقالات</h1>
                <lable>عنوان</lable>
                <input type="text"  value="" name="article_name" id="">
                <br>
                <lable>دسته بندی</lable>
                <select name="category">
                    <option value="cat_id"> cat name </option>
                </select>
                <br>
                <lable>متن</lable>
                <textarea value="" name="article_text" id=""></textarea>
                <div>
                    <lable>عکس</lable>
                    <input class="images-input" id="article_pic" accept="image/*" type="file" name="article_pic" value="">
                </div>
                <br>
                <input value="ذخیره اطلاعات" type="submit">
            </form>
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>تیتر</th>
                    <th>دسته بندی</th>
                    <th>عکس</th>
                    <th>حذف</th>
                </tr>
                @foreach($result['adds'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['link']}}</td>
                        <td><img src="{{asset('images/'.$item['pic'])}}"></td>
                        <td><a  href="staff/adds/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>

        </div>
    </main>

@endsection
