@extends('layouts.user')
@section('title' , 'プロフィールの作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール新規作成</h2>
                <form action="{{ action('User\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    //ニックネーム（16字以下）
                    <div class="form-group row">
                        <label class="col-md-2">ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    //生年月日
                    <div class="form-group row">
                        <label class="col-md-2">生年月日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="birthday" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    //性別
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <div>
                                <input type="radio" id="male" name="gender" value="male" checked>
                                <label for="male">男</label>
                            </div>
                            <div>
                                <input type="radio" id="female" name="gender" value="female" >
                                <label for="female">女</label>
                            </div>
                        </div>
                    </div>
                    //好きなチーム
                    <div class="form-group row">
                        <label class="col-md-2">好きなチーム</label>
                        <div class="col-md-10">
                            
                        </div>
                    </div>
                    
                    
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="確認する">
                </form>

            </div>
        </div>
    </div>
@endsection
