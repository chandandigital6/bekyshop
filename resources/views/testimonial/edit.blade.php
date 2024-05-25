<!-- resources/views/testimonials/create.blade.php -->

@extends('dashboard.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Testimonial</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('testimonial.update',$testimonial->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{$testimonial->name}}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control" name="title" value="{{$testimonial->title}}">
                            </div>

                            <div class="form-group">
                                <label for="msg">Message</label>
                                <textarea id="msg" class="form-control" name="msg" rows="4">{{$testimonial->msg}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" type="file" class="form-control" name="image" accept="image/*">
                                @if($testimonial)
                                    <img src="{{asset('storage/'.$testimonial->image)}}" alt="" width="200">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
