@extends('layouts.master')

@section('title')
    Edit Category 
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                 <h4 class="card-title"> Categories</h4>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <form action="{{url('categories-update/'. $categories->id)}}" method="POST">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="modal-body">
                            
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Category Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ $categories->name}}">
                            </div>
                            
                        </div>
                    
                        <div class="modal-footer">
                          
                            <button type="submit" class="btn btn-primary">Update</button>

                                <a href="{{ url('categories/') }}" class="btn btn-secondary"> Back</a>
                                      
                       
                            
                        </div>
                    </form>
                 
                </div>
                
        </div>
    </div>
</div>
    
@endsection



@section('script')

@endsection