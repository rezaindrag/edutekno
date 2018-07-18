@extends('layouts.main')

@section('content')
	@include('home.banner')
	{{-- @include('home.searchbar') --}}
    {{-- @include('home.top_categories') --}}
    @include('home.top_courses')
    {{-- @include('home.top_software') --}}
@endsection
