<!-- resources/views/abouts/create.blade.php -->

@extends('dashboard.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create About</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('about.update',$about->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" type="file" class="form-control" name="image" accept="image/*">
                                @if($about)
                                    <img src="{{asset('storage/'.$about->image)}}" alt="" width="200">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control" name="title" value="{{$about->title}}">
                            </div>

                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input id="heading" type="text" class="form-control" value="{{$about->heading}}" name="heading">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{$about->description}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
