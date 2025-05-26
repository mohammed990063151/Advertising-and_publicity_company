@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">
                <h2>بيانات السلايدر</h2>
                {{-- <a href="{{route('add.slider')}}" class="btn btn-success">إضافة سلايدر جديد</a> --}}
                <a href="{{route('add.slider')}}" class="btn btn-success" style="margin-right: 20px;">إضافة سلايدر جديد</a>

                <div class="col-md-12">
                    <div class="card table-responsive">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif

                        <div class="card-header">جميع السلايدرات</div>

                        <table class="table table-striped table-hover mx-auto w-auto">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">رقم</th>
                                    <th scope="col" width="20%">عنوان السلايدر</th>
                                    <th scope="col" width="35%">وصف السلايدر</th>
                                    <th scope="col" width="20%">الصورة</th>
                                    <th scope="col" width="20%">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php ($i = 1)
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <th scope="row">{{$slider->id}}</th>
                                        <td>{{ $slider->title}}</td>
                                        <td>{{ Str::limit($slider->dec, 40)}}</td>
                                        <td><img src="{{asset($slider->image)}}" style="height:50px; width:70px;"></td>
                                        <td>
                                            <a href="{{route('slider.edit',[$slider->id])}}" class="btn btn-info">تعديل</a>
                                            <a href="{{route('slider.delete',[$slider->id])}}" onclick="return confirm('هل أنت متأكد من الحذف؟')" class="btn btn-danger">حذف</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection


