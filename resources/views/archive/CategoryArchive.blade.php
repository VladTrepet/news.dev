@extends('layouts.home')

@section('header')
    @include('home.header')
@endsection
@section('content')
    @include('archive.CategoryArchiveContent')
@endsection
@section('footer')
    @include('home.footer')
@endsection