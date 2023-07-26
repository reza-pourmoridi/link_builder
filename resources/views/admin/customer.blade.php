@extends('admin.layouts.layout')
@section('content')
{{--    @dd($result)--}}

<main>
    <h2>تغییر اطلاعات مشتری</h2>
    <form id="customerForm" enctype="multipart/form-data" method="POST" action="{{ route('customer.update', $result['customer']->id) }}">
        @csrf
        @method('PUT')
    <table>
        <tr>
            <td>نام:</td>
            <td>
            <input  type="text" id="customer_name" name="customer_name" value="{{ $result['customer']->name }}">
            </td>
        </tr>

        <tr>
            <td>شرکت:</td>
            <td>
            <input  type="text" id="company_name" name="company_name" value="{{ $result['customer']->company }}">
            </td>
        </tr>
        <tr>
            <td>لینک:</td>
            <td>
            <input required  type="text" id="slug" name="slug" value="{{ $result['customer']->slug }}">
            </td>
        </tr>
        <tr>
            <td>لوگو:</td>
            <td>
                <img src="{{asset('images/'.$result['customer']->logo)}}">
                <label for="images-input">تغییر عکس</label>
                <input enctype="multipart/form-data" class="images-input" id="logo" accept="image/*" type="file" name="logo" value="">
            </td>
        </tr>
        <tr>
            <td>کارشناس:</td>
            <td>
                <select required style="width: 20%;"  id="staff_name" name="staff_name" value="">
                    <option selected value="{{ $result['chosen_staff']->id }}">{{ $result['chosen_staff']->name }}</option>
                    @foreach($result['staff'] as $item)
                        @if($item['id'] != $result['chosen_staff']->id)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                        @endif
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>نمایش تامین کنندگان:</td>
            <td>
                <select required style="width: 20%;"  id="providers" name="providers" value="">
                    <option selected value="{{ $result['customer']->providers }}">@if($result['customer']->providers == 1)بله @else خیر @endif</option>
                    <option value="0">خیر</option>
                    <option value="1">بله</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>نمایش مزایای ایران تکنولوژی:</td>
            <td>
                <select required style="width: 20%;"  id="benefits" name="benefits" value="">
                    <option selected value="{{ $result['customer']->benefits }}">@if($result['customer']->benefits == 1)بله @else خیر @endif</option>
                    <option value="0">خیر</option>
                    <option value="1">بله</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>نمایش افتخارات ما:</td>
            <td>
                <select required style="width: 20%;"  id="honors" name="honors" value="">
                    <option selected value="{{ $result['customer']->honors }}">@if($result['customer']->honors == 1)بله @else خیر @endif</option>
                    <option value="0">خیر</option>
                    <option value="1">بله</option>
                </select>
            </td>
        </tr>

    </table>
        <div class="adds">
            <h4>تبلیغات</h4>
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>لینک</th>
                    <th>انتخاب همه
                        <input onclick="selectAlloptions(this,'adds_check[]');" type="checkbox"  id="faq_all"></th>
                </tr>
                @foreach($result['adds'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['link']}}</td>
                        <td><input  @if(in_array($item['id'],$result['chosen_adds'])) checked @endif type="checkbox" id="" name="adds_check[]" value="{{$item['id']}}"></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="programs">
        <h4>نرم افزار های درخواستی</h4>
        <table>
            <tr>
                <th>عنوان</th>
                <th>لینک</th>
                <th>انتخاب همه
                            <input onclick="selectAlloptions(this,'program_check[]');" type="checkbox"  id="faq_all"></th>
            </tr>
            @foreach($result['programs'] as $item)
                <tr>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['link']}}</td>
                    <td><input  @if(in_array($item['id'],$result['chosen_programs'])) checked @endif type="checkbox" id="" name="program_check[]" value="{{$item['id']}}"></td>
                </tr>
            @endforeach
        </table>
    </div>
        <div class="demos">
            <h4>دمو ها</h4>
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>لینک</th>
                    <th>انتخاب همه
                            <input onclick="selectAlloptions(this,'demo_check[]');" type="checkbox"  id="faq_all"></th>
                </tr>
                @foreach($result['demo'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['link']}}</td>
                        <td><input  @if(in_array($item['id'],$result['chosen_demo'])) checked @endif type="checkbox" id="" name="demo_check[]" value="{{$item['id']}}"></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="works">
            <h4>نمونه کارها</h4>
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>لینک</th>
                    <th>نوع</th>
                    <th>انتخاب همه
                            <input onclick="selectAlloptions(this,'work_check[]');" type="checkbox"  id="faq_all"></th>
                </tr>
                @foreach($result['works'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['link']}}</td>
                        <td>{{$item['kind_titles']}}</td>
                        <td><input @if(in_array($item['id'],$result['chosen_works'])) checked @endif type="checkbox" id="" name="work_check[]" value="{{$item['id']}}"></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="accountants">
            <h4>حسابداری</h4>
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>لوگو</th>
                    <th>
                        انتخاب همه
                        <input onclick="selectAlloptions(this,'accountants_check[]');" type="checkbox"  id="faq_all">
                    </th>
                </tr>
                @foreach($result['accountants'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['logo']}}</td>
                        <td><input  @if(in_array($item['id'],$result['chosen_accountants'])) checked @endif   type="checkbox" id="" name="accountants_check[]" value="{{$item['id']}}"></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="prices">
            <h4>لیست قیمت ها</h4>
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>لینک</th>
                    <th>انتخاب همه
                            <input onclick="selectAlloptions(this,'price_check[]');" type="checkbox"  id="faq_all"></th>
                </tr>
                @foreach($result['pricesModel'] as $item)
                    <tr>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['link']}}</td>
                        <td><input @if(in_array($item['id'],$result['chosen_pricesModel'])) checked @endif type="checkbox" id="" name="price_check[]" value="{{$item['id']}}"></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="faq">
            <h4>سوالات متداول</h4>
            <table>
                <tr>
                    <th>سوال</th>
                    <th>جواب</th>
                    <th>انتخاب همه
                            <input onclick="selectAlloptions(this,'faq_check[]');" type="checkbox"  id="faq_all"></th>
                </tr>
                <tr>
                    <div>
                        <select>
                            <option onclick="selectFaqType(null);" value="">انتخاب دسته </option>
                            @foreach($result['types'] as $item)
                                <option onclick="selectFaqType('faq_cat_{{$item['slug']}}');" > {{$item['title']}} </option>
                            @endforeach
                        </select>
                    </div>
                </tr>
                <tbody id="all_faq_questions">
                @foreach($result['faq'] as $item)
                    <tr class="@foreach($result['types'] as $cat)@if (strpos($item['kind'], $cat['slug']) !== false) faq_cat_{{$cat['slug']}} @endif @endforeach">
                        <td>{{$item['quastion']}}</td>
                        <td>{{$item['answear']}}</td>
                        <td><input  @if(in_array($item['id'],$result['chosen_faq'])) checked @endif type="checkbox" id="" name="faq_check[]" value="{{$item['id']}}"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <a target="_blank" href="/customer/{{ $result['customer']->slug }}" type="submit">پیش نمایش</a>
        <button type="submit">Save Changes</button>
    </form>

</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('customerForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const slugInput = document.getElementById('slug');
            console.log(slugInput);

            const formData = {
                slug: slugInput.value
            };
            const url = '{{ route('check.slug') }}';

            if (slugInput.value != '{{ $result['customer']->slug }}') {
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
            } else {
                form.submit();
            }
        });
    });
</script>

@endsection
