@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">

    <div class="content">
        <div class="col-lg-12">
            <div class="card card-default">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif

                <div class="card-header card-header-border-bottom">
                    <h2>إنشاء قسم من نحن</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('store.about') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleFormControlInput1">عنوان من نحن</label>
                            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="عنوان القسم">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">وصف قصير</label>
                            <textarea class="form-control" name="short_dis" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">وصف طويل</label>
                            <textarea class="form-control" name="long_dis" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">العنصر 1</label>
                            <input type="text" class="form-control" name="l1" id="exampleFormControlInput1" placeholder="العنصر 1">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">العنصر 2</label>
                            <input type="text" class="form-control" name="l2" id="exampleFormControlInput1" placeholder="العنصر 2">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">العنصر 3</label>
                            <input type="text" class="form-control" name="l3" id="exampleFormControlInput1" placeholder="العنصر 3">
                        </div>

                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                            <button type="submit" class="btn btn-primary btn-default">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
