@extends('layouts.app')
@section('title', 'Page Title')

@section("content")
    <div>Index</div>
    <div>{{ json_encode($data) }}</div>
@endsection
