@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection
@section('css')
    <link href="{{asset('admins/slider/index/index.css')}}" rel="stylesheet"/>
@endsection
@section('js')
    <script src="{{asset('vendors/sweetalert/sweetalert2@11.js')}}"></script>
    <script src="{{asset('admins/main.js')}}"></script>

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Sliders', 'key' => 'Edit'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('slider.create')}}" class="btn btn-success float-right m-2">Thêm slider</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên slide</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($sliders as $slider)
                                <tr>
                                    <th scope="row">{{$slider->id}}</th>
                                    <td> {{$slider->name}}</td>
                                    <td> {{$slider->description}}</td>
                                    <td><img class="image_slider" src="{{$slider->image_path}}" alt=""></td>
                                    <td>
                                        <a href="{{route('slider.edit', ['id' => $slider->id])}}" class="btn btn-default">Sửa</a>
                                        <a href=""
                                           data-url="{{route('slider.delete', ['id' => $slider->id])}}"
                                           class="btn btn-danger action_delete">Xóa</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$sliders->links()}}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


