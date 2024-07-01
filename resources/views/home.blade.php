@extends('layout.app')
@section('content')

    @include('layout.headerHome')

    @include('components.slider')


    @include('components.shop')


    {{-- @include('components.about') --}}


    @include('components.offer')


    @include('components.blog')


    @include('components.testimonial')
@endsection
