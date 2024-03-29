@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-2">
                    Edit Category
                    <a href="{{ url('admin/category')}}" class="btn btn-primary text-white btn-sm float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Name</label>
                            <input type="text" name="name" value="{{ $category->name}}" class="form-control" style="border-width: 3px;"/>
                            @error('name') <small class="text-danger">{{ $message }}</small>@enderror

                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Slug</label>
                            <input type="text" name="slug" value="{{ $category->slug}}" class="form-control" style="border-width: 3px;"/>
                            @error('slug') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Description</label>
                            <textarea name="description"  class="form-control" style="border-width: 3px;" rows="3">{{ $category->description}}</textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Image</label>
                            <input type="file" name="image" class="form-control" style="border-width: 3px;"/>
                            <img src="{{ asset('/uploads/category/'.$category->image) }}" width="60px" height="60px">
                            @error('image') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Status</label><br/>
                            <input type="checkbox" name="status"  {{ $category->status == '1' ? 'checked':''}}  />
                            @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <h4>SEO tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ $category->meta_title}}" class="form-control" style="border-width: 3px;">
                            @error('meta_title') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Meta Keyword</label>
                            <textarea name="meta_keyword" class="form-control" rows="3" style="border-width: 3px;">{{ $category->meta_keyword}}</textarea>
                            @error('meta_keyword') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3" style="border-width: 3px;">{{ $category->meta_description}}</textarea>
                            @error('meta_description') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>

                    </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection