@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <a href="{{route('home')}}"><i class="fa fa-plus"></i> Add Task</a>
                </div>
                <div class="card-body">
                    <table id="todolist_table"  class="table table-striped table-bordered">
                       
                        <tbody>
                            @can('isAdmin')
                            Have No data
                            @else
                            
                           <h2>   Only Admin can  Access</h2>
                            
                        @endcan
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
