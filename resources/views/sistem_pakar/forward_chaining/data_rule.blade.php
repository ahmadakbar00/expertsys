@extends('sistem_pakar.template.forward')
 
@section('title', 'Page Title')
 
@section('fc-content')
    <p>Tables Rule</p>
    <form action="/fch/add-data-object" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Rule Name</label>
            <input name="name" type="text" class="form-control" id="name" >
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Desc</label>
            <input name="desc" type="text" class="form-control" id="desc" >
        </div>
        <div class="mb-3">
            <label for="group" class="form-label">Group</label>
            <input name="group" type="text" class="form-control" id="rules" >
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Group Id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($all_rule as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->rule}}</td>
                <td>{{$data->id_group}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>

@endsection