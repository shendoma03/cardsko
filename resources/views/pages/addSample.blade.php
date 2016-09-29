@extends('layouts.app')
@section('content')
<h3>Add</h3>

<div class="container">

    <h3>Add</h3>
    <form class="form-inline">
        <div class="form-group">
            <label for="exampleInputName2">Name</label><br>
            <textarea  name="data" method="get" action="sample/"></textarea>
        </div><br>

        <button type="submit" class="btn btn-primary">Send invitation</button>
    </form>
</div>

<img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=">

    @endsection