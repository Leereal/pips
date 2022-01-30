<div class="row">
    <div class="col-md-12">
        <form action="javascript:void(0)" method="POST" id="gatewayform">
            @csrf
            @method('PUT')
            <h4 class="text-primary"> <i class="fa fab-stripe"></i> Stripe:</h4>
            <div class="form-group">
                <h5 class="text-{{$text}}">Stripe secret key</h5>
                <input type="text" name="s_s_k" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->s_s_k}}">
            </div>
            <div class="form-group">
                <h5 class="text-{{$text}}">Stripe publishable key</h5>
                <input type="text" name="s_p_k" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->s_p_k}}">
            </div>
            <hr>
            <h4 class="text-primary"><i class="fa fab-paypal"></i> Paypal:</h4>
            <div class="form-group">
                <h4 class="text-{{$text}}">Paypal client ID</h4>
                <input type="text" name="pp_ci" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->pp_ci}}">
            </div>
            <div class="form-group">
                <h4 class="text-{{$text}}">Paypal client secret</h4>
                <input type="text" name="pp_cs" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" value="{{$settings->pp_cs}}">
            </div>
            <hr>
            <h4 class="text-primary"><i class="fa fab-paypal"></i> Paystack:</h4>
            <div class="form-group">
                <h4 class="text-{{$text}}">Paystack Public Key</h4>
                <input type="text" name="paystack_public_key" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$paystack->paystack_public_key}}">
            </div>
            <div class="form-group">
                <h4 class="text-{{$text}}">Paystack Secret Key</h4>
                <input type="text" name="paystack_secret_key" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$paystack->paystack_secret_key}}">
            </div>
            <div class="form-group">
                <h4 class="text-{{$text}}">Paystack URL</h4>
                <input type="text" name="paystack_url" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$paystack->paystack_url}}">
            </div>
            <div class="form-group">
                <h4 class="text-{{$text}}">Paystack Email</h4>
                <input type="text" name="paystack_email" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$paystack->paystack_email}}">
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="px-4 btn btn-primary">Save Settings</button>
            </div> 
        </form>
    </div>
</div>