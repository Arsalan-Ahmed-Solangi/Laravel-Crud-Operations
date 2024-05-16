@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top:60px">
        <div class="card bg-white shadow-sm">
            <div class="card-body">
                <h4 class="text-center">Add Student Details
                </h4>
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul class="p-0 m-0" style="list-style: none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('error'))
                    <p class="alert alert-info">{{ Session::get('error') }}</p>
                @endif
                <form action="{{ route('store') }}" method="POST">

                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="FullName" class="form-control"
                                    placeholder="Enter Full Name here..." />

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Name<span class="text-danger">*</span></label>
                                <input type="text" name="FatherName" class="form-control"
                                    placeholder="Enter Father Name here..." />

                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender <span class="text-danger">*</span></label>
                                <select class="form-select" name="Gender">
                                    <option value="">--Select Gender---</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Class<span class="text-danger">*</span></label>
                                <select class="form-select" name="Class">
                                    <option value="">--Select Class---</option>
                                    <option value="Software Engineering">Software Engineering</option>
                                    <option value="Information Tech">Information Tech</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Computer Science">Computer Science</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="Address">

                                </textarea>

                            </div>
                        </div>


                    </div>
                    <div class="form-group text-center">
                        <a href="{{ route('index') }}" class="btn btn-sm btn-primary">Back</a>
                        <button type="submit" class="btn btn-sm btn-success ">Add Student</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
