@extends('admin.master')

@section('body')
<div class="bg-light p-5 rounded">
        <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   <div class=" d-flex  justify-content-between " >
                        <h4 class="card-title">Admin list</h4>
                        <a href="{{route('admin.add')}}"class="btn btn-primary float-right">Add User</a>      
                   </div>
                     <p class="card-title-desc">{{Session::get('message')}}</p>
                    <table  class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <div class="d-flex folat-right justify-content-end ">
                        <form action="{{route('admin.search')}}" method="get">
                            <input type="text" name="query" class="form-control w-25" placeholder="Search...">
                            <button type="submit" class="btn btn-success">Search</button>
                        </form>
                    </div>
                   
                    
                    <thead>
                        <tr>
                            <th>Sl On</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            
                            <th>Action</th>
                        </tr>
                        </thead>

                        @foreach($users as $user)
                        <tbody>
                        
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->is_admin}}</td>
                                <td>
                                    <a href="" class="btn btn-primary" title="View Course Details">
                                        Edit
                                    </a>
                                    <a href="" class="btn btn-danger {{$user->is_admin == 'admin'? 'disabled':''}}" title="View Course Details">
                                       Delete
                                    </a>
                                </td>
                            </tr>
                        
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    </div>
@endsection
