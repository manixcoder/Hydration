@extends('layouts.adminlayout')
@section('content')

<div class="water-type">
    <form action="{{ URL::to('/admin/type/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="page-name">
            <label>Add New Mineral</label>

            <!-- <div class="close">
            <a href="{{ asset('public/assets/waterdrinks.html')}}"><img src="{{ asset('public/assets/images/close.png')}}" alt="Close"></a>
        </div> -->
            <div class="clearFix">

            </div>
        </div>
        <div class="type">

            <input type="text" name="minerals" id="minerals" placeholder="Mineral Name">
            @error('minerals')
            <span class="form-control">{{ $errors->first('minerals') }}</span>
            @enderror
        </div>
        <div class="brand-Add">
            <button type="submit">
                ADD
            </button>
        </div>
    </form>
</div>

@endsection