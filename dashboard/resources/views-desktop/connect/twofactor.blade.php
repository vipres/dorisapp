@extends('master_full')

@section('page_title')
{{ __('lg.connect.twofactor') }}
@endsection

@section('additionals_js_files')
<script src="{{ asset('static/js/connect.js') }}"></script>
@endsection


@section('content')
<div class="page">
    <div class="box">

        <div class="logo">
            <img src="{{ url('/static/images/logo.png') }}" alt="{{config('cms.app.name')}}">
        </div>
        <h2 class="title">
            {{ __('lg.connect.twofactor') }}
        </h2>
        <div class="form mtop16">
            {!! Form::open(['url' => '/', 'id' => 'form_connect_login', 'autocomplete' => 'off']) !!}
            <input type="hidden" name="autocomplete" class="autocomplete">
            <label for="code">{{ __('lg.connect.code') }}:</label>
            <div class="group">
                <i class="bi bi-envelope-open"></i>
                {!! Form::number('code', null, ['class' => 'input disableac']) !!}
            </div>



            {!! Form::submit( __('lg.connect.connect'), ['class' => 'btn mtop16'] ) !!}
            {!! Form::close() !!}
            <hr class="mtop16">
            <p class="mtop16">{{ __('lg.connect.code_text_1') }} </p>
            <a href="{{ url('/connect/two/factor') }}" class="btn btn-green transition">{{
                __('lg.connect.code_text_2') }}</a>
        </div>

    </div>
</div>

@endsection
