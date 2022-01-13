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
        <label>Water Type</label>
        <div class="search">
            <select title="All">
                <option value="All">All</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>

            </select>
            <a href="{{ URL::to('/admin/type/create')}}">ADD NEW WATER TYPE</a>
        </div>
        <table class="user-tabel brand-tabel">
            <thead>
                <tr>
                    <th>Minerals Name</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if($water_typeData)
                @foreach($water_typeData as $key =>$water_type)
                <tr>
                    <td>{{ $water_type->minerals}}</td>
                    <td class="edit-delete"><a href="{{ URL::to('/admin/type/edit')}}/{{ $water_type->id}}">
                            <img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">
                            Edit
                        </a>
                        <a href="{{ URL::to('/admin/type/delete')}}/{{ $water_type->id}}">
                            <img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">
                            Delete
                        </a>
                    </td>
                    <td>Active</td>
                </tr>
                @endforeach
                @endif
                <!-- <tr>
                    <td>Tap Water</td>
                    <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>RO Water</td>
                    <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                    <td>Active</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>
@endsection