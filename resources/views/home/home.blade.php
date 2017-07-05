<!-- Stored in resources/views/home/home.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <!-- <p>This is appended to the master sidebar.</p> -->
@endsection

@section('content')
    <div id="app">
        <example></example>
        @{{ message }}
    </div>
@endsection