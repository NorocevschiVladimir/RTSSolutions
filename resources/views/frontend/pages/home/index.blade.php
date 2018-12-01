@extends('frontend.layouts.app')
@section('title')
    {{env('APP_NAME')}}
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Job offer</h3>
                            <p>If you want to join our team please send your CV.</p>
                        </div>
                        <hr>
                        <div class="card-body">
                            <form action="{{route('cvSend')}}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                <div class="group">
                                    <h6>Your Name</h6>
                                    <div class="form-group">
                                        <label for="name">
                                            <i class="fas fa-user"></i>
                                        </label>
                                        <input type="text" placeholder="example: John Doe" required name="name" id="name">
                                    </div>
                                </div>
                                <div class="group">
                                    <h6>Your CV</h6>
                                    <div class="form-group">
                                        <label for="file">
                                            <i class="fas fa-file-pdf"></i>
                                        </label>
                                        <input type="file" id="file" name="file" required>
                                    </div>
                                </div>
                                <div class="group">
                                    <h6>Your Email Address</h6>
                                    <div class="form-group">
                                        <label for="mail">
                                            <i class="fas fa-envelope"></i>
                                        </label>
                                        <input type="email" placeholder="example: office@example.com" name="email" required id="mail">
                                    </div>
                                </div>
                                <div class="group">
                                    <h6>Your Message</h6>
                                    <div class="form-group">
                                        <label for="message">
                                            <i class="fas fa-comment-alt"></i>
                                        </label>
                                        <textarea name="message" id="message" cols="10" rows="5"  placeholder="example: I'd like to say &quot;Hello World!&quot;"></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="send" value="Submit your CV">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
@endsection
@section('js')

@endsection
