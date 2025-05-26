@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">
            <h2>الرسائل من العملاء</h2>

            <div class="col-md-12">
                <div class="card table-responsive">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <div class="card-header">جميع الرسائل</div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">رقم التعريف</th>
                                <th scope="col">الاسم</th>
                                <th scope="col">البريد الإلكتروني</th>
                                <th scope="col">الموضوع</th>
                                <th scope="col">الرسالة</th>
                                <th scope="col">التاريخ</th>
                                <th scope="col">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($messages as $meg)
                                <tr>
                                    <th scope="row">{{ $meg->id }}</th>
                                    <td>{{ Str::limit($meg->name, 10) }}</td>
                                    <td>{{ Str::limit($meg->email, 15) }}</td>
                                    <td>{{ Str::limit($meg->subject, 20) }}</td>
                                    <td>{{ Str::limit($meg->message, 80) }}</td>
                                    <td>{{ $meg->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('message.view', [$meg->id]) }}" class="btn btn-info">عرض</a>
                                        <a href="{{ route('message.delete', [$meg->id]) }}" onclick="return confirm('هل أنت متأكد من الحذف؟')" class="btn btn-danger">حذف</a>
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
