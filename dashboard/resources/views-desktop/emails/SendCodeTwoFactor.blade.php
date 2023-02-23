@extends('emails.master')

@section('content')


<h2>{{ __('lg.email.hi', ['name' => $data['name']]) }}</h2>
<p>{{ __('lg.email.text_1', ['app_name' => config('doris.app_name')]) }}</p>
<p style="display:inline-block; padding: 16px 32px; background-color: #f0f0f0;
    color: #222; font-size: 26px; font-weight: bold; margin: 0px;
    border: 1px solid #e6e6e6;
    ">
    {{ $data['code'] }}</p>
<p>{{ __('lg.email.text_2') }}</p>


@endsection
