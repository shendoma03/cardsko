@extends('layouts.layout')


@section('content')
    <h1>All cards</h1>
    <hr>


        <div>
            <table class="table table-hover">
                <th>Id</th>
                <th>Title</th>
                @foreach($cards as $card)
             <tr>
                <td><a href="/cards/{{$card->id}}"> {{$card->id}}</a></td>
                 <td>{{$card->title}}</td>
                 <br>
             </tr>
                @endforeach
            </table>
        </div>

@endsection