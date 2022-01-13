@extends('layouts.adminlayout')
@section('content')
@php $volumeData = DB::table('volume')->get(); @endphp
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
            <a href="{{ URL::to('/admin/volume/create')}}">ADD NEW QUANTITY</a>
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
            @if($volumeData)
                @foreach($volumeData as $key =>$volume)
            <tr>
                <td>{{ $volume->quantity}}</td>
                <td class="edit-delete"><a href="{{ URL::to('/admin/volume/edit')}}/{{ $volume->id}}">
                    <img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a>
                    <a href="{{ URL::to('/admin/volume/delete')}}/{{ $volume->id}}">
                        <img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr>
            @endforeach
                @endif
            <!-- <tr>
                <td>500 ml</td>
                <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr>
            <tr>
                <td>750 ml</td>
                <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr>

            <tr>
                <td>1 Ltr</td>
                <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr>
            <tr>
                <td>2 Ltr</td>
                <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr>
            <tr>
                <td>5 Ltr</td>
                <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr>
            <tr>
                <td>10 Ltr</td>
                <td class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                <td>Active</td>
            </tr> -->
            </tbody>
        </table>
    </div>
</div>
@endsection