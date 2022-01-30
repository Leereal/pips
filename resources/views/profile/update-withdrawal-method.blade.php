<form method="post" action="javascript:void(0)" id="updatewithdrawalinfo">
    @csrf
    @method('PUT')
    <fieldset>
        <legend>Bank Account</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <h5 class="text-{{$text}}">Bank Name</h5>
                <input type="text" name="bank_name" value="{{Auth::user()->bank_name}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter bank name">
            </div>
            <div class="form-group col-md-6">
                <h5 class="text-{{$text}}">Account Name</h5>
                <input type="text" name="account_name" value="{{Auth::user()->account_name}}"  class="form-control  text-{{$text}} bg-{{$bg}}" placeholder="Enter Account name">
            </div>
            <div class="form-group col-md-6">
                <h5 class="text-{{$text}}">Account Number</h5>
                <input type="text" name="account_no" value="{{Auth::user()->account_number}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Account Number">
            </div>
            <div class="form-group col-md-6">
                <h5 class="text-{{$text}}">Swift Code</h5>
                <input type="text" name="swiftcode" value="{{Auth::user()->swift_code}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Swift Code">
            </div>
        </div>
    </fieldset>
    <fieldset class="mt-2">
        <legend>Cryptocurrency</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <h5 class="text-{{$text}}">Bitcoin</h5>
                <input type="text" name="btc_address" value="{{Auth::user()->btc_address}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Bitcoin Address">
                <small class="text-{{$text}}">Enter your Bitcoin Address that will be used to withdraw your funds</small>
            </div>
            <div class="form-group col-md-6">
                <h5 class="text-{{$text}}">Ethereum</h5>
                <input type="text" name="eth_address" value="{{Auth::user()->eth_address}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Etherium Address">
                <small class="text-{{$text}}">Enter your Ethereum Address that will be used to withdraw your funds</small>
            </div>
            <div class="form-group col-md-6">
                <h5 class="text-{{$text}} bg-{{$bg}}">Litecoin</h5>
                <input type="text" name="ltc_address" value="{{Auth::user()->ltc_address}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Litcoin Address">
                <small class="text-{{$text}}">Enter your Litecoin Address that will be used to withdraw your funds</small>
            </div>
        </div>
    </fieldset>
    <button type="submit" class="px-5 btn btn-primary">Save</button>
</form>


<script>
    
    $('#updatewithdrawalinfo').on('submit', function() {
       // alert('love');
        $.ajax({
            url: "{{route('updateacount')}}",
            type: 'POST',
            data: $('#updatewithdrawalinfo').serialize(),
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