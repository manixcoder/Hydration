@extends('layouts.adminlayout')
@section('content')

<div class="right-content">
    <div class="page-name-label">
        <div class="labelpageloc">
            <label>Dashboard > My Account</label>
        </div>
        <div class="page-name-label">
            <label>My Account</label>
        </div>
        <div class="profile-details">
            <div class="profile-pic">
                <a href="{{ URL::to('/admin/my-account')}}">
                    @if(Auth::user()->profile_image !='')
                    <img src="{{ URL::to('/public/uploads')}}/{{ Auth::user()->profile_image }}" alt="profile-img" style="height:100px;width:100px; border-radius: 85px;">
                    @else
                    <img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profile-img" style="height:100px;width:100px; border-radius: 85px;">
                    @endif
                </a>
            </div>
            <div class="profile-name">
                <label>{{Auth::user()->name}}</label>
            </div>
            <div class="profile-email">
                <img src="{{ asset('public/assets/images/email.png')}}" alt="email">
                <label>{{Auth::user()->email}}</label>
            </div>
        </div>
        <div class="Update-Password profile-details">
            <form action="{{ URL::to('/admin/update-account')}}" method="post" enctype="multipart/form-data" id="signup-form">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="password-label">
                    <label>Update Password</label>
                </div>
                <div class="Current-Password-label">
                    <input type="password" name="current_password" placeholder="Current Password" required>
                </div>
                <div class="new-Password-label">
                    <input type="password" name="password" id="password_reg" placeholder="New Password" required>
                    <span class="glyphicon form-control-feedback" id="password_reg1">
                        <input type="password" name="confirmed" id="confirmPassword" placeholder="Confirm New Password" required>
                        <span class="glyphicon form-control-feedback" id="confirmPassword1">
                            <div class="clearFix">

                            </div>
                </div>
                <div class="save-btn">
                    <button type="submit" onclick="return Validate()">
                        Save
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    var value = $("#password_reg").val();

    $.validator.addMethod("checklower", function(value) {
        return /[a-z]/.test(value);
    });
    $.validator.addMethod("checkupper", function(value) {
        return /[A-Z]/.test(value);
    });
    $.validator.addMethod("checkdigit", function(value) {
        return /[0-9]/.test(value);
    });
    $.validator.addMethod("pwcheck", function(value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
    });

    $('#signup-form').validate({
        rules: {
            password: {
                minlength: 6,
                maxlength: 30,
                required: true,
                pwcheck: true,
                checklower: true,
                checkupper: true,
                checkdigit: true
            },
            confirmPassword: {
                equalTo: "#password_reg",
            },
        },
        messages: {
            password: {
                pwcheck: "Password is not strong enough",
                checklower: "Need atleast 1 lowercase alphabet",
                checkupper: "Need atleast 1 uppercase alphabet",
                checkdigit: "Need atleast 1 digit"
            }
        },
        highlight: function(element) {
            var id_attr = "#" + $(element).attr("id") + "1";
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');
            $('.form-group').css('margin-bottom', '5px');
            $('.form').css('padding', '30px 40px');
            $('.tab-group').css('margin', '0 0 25px 0');
            $('.help-block').css('display', '');
        },
        unhighlight: function(element) {
            var id_attr = "#" + $(element).attr("id") + "1";
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');
            $('#confirmPassword').attr('disabled', false);
        },
        errorElement: 'span',
        errorClass: 'validate_cus',
        errorPlacement: function(error, element) {
            x = element.length;
            if (element.length) {
                error.insertAfter(element);
            } else {
                error.insertAfter(element);
            }
        }

    });
</script>

@endsection