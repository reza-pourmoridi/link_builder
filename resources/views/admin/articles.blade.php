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
                @foreach($result['article_cats'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['description']}}</td>
                        <td><a  href="articles/cat/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="main-dive">
            <form enctype="multipart/form-data" method="post"  >
                @csrf
                <h1>مقالات</h1>
                <lable>عنوان</lable>
                <input required type="text"  value="" name="article_name" id="">
                <br>
                <lable>دسته بندی</lable>
                <select required name="article_category">
                    <option > انتخاب کنید </option>
                    <option value="1"> انتخاب کنید </option>
                    @foreach($result['article_cats'] as $item)
                        <option value="{{$item['id']}}" >{{$item['title']}}</option>
                    @endforeach
                </select>
                <br>
                <lable>متن</lable>
                <textarea required value="" name="article_text" id=""></textarea>
                <div>
                    <lable>عکس</lable>
                    <input required class="images-input" id="article_pic" accept="image/*" type="file" name="article_pic" value="">
                </div>
                <br>
                <input value="ذخیره اطلاعات" type="submit">
            </form>
            @foreach($result['article_cats'] as $cats)
                <h3>
                    دسته بندی :
                    <td>{{$cats['title']}}</td>
                </h3>
                 <table>
                        <tr>
                            <th>عنوان</th>
                            <th>متن</th>
                            <th>عکس</th>
                            <th>حذف</th>
                        </tr>
                        @foreach($result['articles'] as $item)
                         @if($cats['id'] == $item['cat_id'])
                            <tr>
                                <td>{{$item['title']}}</td>
                                <td>{{$item['description']}}</td>
                                <td><img src="{{asset('images/'.$item['pic'])}}"></td>
                                <td><a  href="articles/article/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                         @endif
                     @endforeach
                    </table>
            @endforeach


        </div>
    </main>

@endsection
