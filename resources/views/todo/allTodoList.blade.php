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
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                            @if($allTodoLists->count() > 0)
                            @foreach($allTodoLists as $todolist)
                            <tr>
                            <td>
                                @if($todolist->completed==1 || $todolist->deleted_at != null)
                                <span><i class="fa fa-check green"></i></span>
                                @else
                              <a href="{{url('/todo/todos/status/'.$todolist->id)}}" onclick="return confirm('Are You Confirm?')"><span><i class="fa fa-check black"></i></span></a>
                                @endif
                            </td>
                            <td>@if($todolist->deleted_at != null) 
                                <del> {{$todolist->title}} </del> 
                                @else {{$todolist->title}} 
                                @endif
                            </td>
                            <td>@if($todolist->completed==1)
                                  <a href="{{url('/todo/update/'.$todolist->completed)}}"> 
                                   <div class='badge badge-success'>Done</div> </a>
                                @else
                                    <a href="{{url('/todo/update/'.$todolist->completed)}}">
                                    <div class='badge badge-danger'>Incompleted</div> </a>
                                @endif
                             </td>
                            <td>
                            

                                <a href="{{url('/todo/todos/edit/'.$todolist->id)}}"><i class='fa fa-edit'></i></a>
                                @if( $todolist->deleted_at == null)
                                <a href="{{url('/todo/todos/delete/'.$todolist->id)}}" onclick="return confirm('Are You sure')"><i class='fa fa-times'></i></buttpn></a>
                                @endif
                            </td>
                        </tr>
                            @endforeach
                            @else
                            <p>You Have No task</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
