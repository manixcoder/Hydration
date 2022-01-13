@extends('layouts.adminlayout')
@section('content')
<div class="water-type">
    <form action="{{ URL::to('/admin/volume/update')}}/{{ $volumeData->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="page-name">
            <label>Edit Quantity</label>

            <div class="close">
                <a href="waterdrinks.html"><img src="{{ asset('public/assets/images/close.png')}}" alt="Close"></a>
            </div>
            <div class="clearFix">

            </div>
        </div>
        <div class="type">
            <input type="text" name="quantity" id="quantity" placeholder="Quantity">
            @error('quantity')
            <span class="form-control">{{ $errors->first('quantity') }}</span>
            @enderror
        </div>
        <div class="add-drink water-type-btn">
            <button type="submit">
                UPDATE
            </button>
        </div>
    </form>
</div>
@endsection