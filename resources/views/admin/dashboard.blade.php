@extends('layouts.adminlayout')
@section('content')
<div class="right-content">
    <div class="page-name-label">
        <label>Dashboard</label>
    </div>
    <div class="linbtn">
        <div class="btnm liner">
            <a href="#" class="buttonlabel">
                <div class="tab-img">
                    <img src="{{ asset('public/assets/images/new_user.png')}}" alt="alluser">
                </div>
                @php $user = DB::table('users')->where('user_role','!=', '1')->count(); @endphp
                <div class="value">
                    <label>{{ $user }}</label><br><span class="totaluser">Total User</span>
                </div>
            </a>
        </div>
        <div class="btnm liner-2">
            <a href="#" class="buttonlabel">
                <div class="tab-img">
                    <img src="{{ asset('public/assets/images/brands.png')}}" alt="Brands">
                </div>
                @php $brands = DB::table('brands')->count(); @endphp
                <div class="value">
                    <label>{{ $brands }}</label><br><span class="totaluser">Brands</span>
                </div>
            </a>
        </div>
        <div class="btnm liner-3">
            <a href="#" class="buttonlabel">
                <div class="tab-img">
                    <img src="{{ asset('public/assets/images/minerals.png')}}" alt="Minerals">
                </div>
                @php $minerals = DB::table('minerals')->count(); @endphp
                <div class="value">
                    <label>{{$minerals}}</label><br><span class="totaluser">Minerals</span>
                </div>
            </a>
        </div>
        <div class="btnm liner-4">
            <a href="#" class="buttonlabel">
                <div class="tab-img">
                    <img src="{{ asset('public/assets/images/liter_qty.png')}}" alt="Liter Quantity">
                </div>
                <!-- @php $minerals = DB::table('minerals')->count(); @endphp -->
                <div class="value">
                    <label>12</label><br><span class="totaluser">Liter Quantity</span>
                </div>
            </a>
        </div>
    </div>
    <div class="clearFix">

    </div>
</div>
@endsection