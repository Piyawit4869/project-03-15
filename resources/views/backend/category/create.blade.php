@extends('layouts.master_backend')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Category</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <p></p>
                            <form method="POST" action="{{ url('admin/category/insert') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputText1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputText1"
                                        placeholder="กรุณากรอกประเภทสินค้า">
                                </div>

                                <div class="mt-3">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <input type="submit" value="บันทึก" class="btn btn-primary">
                                <a href="{{ route('c.category') }}" class="btn btn-danger">ยกเลิก</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
