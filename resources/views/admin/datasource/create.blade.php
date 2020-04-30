@extends('admin.layouts')

@section('content')
    <form action="" class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">所属分类</label>
            <div class="col-sm-10">
                <select name="data_model"  class="form-control">
                    <option value="">请选择</option>
                    @foreach(config('modeltype') as $k => $v)
                        <option value="{{$k}}">{{$v}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
            <div class="col-sm-10">
               <input type="text" name="name" class="form-control">
            </div>
        </div>
        @csrf 
        
    </form>
@endsection