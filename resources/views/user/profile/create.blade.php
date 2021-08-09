@extends('layouts.user')
@section('title' , 'プロフィールの作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール新規作成</h2>
                <form action="{{ action('Auth\RegisterController@register') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2">ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">生年月日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="birthday" value="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <div>
                                <input type="radio" id="male" name="gender" value="1" checked>
                                <label for="male">男</label>
                            </div>
                            <div>
                                <input type="radio" id="female" name="gender" value="0" >
                                <label for="female">女</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">好きなチーム</label>
                        <div class="col-md-10">
                            <select name="team">
                              @foreach($teams as $team)
                                <option value="{{$team->id}}">"{{ $team->team_name }}"</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード再確認') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                        
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="確認する">
                </form>

            </div>
        </div>
    </div>
@endsection
