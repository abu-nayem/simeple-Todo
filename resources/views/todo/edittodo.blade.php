@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">{{ __('Add To do') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form method="POST" action="{{route('todo.update')}}">
                        @csrf
                        <h3>What is your main focus for today?</h3>
                        <div class="form-group row">
                            

                            <div class="col-md-8">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$todo->title}}" required autocomplete="title" autofocus>
                                <input type="hidden" name="id" value="{{$todo->id}}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-success">Update</button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
