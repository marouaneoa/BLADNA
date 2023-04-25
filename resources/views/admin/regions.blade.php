@extends('layouts.master')

@section('title')
    Regions | Bladna
@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New region</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/save-region" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
            
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Region:</label>
                <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                 <h4 class="card-title"> Regions
                 <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >ADD</button>
                 </h4>
                
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="regions" class="table">
                            <thead class=" text-primary">
                                <th>Region ID</th>
                                <th>Region Name</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </thead>
                            <tbody>
                                @foreach($regions as $region)
                                <tr>
                                    <td>{{$region->id}}</td>
                                    <td>{{$region->name}}</td>
                                    <td>
                                        <a href="{{ url('regions/'.$region->id) }}" class="btn btn-success"> EDIT</a>
                                      
                                    </td>
                                    <td>
                                        <form action="{{ url('regions-delete/'.$region->id) }}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
           
                                            <button typr="submit" class="btn btn-danger"> DELETE</a>
                                        </form>    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection



@section('script')
<script>
    let table = new DataTable('#regions');
    </script>
@endsection
    