@extends('layouts.app')

@section('content')

<blade-to-vue-component :blade-data="{{json_encode($data)}}"></blade-to-vue-component>

<ajax-to-vue-component></ajax-to-vue-component>

@endsection
