@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top:60px">
        <div class="card bg-white shadow-sm">
            <div class="card-body">
                <h4 class="text-center">View Students Record</h4>
                @if (Session::has('error'))
                    <p class="alert alert-info">{{ Session::get('error') }}</p>
                @endif
                @if (Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
                <table id="table" class="table table-bordered  table-hover table-striped mt-3">
                    <thead>
                        <tr>
                            <th>SR#</th>
                            <th>Full Name</th>
                            <th>Father Name</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach ($students ?? [] as $key => $value)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $value->FullName }}</td>
                                <td>{{ $value->FatherName }}</td>
                                <td>{{ $value->Gender }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ route('view', $value->StudentId) }}">View</a>
                                    <a class="btn btn-sm btn-primary"  href="{{ route('edit', $value->StudentId) }}">Edit</a>
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('delete', $value->StudentId) }}">Delete</a>
                                </td>
                            </tr>

                            @php ++$count  @endphp
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('create') }}" class="btn btn-sm btn-success offset-md-11">Create</a>
            </div>

        </div>
    </div>
@endsection
