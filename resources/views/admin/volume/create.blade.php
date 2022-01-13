@extends('layouts.adminlayout')
@section('content')

<div class="water-type">
    <form action="{{ URL::to('/admin/volume/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="page-name">
            <label>Add New Quantity</label>
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
                ADD
            </button>
        </div>
    </form>
</div>
@endsection