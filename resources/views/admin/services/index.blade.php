@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>تفاصيل الخدمات</h2>
    </div>
    <div class="card-body">
        <form class="form-pill" action="{{ route('services.update', [$services->id]) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="mtitle">العنوان الرئيسي</label>
                <input type="text" class="form-control" name="mtitle" value="{{ $services->mtitle }}">
            </div>

            {{-- عناوين الكروت --}}
            <div class="form-group">
                <label for="ctitle1">عنوان البطاقة 1</label>
                <input type="text" class="form-control" name="ctitle1" value="{{ $services->ctitle1 }}">
            </div>

            <div class="form-group">
                <label for="ctitle2">عنوان البطاقة 2</label>
                <input type="text" class="form-control" name="ctitle2" value="{{ $services->ctitle2 }}">
            </div>

            <div class="form-group">
                <label for="ctitle3">عنوان البطاقة 3</label>
                <input type="text" class="form-control" name="ctitle3" value="{{ $services->ctitle3 }}">
            </div>

            <div class="form-group">
                <label for="ctitle4">عنوان البطاقة 4</label>
                <input type="text" class="form-control" name="ctitle4" value="{{ $services->ctitle4 }}">
            </div>

            <div class="form-group">
                <label for="ctitle5">عنوان البطاقة 5</label>
                <input type="text" class="form-control" name="ctitle5" value="{{ $services->ctitle5 }}">
            </div>

            <div class="form-group">
                <label for="ctitle6">عنوان البطاقة 6</label>
                <input type="text" class="form-control" name="ctitle6" value="{{ $services->ctitle6 }}">
            </div>

            {{-- وصف الكروت --}}
            <div class="form-group">
                <label for="cdsc1">وصف البطاقة 1</label>
                <input type="text" class="form-control" name="cdsc1" value="{{ $services->cdsc1 }}">
            </div>

            <div class="form-group">
                <label for="cdsc2">وصف البطاقة 2</label>
                <input type="text" class="form-control" name="cdsc2" value="{{ $services->cdsc2 }}">
            </div>

            <div class="form-group">
                <label for="cdsc3">وصف البطاقة 3</label>
                <input type="text" class="form-control" name="cdsc3" value="{{ $services->cdsc3 }}">
            </div>

            <div class="form-group">
                <label for="cdsc4">وصف البطاقة 4</label>
                <input type="text" class="form-control" name="cdsc4" value="{{ $services->cdsc4 }}">
            </div>

            <div class="form-group">
                <label for="cdsc5">وصف البطاقة 5</label>
                <input type="text" class="form-control" name="cdsc5" value="{{ $services->cdsc5 }}">
            </div>

            <div class="form-group">
                <label for="cdsc6">وصف البطاقة 6</label>
                <input type="text" class="form-control" name="cdsc6" value="{{ $services->cdsc6 }}">
            </div>

            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-success">تحديث البيانات</button>
            </div>
        </form>
    </div>
</div>

@endsection
