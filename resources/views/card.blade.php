@extends('layouts.app-2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary">
                    Notifications <span class="badge bg-secondary">
                        {{ count(auth()->user()->unreadNotifications) }}
                    </span>
                </button>
            </div>
{{--            @for($i=0;$i<count(auth()->user()->unreadNotifications);$i++)--}}
{{--                <p>{{ json_encode(auth()->user()->unreadNotifications[$i]['data']['title']) }}</p>--}}
{{--            @endfor--}}

            @foreach(auth()->user()->unreadNotifications as $notification)
                @foreach($notification['data'] as $data)
                    <p>{{ $data }}</p>
                @endforeach
            @endforeach
        </div>
        <div class="row justify-content-center ">
            <div class="col-5">
                <div style="height: 100vh" class="d-flex align-items-center">
                    <div class="card card-body">
                        <h6 class="text-center">Add New Task</h6>
                        <form action="/card" method="post">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    <strong> {{ session('success') }}</strong>
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    <strong> {{ session('error') }}</strong>
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Task Title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter title of task" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning">Add Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
