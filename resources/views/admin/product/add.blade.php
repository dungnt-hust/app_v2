@extends('layouts.admin')

@section('title')
    <title>Thêm sản phẩm</title>
@endsection

@section('css')

    <link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet"/>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'product', 'key' => 'Add'])
{{--        <div class="col-md-12">--}}

{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
    <!-- /.content-header -->
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                                @csrf
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           placeholder="Nhập tên sản phẩm"
                                           value="{{old('name')}}"
                                    >
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input type="text"
                                           class="form-control @error('price') is-invalid @enderror"
                                           name="price"
                                           placeholder="Nhập giá sản phẩm"
                                           value="{{old('price')}}"
                                    >
                                    @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input type="file"
                                           class="form-control-file"
                                           name="feature_image_path"
                                    >
                                </div>

                                <div class="form-group">
                                    <label>Ảnh chi tiết</label>
                                    <input type="file"
                                           multiple
                                           class="form-control-file"
                                           name="image_path[]"
                                    >
                                </div>

                                <div class="form-group">
                                    <label>Chọn danh mục</label>
                                    <select class="form-control select2_init @error('category_id') is-invalid @enderror" name="category_id">
                                        <option value="">Chọn danh mục</option>
                                        {!! $htmlOption !!}}
                                    </select>
                                    @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Nhập tag</label>
                                    <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                                    </select>
                                </div>


                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nội dung sản phẩm</label>
                                <textarea name="contents" class="form-control tinymce_editor_init  @error('contents') is-invalid @enderror"
                                          rows="8"  >{{old('contents')}}</textarea>
                                @error('contents')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </form>
    </div>

    <!-- /.content-wrapper -->
@section('js')
    <script src="{{asset('vendors/select2/select2.min.js')}}"></script>
    <script
        src="https://cdn.tiny.cloud/1/stqjczdv0u9kkqg51hb2872n1xofsmbe8wgjznp6wixiz1ap/tinymce/5/tinymce.min.js"></script>
    <script src="{{asset('admins/product/add/add.js')}}"></script>
@endsection
@endsection


