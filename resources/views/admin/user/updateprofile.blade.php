@extends('admin.admin_master')

@section('admin')

<div class="card card-default">

    <div class="card-header card-header-border-bottom">
        <h2>الملف الشخصي للمستخدم</h2>
    </div>

    <div class="card-body">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
        @endif

        <form class="form-pill" action="{{ route('update.user.profile') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">اسم المستخدم</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" value="{{ $user['email'] }}">
            </div>

            <button type="submit" class="btn btn-primary btn-default">تحديث</button>
        </form>
    </div>
</div>

@endsection
