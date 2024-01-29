@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-2">
                    Add Category
                    <a href="{{ url('admin/category/create')}}" class="btn btn-primary text-white btn-sm float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Name</label>
                            <input type="text" name="name" class="form-control" style="border-width: 3px;">
                            @error('name') <small class="text-danger">{{ $message }}</small>@enderror

                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Slug</label>
                            <input type="text" name="slug" class="form-control" style="border-width: 3px;">
                            @error('slug') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Description</label>
                            <textarea name="description" class="form-control" rows="3" style="border-width: 3px;"></textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Image</label>
                            <input type="file" name="image" class="form-control" style="border-width: 3px;">
                            @error('image') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Status</label><br/>
                            <input type="checkbox" name="status">
                            @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <h4>SEO tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" style="border-width: 3px;">
                            @error('meta_title') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Meta Keyword</label>
                            <textarea name="meta_keyword" class="form-control" rows="3" style="border-width: 3px;"></textarea>
                            @error('meta_keyword') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3" style="border-width: 3px;"></textarea>
                            @error('meta_description') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>

                    </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection