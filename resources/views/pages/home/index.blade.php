@extends('layouts.app')

@section('content')
<!-- Hero Section -->
@include('pages.home.partials._hero')
<!-- Hero Section -->

<!-- Section 1 -->
@include('pages.home.partials._layanan')
<!-- Section 1 -->

<!-- Section 2 -->
@include('pages.home.partials._bisnis')
<!-- Section 2 -->

<!-- Section 3 -->
@include('pages.home.partials._payment')
<!-- Section 3 -->

<!-- Section 4 -->
@include('pages.home.partials._mitra')
<!-- Section 4 -->
@endsection