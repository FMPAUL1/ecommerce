@extends('layout.app')
@section('content')


   <div class="container">
    <table>
        <thead>

            <tr>
    <th>NAME</th>
    <th>EMAIL</th>
    <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                

            </tr>
            @endforeach
        </tbody>
    </table>
   </div>
@endsection