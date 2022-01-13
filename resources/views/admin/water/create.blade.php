@extends('layouts.adminlayout')
@section('content')
@php 
$brandsData = DB::table('brands')->get(); 
$water_typeData = DB::table('water_type')->get(); 
$mineralsData = DB::table('minerals')->get(); 
@endphp
<div class="form-drink">
    <form action="{{ URL::to('/admin/water/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="page-name">
            <label>Add New Water Drink</label>

            <!-- <div class="close">
                <a href="{{ asset('public/assets/waterdrinks.html')}}"><img src="{{ asset('public/assets/images/close.png')}}" alt="Close"></a>
            </div> -->
            <div class="clearFix">

            </div>
        </div>

        <div class="addwater brand">
            <select name="brand_id" id="brand_id" title="Select Brand">
                <option value="">Select Brand</option>
                @if($brandsData)
                @foreach($brandsData as $key =>$brands)
                <option value="{{$brands->id}}">{{$brands->brand_name}}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="addwater Type">
            <!-- Single button -->
            <select title="Type" name="type_id" id="type_id">
            @if($water_typeData)
                @foreach($water_typeData as $key =>$water_type)
                <option value="{{$water_type->id}}">{{$water_type->minerals}}</option>
                @endforeach
                @endif
            </select>

        </div>
        <div class="addwater Quantity">
            <!-- Single button -->
            <select title="Water Quantity per bottle/glass" name="" id="">
            @if($mineralsData)
                @foreach($mineralsData as $key =>$minerals)
                <option value="kjhkj">Water Quantity per bottle/glass</option>
                @endforeach
                @endif
            </select>
         

        </div> 

        <div class="clearFix">

        </div>
        <div class="Minerals">
            <div class="minerals-label">
                <label>Minerals</label>
            </div>
            <div class="addwater Select-Mineral-1">
                <select title="Select-Mineral">
                    <option value="Select Mineral">Select Mineral</option>
                </select>
            </div>
            <div class="addwater Unit-1">
                <select title="Unit">
                    <option value="Unit">Unit</option>
                </select>
            </div>
            <div class="addwater Select-Mineral">
                <select title="Select Mineral">
                    <option value="Select Mineral">Select Mineral</option>
                </select>
            </div>
            <div class="addwater Unit">
                <select title="Unit">
                    <option value="Unit">Unit</option>
                </select>
            </div>
            <div class="clearFix">

            </div>
        </div>

        <div class="aadnewmineral">
            <a href="#"><img src="{{ asset('public/assets/images/add.png')}}" alt="addmineral">Add New Mineral</a>
        </div>
        <div class="add-drink">
            <button type="submit">
                ADD DRINK
            </button>

        </div>
    </form>
</div>
@endsection