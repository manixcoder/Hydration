@extends('layouts.adminlayout')
@section('content')
@php $usersData = DB::table('users')->where('user_role','!=',1)->get(); @endphp
<div class="right-content">
@if(Session::has('status'))
                <div class="alert alert-{{ Session::get('status') }}">
                    <i class="ti-user"></i> {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
                @endif
    <div class="page-name-label">
        <label>Users</label>
        <div class="search">
            <input type="search" name="search" placeholder="search" class="Form-Control">
        </div>
    </div>
    <table class="user-tabel">
        <thead>
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Date of Regiteration</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @if($usersData)
            @foreach($usersData as $key =>$users)
        <tr>
            <td><img src="{{ URL::to('/public/uploads')}}/{{ Auth::user()->profile_image }}" alt="profilepic" style="height:100px;width:100px; border-radius: 85px;">{{$users->name }}</td>
            <td>{{$users->email }}</td>
            <td>{{$users->gender }}</td>
            <td>{{$users->age }}</td>
            <td>{{$users->height }}</td>
            <td>{{$users->weight }}</td>
            <td>{{$users->created_at }}</td>
            <td>{{$users->status }}</td>
        </tr>
        @endforeach
                @endif
        <!-- <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Maureen Biologist</td>
            <td>Maureenbiologist@dummyemail.com</td>
            <td>Male</td>
            <td>25</td>
            <td>160 cm</td>
            <td>72 kg</td>
            <td>10 Aug 2021</td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Lois Di Nominator</td>
            <td>LoisDiNominator@dummyemail.com</td>
            <td>Female</td>
            <td>35</td>
            <td>155 cm</td>
            <td>60 kg</td>
            <td>10 Aug 2021</td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Isabelle Ringing</td>
            <td>Isabelleringing@dummyemail.com</td>
            <td>Male</td>
            <td>30</td>
            <td>180 cm</td>
            <td>82 kg</td>
            <td>9 Aug 2021</td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Eileen Sideways</td>
            <td>Eileensideways@dummyemail.com</td>
            <td>Male</td>
            <td>38</td>
            <td>175 cm</td>
            <td>79 kg</td>
            <td>9 Aug 2021</td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Rita Book</td>
            <td>Ritabook@dummyemail.com</td>
            <td>Male</td>
            <td>35</td>
            <td>162 cm</td>
            <td>65 kg</td>
            <td>8 Aug 2021</td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Roy L. Commishun</td>
            <td>RoyLCommishun@dummyemail.com</td>
            <td>Male</td>
            <td>30</td>
            <td>160 cm</td>
            <td>65 kg</td>
            <td>8 Aug 2021</td>
            <td>Active</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Rod Knee</td>
            <td>RodKnee@dummyemail.com</td>
            <td>Male</td>
            <td>27</td>
            <td>155 cm</td>
            <td>60 kg</td>
            <td>7 Aug 2021</td>
            <td>Deactive</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Bridget Theriveaquai</td>
            <td>BridgetTheriveaquai@dummyemail.com</td>
            <td>Female</td>
            <td>25</td>
            <td>150 cm</td>
            <td>55 kg</td>
            <td>6 Aug 2021</td>
            <td>Deactive</td>
        </tr>
        <tr>
            <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Gene Eva Convenshun</td>
            <td>Geneevaconvenshun@dummyemail.com</td>
            <td>Male</td>
            <td>22</td>
            <td>162 cm</td>
            <td>63 kg</td>
            <td>6 Aug 2021</td>
            <td>Active</td>
        </tr> -->
        </tbody>
    </table>
</div>
@endsection