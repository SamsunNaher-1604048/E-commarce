@extends('backend.layouts.layout')
@include('backend.include.bread-crume', ['parent' => '', 'child' => ''])
@section('content')
<div>
  <div><p>{{Auth::guard('admin')->user()->name}}</p><div>
    <div><a href="{{route('admin.logout')}}" class="btn btn-outline-primary">Logout</a></div>
<div>
@endsection