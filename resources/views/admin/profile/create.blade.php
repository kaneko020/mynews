@extends('layouts.profile')
@section('title', 'Myプロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class="col-md-2">
                            <input type="radio" class="form-radio-input" name="gender" id="man" value="man" {{ old('gender') == 'man' ? 'checked' : '' }}>
                            <label class="form-radio-label" for="男性">男性</label>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" class="form-radio-input" name="gender" id="woman" value="woman" {{ old('gender') == 'woman' ? 'checked' : '' }}>
                            <label class="form-radio-label" for="女性">女性</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="5">{{ old('hobby') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <a href="{{ action('Admin\ProfileController@index') }}" role="button" class="btn btn-primary">プロフィール一覧へ</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
