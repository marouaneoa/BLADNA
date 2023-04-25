@extends('layouts.master')

@section('title')
    Edit Item 
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                 <h4 class="card-title"> Items</h4>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <form action="{{url('items-update/'. $items->id)}}" method="POST">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
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
                                    <option value="true">yes</option>
                                    <option value="false">no</option>
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
                          
                            <button type="submit" class="btn btn-primary">Update</button>

                                <a href="{{ url('items/') }}" class="btn btn-secondary"> Back</a>
                                      
                       
                            
                        </div>
                    </form>
                 
                </div>
                
        </div>
    </div>
</div>
    
@endsection



@section('script')

@endsection