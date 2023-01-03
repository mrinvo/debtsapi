@extends('admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">اضافة مقال</h4>
                        <hr>
                        <hr>
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                        <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="title" value="" type="text" id="name">
                                </div>
                            </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="username" class="col-sm-2 col-form-label">description</label>
                            <div class="col-sm-10">
                                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                            <!-- end row -->
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">image</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="img" value="" type="file" id="image">
                            </div>
                        </div>


                        <input type="submit" value="اضافة" class="btn btn-info waves-effect waves-light" id="">

                        <!-- end row -->
                    </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>

</div>

@endsection
