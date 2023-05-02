@extends('layouts.master')

@section('title')
    Items | Bladna
@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/save-item" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
            
           

            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">name:</label>
                <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">description:</label>
                <input type="text" name="description" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">price:</label>
                <input type="number" name="price" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">availability:</label>
                <select name="is_available" class="form-control">
                                    <option value="1">yes</option>
                                    <option value="0">no</option>
                    </select>
            </div>

            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">vendor:</label>
                <select name="vendor_id" class="form-control">
                    @foreach($vendor as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">region:</label>
                <select name="region_id" class="form-control">
                @foreach($regions as $region)
                        <option value="{{$region->id}}">{{$region->name}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">category:</label>
                <select name="category_id" class="form-control">
                @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
            </div>
           

            
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                 <h4 class="card-title"> Items
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
                        <table id="items" class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>name</th>
                                <th>description</th>
                                <th>price</th>
                                <th>is_available</th>
                                <th>vendor</th>
                                <th>region</th>
                                <th>category</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->is_available}}</td>
                                    <td>{{$item->vendor_id}}</td>
                                    <td>{{$item->region_id}}</td>
                                    <td>{{$item->category_id}}</td>
                                    <td>
                                        <a href="{{ url('items/'.$item->id) }}" class="btn btn-success"> EDIT</a>
                                      
                                    </td>
                                    <td>
                                        <form action="{{ url('items-delete/'.$item->id) }}" method="post">
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
    let table = new DataTable('#items');
    </script>
@endsection
    