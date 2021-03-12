@extends('layout')

@section('title','User '. $user->name)

@section('content')
    <a type="button" class="btn btn-secondary" href="{{route('user.index')}}">back to users</a>

    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$user->id}}</li>
            <li class="list-group-item">Name: {{$user->name}}</li>
            <li class="list-group-item">email: {{$user->email}}</li>
            <li class="list-group-item">created_at: {{$user->created_at->format('d/m/y-H:i:s')}}</li>
            <li class="list-group-item">updated_at: {{$user->updated_at->format('d/m/y-H:i:s')}}</li>
        </ul>
    </div>

    <form method="POST" action="{{route('user.destroy',$user)}}" class="mt-3">
        <a type="button" class="btn btn-warning" href="{{ route('user.edit', $user) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" >Delete</button>
    </form>

@endsection
