<div class="row">
    <div class="col-md-12">
        <form action="javascript:void(0)" method="POST" id="paypreform">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}"> Deposit option:</h5>
                    <select name="deposit_option" class="form-control bg-{{$bg}} text-{{$text}}">
                        <option value="{{$settings->deposit_option}}"> {{$settings->deposit_option}}(Current)</option>
                        <option value="manual">Manual</option>
                        <option  value="auto">Automatic</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}"> Withdrawal option:</h5>
                    <select name="withdrawal_option" class="form-control bg-{{$bg}} text-{{$text}}">
                        <option value="{{$settings->withdrawal_option}}">{{$settings->withdrawal_option}}(Current)</option>
                        <option value="manual">Manual</option>
                        <option  value="auto">Automatic</option>
                    </select>
                </div> 
                <div class="form-group col-md-6">
                    <button type="submit" class="px-4 btn btn-primary">Save</button>
                </div> 
            </div>
            
        </form>
    </div>
</div>