<form method="POST" action="javascript:void(0)" id="updateprofileform">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <h5 class="text-{{$text}}">Fullname</h5>
            <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" value="{{Auth::user()->name}}" name="name">
        </div>
        <div class="form-group col-md-6">
            <h5 class="text-{{$text}}">Email Address</h5>
            <input type="email" class="form-control bg-{{$bg}} text-{{$text}}" value="{{Auth::user()->email}}" name="email" readonly>
        </div>
        <div class="form-group col-md-6">
            <h5 class="text-{{$text}}">Phone Number</h5>
            <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" value="{{Auth::user()->phone}}" name="phone">
        </div>
        <div class="form-group col-md-6">
            <h5 class="text-{{$text}}">Date of Birth</h5>
            <input type="date" value="{{Auth::user()->dob}}" class="form-control bg-{{$bg}} text-{{$text}}"  name="dob">
        </div>
        <div class="form-group col-md-6">
            <h5 class="text-{{$text}}">Nationality</h5>
            <textarea class="form-control bg-{{$bg}} text-{{$text}}" placeholder="Full Address" name="address" row="3">{{ Auth::user()->address }}</textarea>
        </div>
        
    </div>
    <button type="submit" class="btn btn-primary">Update Profile</button>
</form>

<script>
    
$('#updateprofileform').on('submit', function() {
    //alert('love');
    $.ajax({
        url: "{{route('profile.update')}}",
        type: 'POST',
        data: $('#updateprofileform').serialize(),
        success: function(response) {
            if (response.status === 200) {
                $.notify({
                    // options
                    icon: 'flaticon-alarm-1',
	                title: 'Success',
                    message: response.success,
                },{
                    // settings
                    type: 'success',
                    allow_dismiss: true,
	                newest_on_top: false,
	                showProgressbar: true,
                    placement: {
                        from: "top",
                        align: "right"
                    },
                    offset: 20,
                    spacing: 10,
                    z_index: 1031,
                    delay: 5000,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: null,
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },

                });
            } else {
               
            }
        },
        error: function(data) {
            console.log(data);
        },

    });
});
</script>