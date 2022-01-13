@extends('layouts.adminlayout')
@section('content')
@php $mineralsData = DB::table('minerals')->get(); @endphp
<div class="right-content">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="ti-user"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif
    <div class="page-name-label">
        <label>Minerals</label>
        <div class="search">
            <select title="All">
                <option value="All">All</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>

            </select>
            <a href="{{ URL::to('/admin/minerals/create')}}">ADD NEW MINERAL</a>
        </div>
        <table class="user-tabel brand-tabel">
            <thead>
                <tr>
                    <th>Liters</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if($mineralsData)
                @foreach($mineralsData as $key =>$minerals)
                <tr>
                    <td>{{ $minerals->minerals_name}}</td>
                    <td class="edit-delete"><a href="{{ URL::to('/admin/minerals/edit')}}/{{ $minerals->id}}">
                            <img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a>
                        <a href="{{ URL::to('/admin/minerals/delete')}}/{{ $minerals->id}}">
                            <img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a>
                    </td>
                    <td>Active</td>
                </tr>
                @endforeach
                @endif
                <!-- <tr>
                <td>Water Mineral Name 2</td>
                <td  class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr>
            <tr>
                <td>Water Mineral Name 3</td>
                <td  class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr>

            <tr>
                <td>Water Mineral Name 4</td>
                <td  class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr> -->
            </tbody>
        </table>
    </div>
</div>
@endsection