@extends('layouts.default')
@section('title','个人页面')

@section('content')
{{$user->name}} - {{$user->email}}
@stop