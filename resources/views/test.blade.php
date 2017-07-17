@extends('layouts.dashboard')
@section('section')
    <div id="app">
        <example></example>
        <ul>
            <li v-for="skill in skills">@{{ skill }}</li>
        </ul>
    </div>
    <div id="app-3">
        <test></test>
        <child hello="good"></child>
        <test2></test2>
    </div>
@endsection

@push('scripts')
<script src="{{ asset(mix("js/test.js")) }}"></script>
@endpush
