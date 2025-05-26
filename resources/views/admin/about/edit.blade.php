@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <div class="card-header">تعديل قسم من نحن</div>

                    <div class="card-body">
                        <form action="{{ route('about.update', [$about->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleFormControlInput1">عنوان قسم من نحن</label>
                                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="عنوان القسم"
                                    value="{{ $about->title }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">وصف قصير</label>
                                <textarea class="form-control" name="short_dis" id="exampleFormControlTextarea1" rows="3">{{ $about->short_dis }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">وصف طويل</label>
                                <textarea class="form-control" name="long_dis" id="exampleFormControlTextarea1" rows="3">{{ $about->long_dis }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">العنصر 1</label>
                                <input type="text" class="form-control" name="l1" id="exampleFormControlInput1" placeholder="العنصر 1"
                                    value="{{ $about->l1 }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">العنصر 2</label>
                                <input type="text" class="form-control" name="l2" id="exampleFormControlInput1" placeholder="العنصر 2"
                                    value="{{ $about->l2 }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">العنصر 3</label>
                                <input type="text" class="form-control" name="l3" id="exampleFormControlInput1" placeholder="العنصر 3"
                                    value="{{ $about->l3 }}">
                            </div>

                            <button type="submit" class="btn btn-primary">تحديث البيانات</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
