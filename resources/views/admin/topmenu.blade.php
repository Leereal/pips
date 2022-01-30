<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";
}

?>
<div class="main-header">
    <!-- Logo Header -->
<div class="logo-header" data-background-color="{{$bgmenu}}">
        <a href="/" class="logo" style="font-size: 27px; color:#fff;">
            {{$settings->site_name}}
        </a>
    <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu "></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical "></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu "></i>
            </button>
        </div>
        
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="{{$bgmenu}}">
        
        <div class="container-fluid">
            <div class="collapse" id="search-nav">
                {{-- <form class="navbar-left navbar-form nav-search mr-md-3" id="searchform" action="javascript:void(0)" method="POST">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="submit" class="pr-1 btn btn-search">
                                <i class="fa fa-search search-icon"></i>
                            </button>
                        </div>
                        <input type="text" placeholder="Search user by name or email" class="form-control text-{{$text}} bg-{{$bg}}">
                    </div>
                </form> --}}
                <script>
                    document.getElementById('searchform').addEventListener('subit' searchuser);
                   function searchuser(){
                       console.log('ddj');
                       let url = "{{route('manageusers')}}";
                       window.location.href = url;
                   }
               </script>
            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li>
                    <form action="javascript:void(0)" method="post" id="styleform">
                        <div class="form-group">
                            <label class="style_switch">
                                <input name="style" id="style" type="checkbox" value="true" class="modes">
                                <span class="slider round"></span>
                            </label>
                        </div> 
                        @if(Auth('admin')->User()->dashboard_style =='dark')
                        <script>document.getElementById("style").checked= true;</script>
                         @endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                    
                </li>
                @if($settings->google_translate =='on')
                <li class="nav-item dropdown hidden-caret">
                    <div id="google_translate_element"></div>
                </li>
                @endif
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="text-white fas fa-user"></i>
                    </a>
                   
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <a class="dropdown-item" href="{{ url('admin/dashboard/adminprofile') }}">Account Settings</a>
                                <a class="dropdown-item" href="{{ url('admin/dashboard/adminchangepassword') }}">Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('adminlogout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logoutform').submit();">
                                Logout
                                </a>
                                <form id="logoutform" action="{{ route('adminlogout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>


<script type="text/javascript">
    //create investment
        $("#styleform").on('change',function(){
        $.ajax({
            url: "{{url('admin/dashboard/changestyle')}}",
            type: 'POST',
            data:$("#styleform").serialize(),
            success: function (data) {
				location.reload(true);
            },
            error: function (data) {
                console.log('Something went wrong');
            },

        });
    });
    
</script>
