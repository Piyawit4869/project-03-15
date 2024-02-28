@extends('layouts.master_backend')
@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Create Menu</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <p></p>
                            <form method="post" enctype="multipart/form-data" action="{{ url('admin/product/insert') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputText1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputText1"
                                        placeholder="กรุณากรอกชื่อสินค้า">
                                </div>

                                <div class="mt-3">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail3">Number</label>
                                    <input type="text" name="number" class="form-control" id="exampleInputEmail3"
                                         placeholder="กรุณากรอกจำนวนสินค้า">
                                </div>

                                <div class="mt-3">
                                    @error('number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail3">Price</label>
                                    <input type="text" name="price" class="form-control" id="exampleInputEmail3"
                                         placeholder="กรุณากรอกราคาสินค้า">
                                </div>

                                <div class="mt-3">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="exampleInputurl">Description</label>
                                    <input type="text" name="description" class="form-control" id="exampleInputurl"
                                         placeholder="กรุณากรอกรายละเอียดสินค้า">
                                </div>

                                <div class="mt-3">
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="exampleInputphone">Category</label>
                                    <select type="text" name="category_id" class="form-control" id="exampleInputphone">
                                        <option selected>กรุณาเลือกประเภทสินค้า</option>
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->category_id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="exampleInputNumber1">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputNumber1">
                                </div>

                                <div class="mt-3">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <input type="submit" value="บันทึก" class="btn btn-primary">
                                <a href="{{ route('p.product') }}" class="btn btn-danger">ยกเลิก</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
