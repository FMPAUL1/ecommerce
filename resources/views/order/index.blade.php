@extends('layout.app')
@section('content')


   <div class="container">
    <table>
        <thead>

            <tr>
    <th></th>
    <th></th>
    <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            @endforeach
        </tbody>
    </table>
   </div>
@endsection