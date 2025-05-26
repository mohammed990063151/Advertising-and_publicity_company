@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
    <div class="content">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>الرسائل</h2>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">الاسم</label>
                        <input type="text" class="form-control" name="email" id="exampleFormControlInput1" value="{{$messages->name}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">البريد الإلكتروني</label>
                        <input type="text" class="form-control" name="email" id="exampleFormControlInput1" value="{{$messages->email}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الموضوع</label>
                        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" value="{{$messages->subject}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">الرسالة</label>
                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{$messages->message}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">تاريخ الإرسال</label>
                        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" value="{{$messages->created_at}}">
                    </div>

                    <a href="{{route('message.delete',[$messages->id])}}" class="btn btn-danger">حذف</a>
                    <a href="{{route('contact.message')}}" class="btn btn-info">رجوع</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
