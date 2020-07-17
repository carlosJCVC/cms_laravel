@extends('layouts.app')

@section('title', 'Test')

@section('content')
<h2>vista test</h2>
    <h1>{{ $user->name }}</h1>
@endsection