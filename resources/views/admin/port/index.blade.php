@extends('admin.admin_master')


@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card-group">
                    @foreach ($image as $img)
                        <div class="col-md-4 mt-5">
                            <div class="card">
                            {{-- <p>{{asset($img->id)}}</p> --}}
                            <img src="{{asset($img->image)}}" alt="">

                                <a href="{{route('multy.delete',[$img->id])}}" class="btn btn-danger">delete</a>


                            </div>
                        </div>
                    @endforeach
                </div>

            </div>


        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Multi image </div>

                <div class="card-body">
                <form action="{{route('store.images')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                         <div class="form-group">
                          <label for="exampleInputEmail1">القسم</label>
                          <select class="form-control form-control-solid" value="{{ old('category_id') }}" name="category_id" class="form-control">
                                            <option value="" selected disabled> {{ __('اختار القسم المناسبة') }}
                                            </option>
                                            @foreach ($Category as $Category_id)
                                                <option  value="{{$Category_id->id}}" {{ old('category_id') == $Category_id->id ? 'selected' : '' }}>{{ $Category_id->Category_name}}
                                                </option>
                                            @endforeach
                                        </select>
                          {{-- <input type="TEXT" class="form-control" name="category_id" id="exampleFormControlInput1" placeholder="email" > --}}
                            @error('category_id')
                        <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Multi image</label>
                          <input type="file" class="form-control" name="image[]" id="exampleInputEmail1" aria-describedby="emailHelp" multiple>
                            @error('image')
                        <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">ADD IMAGE</button>
                      </form>
                </div>

            </div>
        </div>

        </div>
    </div>


</div>

@endsection
