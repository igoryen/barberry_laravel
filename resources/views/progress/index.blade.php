@extends('layout/template')

@section('progress')
  <h2>Progress</h2>
  <a href="{{url('/progress/create')}}" class="btn btn-success">Create Progress record</a>
  <hr>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr class="bg-info">

        <th>id</th>
        <th>uid</th>
        <th>eid</th>
        <th>week</th>
        <th>weight</th>
        <th>comments</th>
        <th colspan="3">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($progressRecords as $p)

      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->uid }}</td>
        <td>{{ $p->eid }}</td>
        <td>{{ $p->week }}</td>
        <td>{{ $p->weight }}</td>
        <td>{{ $p->comments }}</td>

        <td><a href="{{url('progress',$p->id)}}" class="btn btn-primary">View</a></td>
        <td><a href="{{route('progress.edit',$p->id)}}" class="btn btn-warning">Update</a></td>

      </tr>
      @endforeach

    </tbody>

  </table>
                          

@endsection