@extends('Website.Layout.main')
@section('title', 'Home')
@section('content')
    @include('Website.Partials.hero')
    @include('Website.Partials.about')
    @include('Website.Partials.services')
    @include('Website.Partials.contact_us')
@endsection
