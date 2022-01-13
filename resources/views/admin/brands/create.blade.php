@extends('layouts.adminlayout')
@section('content')
<div class="right-content">
    <div class="page-name-label">
        <div class="addbrand">
            <form action="{{ URL::to('/admin/brand/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="page-label">
                    <label>Add New Brand/Water</label>

                    <div class="clearFix">
                    </div>
                </div>
                <div class="uplode-image">
                    <a>
                        <label>Upload Image (Optional)</label>
                        <div>
                            <input type="file" name="brands_image" id="brands_image" accept="image/gif, image/jpeg, image/png" require>
                            @error('brands_image')
                            <span class="form-control">{{ $errors->first('brands_image') }}</span>
                            @enderror
                            <img src="{{ asset('public/assets/images/uplode-image.png')}}" alt="uplode image">
                        </div>

                    </a>
                </div>
                <div class="brand-name">
                    <input type="text" name='brand_name' placeholder="Brand Name" require>
                    @error('brand_name')
                    <span class="form-control">{{ $errors->first('brand_name') }}</span>
                    @enderror
                </div>
                <div class="brand-Add">
                    <button type="submit">
                        ADD
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection