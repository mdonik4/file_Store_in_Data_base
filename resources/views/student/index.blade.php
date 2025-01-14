@extends('master.master')

@section('title')
    Manage-Student
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2 class="text-center fw-bold">Manage-Student</h2>
                            <div class="card-body">
                                <table class="table border">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>
                                            <img src="{{ asset($student->image) }}" style="height: 60px; width: 50px" alt="">
                                        </td>
                                        <td>
                                            <a href="{{route('student.edit', ['id' => $student->id])}}" class="btn btn-outline-primary btn-sm rounded-0">Edit</a>
                                            <a href="{{route('student.destroy', ['id' => $student->id])}}" onclick="return confirm('Are you sure delete this?')" class="btn btn-outline-danger btn-sm rounded-0">Delete</a>
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
        </div>
    </section>
@endsection