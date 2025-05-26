@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">
            <!-- عرض الصور -->
            <div class="col-md-8">
                <div class="card-group">
                    @foreach ($image as $img)
                        <div class="col-md-4 mt-5">
                            <div class="card text-center">
                                <img src="{{ asset($img->image) }}" alt="صورة" class="img-fluid p-2">
                                <a href="{{ route('multy.delete', [$img->id]) }}" class="btn btn-danger m-2">حذف</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- نموذج إضافة صورة -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">إضافة صور متعددة</div>

                    <div class="card-body">
                        <form action="{{ route('store.images') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="category">القسم</label>
                                <select class="form-control" name="category_id">
                                    <option value="" selected disabled>اختر القسم المناسب</option>
                                    @foreach ($Category as $Category_id)
                                        <option value="{{ $Category_id->id }}" {{ old('category_id') == $Category_id->id ? 'selected' : '' }}>
                                            {{ $Category_id->Category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">الصور المتعددة</label>
                                <input type="file" class="form-control" name="image[]" multiple>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">إضافة الصور</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
