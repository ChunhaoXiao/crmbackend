@extends('admin.layouts')

@section('content')
    <table class="table">
        <thead>
            <th>问题</th>
            <th>反馈用户</th>
            <th>反馈时间</th>
            <th>截图</th>
            
            <th></th>
        </thead>

        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ Str::limit($v->content, 30) }}</td>
                    <td>{{ $v->user->name }}</td>
                    <td>{{ $v->created_at }}</td>
                    <td>@if(!empty($v->pictures)) <img src="{{Storage::url($v->pictures[0])}}" alt="" width="50" height="50"> @endif</td>
                    
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection