@extends('sistem_pakar.template.forward')
 
@section('title', 'Page Title')
 
@section('fc-content')
    <p>Tables</p>
    <form action="/fch/add-data-object" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Object name">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Desc</label>
            <input name="desc" type="text" class="form-control" id="desc" placeholder="nullable" >
        </div>
        <div class="mb-3">
            <label for="rules" class="form-label">Rules</label>
            <input name="rules" type="text" class="form-control" id="rules" placeholder="1,2,3,4,5,7,8">
        </div>
       
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Result</th>
            <th scope="col">Rules</th>
            <th scope="col">Time</th>
            </tr>
        </thead>
        <tbody>
        @foreach($all_obj as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->object_name}}</td>
                <td>{{$data->object_result}}</td>
                <td>{{$data->object_rules}}</td>
                <td>{{$data->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>

@endsection