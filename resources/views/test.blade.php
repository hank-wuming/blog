@extends('layouts.dashboard')
@section('section')
    <div id="app">
        <example></example>
        <ul>
            <li v-for="skill in skills">@{{ skill }}</li>
        </ul>
        <div v-html="url"></div>
        <a :href="url2">hello</a>
    </div>
    <hr>
    <div id="app-3">
        <test></test>
        <child hello="good"></child>
        <test2 top="hihi"></test2>
    </div>

    <div id="example">
        <p>Original message: "@{{ fullName }}"</p>
    </div>
@endsection

@push('scripts')
<script src="{{ asset(mix("js/test.js")) }}"></script>
@endpush
