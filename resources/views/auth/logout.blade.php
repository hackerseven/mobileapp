@extends('layouts.auth.master')

@section('body')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#logout-form').submit();
        })
    </script>
@endsection
