@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top:60px">
        <div class="card bg-white shadow-sm">
            <div class="card-body">
                <h4 class="text-center">Student Details
                </h4>
                @if(Session::has('error'))
                <p class="alert alert-info">{{ Session::get('error') }}</p>
                @endif
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                        <p> <b> Student Name  : </b> {{ $student->FullName  }} </p>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                        <p> <b> Father Name  : </b> {{ $student->FatherName  }} </p>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                        <p> <b> Gender  : </b> {{ $student->Gender  }} </p>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                        <p> <b> Class  : </b> {{ $student->Class  }} </p>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                        <p> <b> Address  : </b> {{ $student->Address  }} </p>
                    </div>
                </div>

                <a href="{{ route('index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
