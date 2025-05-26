@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">

            <!-- عرض جميع العلامات التجارية -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">جميع العلامات التجارية</div>

                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">اسم العلامة</th>
                                <th scope="col">صورة العلامة</th>
                                <th scope="col">تاريخ الإضافة</th>
                                <th scope="col">العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($brand as $brd)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $brd->brand_name }}</td>
                                    <td>
                                        <img src="{{ asset($brd->brand_image) }}" style="height: 50px; width: 70px;" alt="صورة العلامة">
                                    </td>
                                    <td>
                                        @if($brd->created_at == NULL)
                                            <span class="text-danger"><strong>لا يوجد تاريخ</strong></span>
                                        @else
                                            {{ $brd->created_at->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('brand.edit', [$brd->id]) }}" class="btn btn-sm btn-info mb-1">تعديل</a>
                                        <a href="{{ route('brand.delete', [$brd->id]) }}"
                                           onclick="return confirm('هل أنت متأكد من الحذف؟')"
                                           class="btn btn-sm btn-danger mb-1">حذف</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- {{$brand->links()}} --}}
                </div>
            </div>

            <!-- إضافة علامة تجارية جديدة -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">إضافة علامة تجارية</div>

                    <div class="card-body">
                        <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="brand_name">اسم العلامة</label>
                                <input type="text" class="form-control" name="brand_name" id="brand_name">
                                @error('brand_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="brand_image">صورة العلامة</label>
                                <input type="file" class="form-control" name="brand_image" id="brand_image">
                                @error('brand_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">إضافة العلامة</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
