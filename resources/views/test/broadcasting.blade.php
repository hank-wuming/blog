@extends('layouts.dashboard')
@section('section')

@endsection

@push('scripts')
    <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
    <script src="{{ asset(mix("js/bootstrap.js")) }}"></script>
@endpush
