@extends('admin.master')
@section('content')
@php
    use App\Models\Debts;
@endphp
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">الاعلانات</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">سدد ديونك</a></li>
                            <li class="breadcrumb-item active">الاعلانات</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->





        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">الاعلانات</h4>

                        <br>
                        <br>
                        <a class="btn btn-info" href="{{ route('admin.ad.create') }}">اضافة الاعلانات</a>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>title</th>
                                <th>description</th>
                                <th>image</th>
                                <th>actions</th>

                            </tr>
                            </thead>


                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->title }}</td>
                                    <td>{{ $d->description }}</td>
                                    <td><img width="100" height="100" src="{{ $d->img }}" alt=""> </td>
                                    <td>
                                        <a href="" class="btn btn-info">edit</a>
                                        <a href="" class="btn btn-danger">delete</a>
                                    </td>

                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        <!-- end row -->
    </div>

</div>
@endsection
