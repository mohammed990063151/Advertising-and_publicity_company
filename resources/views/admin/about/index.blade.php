@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">
            <h2>حول الصفحة الرئيسية</h2>

            {{-- زر إضافة --}}
            <a href="{{ route('add.about') }}" class="btn btn-success mb-3" role="button" aria-disabled="true" style="margin-right: 20px;">إضافة قسم "من نحن"</a>

            <div class="col-md-12">
                <div class="card table-responsive">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <div class="card-header">جميع بيانات من نحن</div>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>رقم</th>
                                <th>العنوان</th>
                                <th>الوصف القصير</th>
                                <th>الوصف الطويل</th>
                                <th>عنصر 1</th>
                                <th>عنصر 2</th>
                                <th>عنصر 3</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($homeabouts as $about)
                            <tr>
                                <th>{{ $about->id }}</th>
                                <td>{{ Str::limit($about->title, 35) }}</td>
                                <td>{{ Str::limit($about->short_dis, 40) }}</td>
                                <td>{{ Str::limit($about->long_dis, 40) }}</td>
                                <td>{{ Str::limit($about->l1, 5) }}</td>
                                <td>{{ Str::limit($about->l2, 5) }}</td>
                                <td>{{ Str::limit($about->l3, 5) }}</td>
                                <td>
                                    <div class="d-flex flex-wrap">
                                        <a href="{{ route('about.edit', [$about->id]) }}" class="btn btn-info me-2 mt-2">تعديل</a>
                                        <form action="{{ route('about.delete', [$about->id]) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mt-2">حذف</button>
                                        </form>
                                    </div>
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
