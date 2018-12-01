@extends('frontend.layouts.app')
@section('title')
    {{env('APP_NAME')}} | Success!
@endsection

@section('content')
    <div class="answer-section">
        <div class="container">
            <div class="content">
                <div class='fa fa-check-circle-o symbol'></div>
                <div class='title'>Thank you!</div>
                <div class='text'>Your CV has been sending!</div>
                <a href="/" class="home-link">Back to home page</a>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection
@section('js')
    <script></script>
@endsection
