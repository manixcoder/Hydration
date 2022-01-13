@extends('layouts.adminlayout')
@section('content')
<div class="water-type">
    <form action="{{ URL::to('/admin/minerals/update')}}/{{ $mineralsData->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="page-name">
            <label>Edit Mineral</label>

            <!-- <div class="close">
                <a href="waterdrinks.html"><img src="{{ asset('public/assets/images/close.png')}}" alt="Close"></a>
            </div> -->
            <div class="clearFix">

            </div>
        </div>
        <div class="type">
            <input type="text" name="minerals_name" id="minerals_name" placeholder="Mineral Name">
            @error('minerals_name')
            <span class="form-control">{{ $errors->first('minerals_name') }}</span>
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