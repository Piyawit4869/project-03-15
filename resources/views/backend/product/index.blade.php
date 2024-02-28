@extends('layouts.master_backend')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Menu Table</h4>
                        </div>
                        <div class="m-n2">
                            <a href="{{ route('p.create') }}" type="button" class="btn btn-outline-primary m-2">เพิ่มข้อมูล</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive mt-4">
                            <table id="basic-table" class="table table-striped mb-0" role="grid">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Category</th>
                                        <th>Images</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $pro)
                                        <tr>
                                            <td>{{ $product->firstItem() + $loop->index }}</td>
                                            <td>{{ $pro->name }}</td>
                                            <td>{{ $pro->number }}</td>
                                            <td>{{ $pro->category->name }}</td>
                                            <td><img src="{{ asset('backend/product/resize/'.$pro->image) }}"></td>
                                            <td>{{ $pro->price }}</td>
                                            <td>{{ $pro->description }}</td>
                                            <td>{{ $pro->created_at }}</td>
                                            <td>{{ $pro->updated_at }}</td>
                                            <td>
                                            <a href="{{ route('p.edit',$pro->product_id) }}" class="btn btn-outline-primary">แก้ไข</>
                                            <a href="{{ url('admin/product/delete/'.$pro->product_id) }}" class="btn btn-outline-danger mx-2">ลบ</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3 ms-3">
                            {{ $product->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
