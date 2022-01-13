@extends('layouts.adminlayout')
@section('content')
@php $water_typeData = DB::table('water_type')->get(); @endphp
<div class="right-content">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="ti-user"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif
    <div class="page-name-label">
        <label>Water Drinks</label>
        <div class="search">
            <input type="search" name="search" placeholder="search" class="Form-Control">
            <a href="{{ URL::to('/admin/water/create')}}">ADD NEW WATER DRINK</a>
        </div>
    </div>
    <table class="user-tabel">
        <tr>
            <th>Brand/Water</th>
            <th>Type</th>
            <th>Bottled Water</th>
            <th>Minerals</th>
            <th>QR Code</th>
            <th>Action</th>
            <th>Status</th>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Aquafina</td>
            <td>Bottled Water</td>
            <td>500 ml</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Aquafina</td>
            <td>Bottled Water</td>
            <td>1 Ltr</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Aquafina</td>
            <td>Bottled Water</td>
            <td>5 Ltr</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Aquafina</td>
            <td>Bottled Water</td>
            <td>20 Ltr</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Dasani</td>
            <td>Bottled Water</td>
            <td>500ml</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Dasani</td>
            <td>Bottled Water</td>
            <td>1 Ltr</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Tap Water</td>
            <td>Tap Water</td>
            <td>500 ml</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">RO Water</td>
            <td>RO Water</td>
            <td>500 ml</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Deactive</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">RO Water</td>
            <td>RO Water</td>
            <td>1 Ltr</td>
            <td>Mineral Name 1 - unit, Mineral Name 2 - unit, Mineral Name 3 - unit.</td>
            <td><img src="{{ asset('public/assets/images/QR_code.png')}}" alt="scan code" class="scancode"></td>
            <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
            <td>Deactive</td>
        </tr>

    </table>
</div>
@endsection