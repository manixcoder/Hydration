@extends('layouts.adminlayout')
@section('content')
<?php
//dd($brandData);
?>
<div class="addbrand">
    <form action="{{ URL::to('/admin/brand/update')}}/{{ $brandData->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="brand_id" value="{{$brandData->id}}">
        <div class="page-label">
            <label>Edit Brand</label>

            <div class="clearFix">
            </div>
        </div>
        <div class="uplode-image">
            <a href="#">
                <div>
                    @if($brandData->brands_image !='')
                    <input type="file" name="brands_image" id="brands_image">
                   
                    <img src="{{ asset('public/uploads')}}/{{ $brandData->brands_image }}" alt="close" style="height:100px;width:100px; border-radius: 85px;">
                    @else
                    <input type="file" name="brands_image" id="brands_image">
                   
                    @endif
                    @error('brands_image')
                    <span class="form-control">{{ $errors->first('brands_image') }}</span>
                    @enderror
                    <!-- <img src="{{ asset('public/assets/images/A-uafine.png')}}" alt="uplode image"> -->

                </div>
                <label>Change Image (Optional)</label>
            </a>
        </div>
        <div class="brand-name">
            <input type="text" value="{{ $brandData->brand_name }}" name='brand_name' placeholder="Brand/Water">
            @error('brand_name')
            <span class="form-control">{{ $errors->first('brand_name') }}</span>
            @enderror
        </div>
        <div class="brand-Add">
            <button type="submit">
                UPDATE
            </button>
        </div>
    </form>
</div>
@endsection