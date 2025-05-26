@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">
            <h2>جهات الاتصال</h2>
            {{-- {{route('add.contact')}} رابط زر الإضافة --}}
            <a href="{{ route('add.contact') }}" class="btn btn-success" role="button" aria-disabled="true" style="margin-right: 20px;">إضافة جهة اتصال</a>

            <div class="col-md-12">
                <div class="card table-responsive">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <div class="card-header">تفاصيل جهات الاتصال</div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">رقم</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">البريد الإلكتروني</th>
                                <th scope="col">رقم الهاتف</th>
                                <th scope="col">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php ($i = 1)
                            @foreach ($contacts as $contact)
                                <tr>
                                    <th scope="row">{{ $contact->id }}</th>
                                    <td>{{ Str::limit($contact->address, 35) }}</td>
                                    <td>{{ Str::limit($contact->email, 40) }}</td>
                                    <td>{{ Str::limit($contact->phone, 40) }}</td>
                                    <td>
                                        <a href="{{ route('contact.edit', [$contact->id]) }}" class="btn btn-info">تعديل</a>
                                        {{-- رابط حذف جهة الاتصال --}}
                                        <a href="{{ route('contact.delete', [$contact->id]) }}" onclick="return confirm('هل أنت متأكد من الحذف؟')" class="btn btn-danger">حذف</a>
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
