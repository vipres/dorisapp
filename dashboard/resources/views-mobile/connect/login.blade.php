@extends('master_full')

@section('page_title')
{{ __('lg.connect.login') }}
@endsection

@section('additionals_js_files')
<script src="{{ asset('static/js/connect.js') }}"></script>
@endsection


@section('content')
<div class="page page_app">
    <div class="box">

        <div class="logo">
            <img src="{{ url('/static/images/logo-blanco.png') }}" alt="{{config('cms.app.name')}}">
        </div>
        <h2 class="title">
            {{ __('lg.connect.login') }}
        </h2>
        <div class="form mtop16">
            {!! Form::open(['url' => '/', 'id' => 'form_connect_login', 'autocomplete' => 'off']) !!}
            <input type="hidden" name="autocomplete" class="autocomplete">
            <label for="email">{{ __('lg.connect.email') }}:</label>
            <div class="group">
                <i class="bi bi-envelope-open"></i>
                {!! Form::email('email', null, ['class' => 'input disableac']) !!}
            </div>
            <label for="password" class="mtop16">{{ __('lg.connect.password') }}:</label>
            <div class="group">
                <i class="bi bi-fingerprint"></i>

                <input type="password" name="password" class="input disableac" id="input_password">
            </div>
            <div class="action">
                <a href="#" class="show_password" data-state="hide" id="show_password_login"
                    data-target="input_password">{{
                    __('lg.connect.show_password') }}</a>
            </div>
            {!! Form::submit( __('lg.connect.connect'), ['class' => 'btn mtop16'] ) !!}
            {!! Form::close() !!}
        </div>

    </div>
</div>
@endsection
