@extends('layout')

@section('title','Главная страница')

@section('content')

    <a class="btn btn-primary" role="button" href="{{route('user.create')}}">Create user</a>

    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td><a href="{{ route('user.show', $user) }}">{{ $user->name }}</a></td>
                <td><a href="{{ route('user.show', $user) }}">{{ $user->email }}</a></td>
                <td>
                    <form method="POST" action="{{route('user.destroy',$user)}}">
                        <a type="button" class="btn btn-warning" href="{{ route('user.edit', $user) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$users->links()}}
@endsection
