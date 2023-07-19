@extends('admin.layouts.layout')
@section('content')
<main>
    <form id="selectAppForm" enctype="multipart/form-data" method="post">
        @csrf
        <section class="detail">
            <br>
            <h3>
                انتخاب اپیکیشن
            </h3>
            <div>
                <label for="images-input" class="custom-file-upload">آپلود لوگو</label>
                <input required enctype="multipart/form-data" class="images-input" id="images-input" accept="image/*" type="file" name="logo" value="">
            </div>
            <div>
                <label for="customer_name">نام مشتری:</label><br>
                <input required type="text" id="customer_name" name="customer_name" value="">
            </div>
            <br>
            <div>
                <label for="company_name">نام شرکت:</label><br>
                <input required type="text" id="company_name" name="company_name" value="">
            </div>
            <br>
            <div>
                <label for="slug">لینک:</label><br>
                <input required type="text" id="slug" name="slug" value="">
            </div>
            <br>
            <div>
                <label for="company_name">نمایش تامین کنندگان:</label><br>
                <select required  id="providers" name="providers" value="">
                    <option value="">انتخاب</option>
                    <option value="1">بله</option>
                    <option value="0">خیر</option>
                </select>
            </div>
            <div>
                <label for="company_name">نمایش مزایای ایران تکنولوژی:</label><br>
                <select required  id="benefits" name="benefits" value="">
                    <option value="">انتخاب</option>
                    <option value="1">بله</option>
                    <option value="0">خیر</option>
                </select>
            </div>
            <div>
                <label for="company_name">نمایش افتخارات ما:</label><br>
                <select required  id="honors" name="honors" value="">
                    <option value="">انتخاب</option>
                    <option value="1">بله</option>
                    <option value="0">خیر</option>
                </select>
            </div>
            <br>
            <div>
                <label for="staff_name">نام کارشناس:</label><br>
                <select required style="width: 20%;"  id="staff_name" name="staff_name" value="">
                    <option value="">انتخاب</option>
                    @foreach($result['staff'] as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
                </select>
            </div>
        </section>
        <br>
        <section class="chose_detail">
            <div class="adds">
                <h4>تبلیغات</h4>
                <table>
                    <tr>
                        <th>عنوان</th>
                        <th>لینک</th>
                        <th>عکس</th>
                    </tr>
                    @foreach($result['adds'] as $item)
                        <tr>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['link']}}</td>
                            <td><input type="checkbox" id="" name="adds_check[]" value="{{$item['id']}}"></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <br>
            <div class="programs">
                <h4>نرم افزار های درخواستی</h4>
                <table>
                    <tr>
                        <th>عنوان</th>
                        <th>لینک</th>
                        <th>انتخاب</th>
                    </tr>
                    @foreach($result['programs'] as $item)
                        <tr>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['link']}}</td>
                            <td><input type="checkbox" id="" name="program_check[]" value="{{$item['id']}}"></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <br>
            <div class="demos">
                <h4>دمو ها</h4>
                <table>
                    <tr>
                        <th>عنوان</th>
                        <th>لینک</th>
                        <th>انتخاب</th>
                    </tr>
                    @foreach($result['demo'] as $item)
                        <tr>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['link']}}</td>
                            <td><input type="checkbox" id="" name="demo_check[]" value="{{$item['id']}}"></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <br>
            <div class="works">
                <h4>نمونه کارها</h4>
                <table>
                    <tr>
                        <th>عنوان</th>
                        <th>لینک</th>
                        <th>نوع</th>
                        <th>انتخاب</th>
                    </tr>
                    @foreach($result['works'] as $item)
                        <tr>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['link']}}</td>
                            <td>{{$item['kind_titles']}}</td>
                            <td><input type="checkbox" id="" name="work_check[]" value="{{$item['id']}}"></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <br>
            <div class="accountants">
                <h4>حسابداری</h4>
                <table>
                    <tr>
                        <th>عنوان</th>
                        <th>لوگو</th>
                    </tr>
                    @foreach($result['accountants'] as $item)
                        <tr>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['logo']}}</td>
                            <td><input  type="checkbox" id="" name="accountants_check[]" value="{{$item['id']}}"></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <br>
            <div class="prices">
                <h4>لیست قیمت ها</h4>
                <table>
                    <tr>
                        <th>عنوان</th>
                        <th>لینک</th>
                        <th>انتخاب</th>
                    </tr>
                    @foreach($result['pricesModel'] as $item)
                        <tr>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['link']}}</td>
                            <td><input type="checkbox" id="" name="price_check[]" value="{{$item['id']}}"></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <br>
            <div class="faq">
                <h4>سوالات متداول</h4>
                <table>
                    <tr>
                        <th>سوال</th>
                        <th>پاسخ</th>
                        <th>انتخاب</th>
                    </tr>
                    @foreach($result['faq'] as $item)
                        <tr>
                            <td>{{$item['quastion']}}</td>
                            <td>{{$item['answear']}}</td>
                            <td><input type="checkbox" id="" name="faq_check[]" value="{{$item['id']}}"></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <br>
        </section>
        <div class="submit-form">
            <input type="submit" value="Submit">
        </div>
    </form>

</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('selectAppForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const slugInput = document.getElementById('slug');

            const formData = {
                slug: slugInput.value
            };
            const url = '{{ route('check.slug') }}';

            fetch(url, {
                method: 'POST',
                body: JSON.stringify(formData),
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        form.submit();
                    } else {
                        alert('لینک وارد شده تکراری است.');
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('An error occurred. Please try again.');
                });
        });
    });
</script>

@endsection
