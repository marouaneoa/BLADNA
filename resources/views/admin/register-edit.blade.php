@extends('layouts.master')


@section('title')
    Registered Roles | Bladna
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Edit Roles for registered users</h4>
                </div>
                <div class="card-body">
                    <h6>{{$users->name}}</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="/role.register.update/{{$users->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('PUT')}}

                            <div class="form-group">
                                <label>Give Role</label>
                                <select name="user_type" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="">None</option>
                                </select>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role-register" class="btn btn-danger">Cancel</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('script')

@endsection