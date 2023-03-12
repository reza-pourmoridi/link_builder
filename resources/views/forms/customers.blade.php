@extends('admin.layouts.layout')
@section('content')
<main>

    <h4>نرم افزار های درخواستی</h4>
    <form method="POST" action="customers/delete">
        @csrf
    <table>
        <tr>
            <th>نام مشتری</th>
            <th>نام شرکت</th>
            <th>کارشناس</th>
        </tr>
        @foreach($result['customer'] as $item)
            <tr>
                <td> <a href="/admin/customer/{{$item['id']}}"> {{$item['name']}} </a></td>
                    <td>{{$item['company']}}</td>
                    @foreach($result['staff'] as $staff)
                        @if($staff['id'] == $item['staff_id'])
                            <td>{{$staff['name']}}</td>
                        @endif
                    @endforeach
                <td><button type="submit" name="delete" value="{{$item['id']}}" class="btn btn-danger">Delete</button></td>
            </tr>
        @endforeach
    </table>
    </form>

</main>

@endsection
