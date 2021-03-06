@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello, {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is your profile page, with your example post retrieved from the database.
                        @foreach ($posts as $post)
                            <h1> {{ $post->Title  }} </h1>
                                    {{ $post->body }}


                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
