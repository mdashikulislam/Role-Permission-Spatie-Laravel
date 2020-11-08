@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('inc.message')
            <div class="card">
                <div class="card-header">Posts <a href="{{route('post.create')}}" class="text-right" style="float: right">New</a></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    <a href="">{{$post->title}}</a>
                                </td>
                                <td>
                                    <a href="{{route('post.edit',['id'=>$post->id])}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
