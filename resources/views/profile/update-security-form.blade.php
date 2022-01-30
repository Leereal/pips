<form method="POST" action="javascript:void(0)" id="updateemailpref">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="mb-3 col-md-6">
            <h5 class="text-{{$text}}">Send confirmation OTP to my email when withdrawing my funds.</h5>
            <div class="selectgroup">
                <label class="selectgroup-item">
                    <input type="radio" name="otpsend" id="otpsendYes" value="Yes" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Yes</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="otpsend" id="otpsendNo" value="No" class="selectgroup-input">
                    <span class="selectgroup-button">No</span>
                </label>
            </div>
        </div>
        {{-- <div class="mb-3 col-md-6">
            <h5 class="text-{{$text}}">Send me promotional emails.</h5>
            <div class="selectgroup">
                <label class="selectgroup-item">
                    <input type="radio" name="promotoionl" id="promotoionlYes" value="Yes" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Yes</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="promotoionl" id="promotoionlNo" value="No" class="selectgroup-input">
                    <span class="selectgroup-button">No</span>
                </label>
            </div>
        </div> --}}
        <div class="mb-3 col-md-6">
            <h5 class="text-{{$text}}">Send me email when i get profit.</h5>
            <div class="selectgroup">
                <label class="selectgroup-item">
                    <input type="radio" name="roiemail" id="roiemailYes" value="Yes" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Yes</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="roiemail" id="roiemailNo" value="No" class="selectgroup-input">
                    <span class="selectgroup-button">No</span>
                </label>
            </div>
        </div>
        <div class="mb-3 col-md-6">
            <h5 class="text-{{$text}}">Send me email when my investment plan expires.</h5>
            <div class="selectgroup">
                <label class="selectgroup-item">
                    <input type="radio" name="invplanemail" id="invplanemailYes" value="Yes" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Yes</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="invplanemail" id="invplanemailNo" value="No" class="selectgroup-input">
                    <span class="selectgroup-button">No</span>
                </label>
            </div>
        </div>
        <div class="mt-2 col-12">
            <button type="submit" class="px-5 btn btn-primary">Save</button>
        </div>
    </div>
    
</form>


{{-- This js check is for OTP email --}}
@if (Auth::user()->sendotpemail == "Yes")
    <script>
        document.getElementById('otpsendYes').checked = true;
    </script>    
@else
<script>
    document.getElementById('otpsendNo').checked = true;
</script> 
@endif

{{-- This js check is for Promotional emails --}}
{{-- @if (Auth::user()->sendpromoemail == "Yes")
    <script>
        document.getElementById('promotoionlYes').checked = true;
    </script>    
@else
<script>
    document.getElementById('promotoionlNo').checked = true;
</script> 
@endif --}}

{{-- This js check is for ROI emails --}}
@if (Auth::user()->sendroiemail == "Yes")
    <script>
        document.getElementById('roiemailYes').checked = true;
    </script>    
@else
<script>
    document.getElementById('roiemailNo').checked = true;
</script> 
@endif

{{-- This js check is for Investmeplan expiration emails --}}
@if (Auth::user()->sendinvplanemail == "Yes")
    <script>
        document.getElementById('invplanemailYes').checked = true;
    </script>    
@else
<script>
    document.getElementById('invplanemailNo').checked = true;
</script> 
@endif



<script>
    
    $('#updateemailpref').on('submit', function() {
       // alert('love');
        $.ajax({
            url: "{{route('updateemail')}}",
            type: 'POST',
            data: $('#updateemailpref').serialize(),
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