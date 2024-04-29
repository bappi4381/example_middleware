@extends('admin.master')

@section('body')
<div class="bg-light p-5 rounded">
        <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   <div class=" d-flex  justify-content-between " >
                        <h4 class="card-title">Admin Create user</h4>
                          
                   </div>
                     <p class="card-title-desc">{{Session::get('message')}}</p>

                     <form action="{{route('user.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">User Name</label>
                                <input type="text"  name="name" class="form-control" id="formrow-firstname-input">
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="form-group">
                                <label for="formrow-email-input">Email</label>
                                <input type="email" name="email" class="form-control" id="formrow-email-input">
                            </div>
                        </div>
                        <div class="mt-2">
                             <div class="form-group">
                                <label for="formrow-email-input">Password</label></br>
                                <input type="password" name="password" class="form-control" id="formrow-email-input">
                            </div>
                        </div>
                        <div class="mt-2">
                             <div class="form-group">
                                <label for="formrow-email-input">User Type</label></br>
                                <input type="text" name="is_admin" class="form-control" id="formrow-email-input">
                            </div>
                        </div>
                        
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary w-md">Create a New Product</button>
                        </div>
                    </form>
                          

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    </div>
@endsection
