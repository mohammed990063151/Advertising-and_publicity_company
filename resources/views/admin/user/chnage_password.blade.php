@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>تغيير كلمة المرور</h2>
    </div>
    <div class="card-body">
        <form class="form-pill" action="{{route('password.update')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="current_password">كلمة المرور الحالية</label>
                <input type="password" name="oldpassword" class="form-control" id="current_password" placeholder="أدخل كلمة المرور الحالية">
                @error('oldpassword')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">كلمة المرور الجديدة</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="أدخل كلمة المرور الجديدة">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">تأكيد كلمة المرور</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                       placeholder="أعد إدخال كلمة المرور الجديدة">
                @error('password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-default">تغيير كلمة المرور</button>
        </form>
    </div>
</div>

@endsection
