@extends('admin.layouts')

@section('content')
    <table class="table">
        <thead>
            <th>合同编号</th>
            <th>合同编号</th>
            <th>客户名称</th>
            <th>合同金额</th>
            <th>电话</th>
            <th>所在行业</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{$v->name}}</td>
                    <td>{{$v->src->name}}</td>
                    <td>{{$v->level->name}}</td>
                    <td>{{$v->customer_name}}</td>
                    <td>{{$v->mobile}}</td>
                    <td>{{$v->industry->name}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection