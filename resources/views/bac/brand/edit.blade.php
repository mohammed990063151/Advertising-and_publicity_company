@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">

            <div class="col-md-8 mx-auto"> <!-- وسط الصفحة -->
                <div class="card">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <div class="card-header">تعديل العلامة التجارية</div>

                    <div class="card-body">
                        <form action="{{ route('brand.update', [$brands->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">

                            <div class="form-group">
                                <label for="brand_name">اسم العلامة</label>
                                <input type="text" class="form-control" name="brand_name" id="brand_name"
                                       value="{{ $brands->brand_name }}">
                                @error('brand_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="brand_image">تحديث صورة العلامة</label>
                                <input type="file" class="form-control" name="brand_image" id="brand_image">
                                @error('brand_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label>الصورة الحالية:</label><br>
                                <img src="{{ asset($brands->brand_image) }}" style="width: 100%; max-width: 400px; height: auto;" alt="صورة العلامة">
                            </div>

                            <button type="submit" class="btn btn-success mt-3">تحديث العلامة</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
