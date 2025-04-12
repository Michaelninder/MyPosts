@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <h1>Welcome to {{ env('APP_NAME') }}</h1>
    <h2>{{ env('APP_DESCRIPTION') }}</h2>
@endsection
