@extends('frontend.layouts.app')
@section('title')
    {{env('APP_NAME')}} | Error!
@endsection

@section('content')
    <div class="answer-section">
        <div class="container">
            <div class="content">
                <div class='fa fa-check-circle-o symbol'></div>
                <div class='title'>Error!</div>
                <div class='text'>Oh NO! Something went wrong.</div>
                <a href="/" class="home-link">Try again</a>
            </div>
        </div>
    </div>
@endsection

@section('css')
@endsection
@section('js')

@endsection
