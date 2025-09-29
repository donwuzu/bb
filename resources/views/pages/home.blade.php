@extends('layouts.app')

@section('title', 'Home - BoldBeyond')

@section('content')
    @include('partials.hero')
     @include('partials.landing')
    @include('partials.services')
    @include('partials.about')
    @include('partials.contact')
@endsection
