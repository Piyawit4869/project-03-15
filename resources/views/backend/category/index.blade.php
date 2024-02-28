@extends('layouts.master_backend')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Category Table</h4>
                            </div>
                            <div class="m-n2">
                                <a href="{{ route('c.create') }}" type="button"
                                    class="btn btn-outline-primary m-2">เพิ่มข้อมูล</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive mt-4">
                                <table id="basic-table" class="table table-striped mb-0" role="grid">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Number Product</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $cat)
                                            <tr>
                                                <td>{{ $category->firstItem() + $loop->index }}</td>
                                                <td>{{ $cat->name }}</td>
                                                <td>{{ $cat->product->count() }}</td>
                                                <td>{{ $cat->created_at }}</td>
                                                <td>{{ $cat->updated_at }}</td>
                                                <td>
                                                    <a href="{{ url('admin/category/edit/' . $cat->category_id) }}"
                                                        class="btn btn-outline-primary">แก้ไข</>
                                                        <a href="{{ url('admin/category/delete/' . $cat->category_id) }}"
                                                            class="btn btn-outline-danger mx-2">ลบ</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-3 ms-3">
                                    {{ $category->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
