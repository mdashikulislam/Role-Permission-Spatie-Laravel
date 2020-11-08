@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts <a href="{{route('home')}}" class="text-right" style="float: right">View</a></div>
                    <div class="card-body">
                        <form action="{{route('post.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Post Title Here" name="title" value="{{old('title')}}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="description" rows="10" placeholder="Post Description" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
