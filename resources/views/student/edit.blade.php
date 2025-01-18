@extends('master.master')

@section('title')
    Edit Page
@endsection

@section('body')
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow py">
                        <div class="card-header">
                            <h3 class=" text-center fw-bold">Edit Student</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('student.update',['id'=>$student->id])}}" method="post" enctype="multipart/form-data">
                                <div class="text-center text-success fw-bolder">
                                    <span>{{ Session::has('success') ? Session::get('success') : ''}}</span>
                                </div>
                                @csrf
                                <div class="row mt-2">
                                <label for="" class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" value="{{$student->email}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" value="{{$student->mobile}}"class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{asset($student->image)}}" alt="" style="height: 60px">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-9">
                                    <input type="submit" name="image" class="btn btn-outline-success float-sm-end rounded 0" value="Update Student">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection