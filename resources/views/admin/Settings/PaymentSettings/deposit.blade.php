<div class="relative row" x-data="{ open: false }">
    <div class="col-md-12">
        <div>
            <h3 class="d-inline text-{{$text}}">Payment Methods</h3>
            <a href="#" data-toggle="modal" data-target="#adduser" class="float-right btn btn-primary btn-sm"> <i class='fas fa-plus-circle'></i> Add New</a>
            <!-- Modal -->
            <div class="modal fade" id="adduser" tabindex="-1" aria-h6ledby="exampleModalh6" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-{{$bg}}">
                            <h3 class="mb-2 d-inline text-{{$text}}">Add New payment Method</h3>
                            <button type="button" class="close text-{{$text}}" data-dismiss="modal" aria-h6="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body bg-{{$bg}}">
                            <div>
                                <form method="POST" action="{{route('addpaymethod')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <h6 class="text-{{$text}}">Name</h6>
                                            <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="name" id="name" placeholder="Payment method name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6 class="text-{{$text}}">Minimum Amount</h6>
                                            <input type="number" class="form-control bg-{{$bg}} text-{{$text}}" name="minimum" id="minamount" required>
                                            <small class="text-{{$text}}">Required but only applies to withdrawal</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6 class="text-{{$text}}">Maximum Amount</h6>
                                            <input type="number" class="form-control bg-{{$bg}} text-{{$text}}" name="maximum" id="maxamount" required>
                                            <small class="text-{{$text}}">Required but only applies to withdrawal</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6 class="text-{{$text}}">Charges</h6>
                                            <input type="number" class="form-control bg-{{$bg}} text-{{$text}}" name="charges" id="charges" required>
                                            <small class="text-{{$text}}">Required but only applies to withdrawal</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6 class="text-{{$text}}">Charges Type</h6>
                                            <select name="chargetype" class="form-control bg-{{$bg}} text-{{$text}}">
                                                <option value="percentage">Percentage(%)</option>
                                                <option value="fixed">Fixed({{$settings->currency}})</option>
                                            </select>
                                            <small class="text-{{$text}}">Required but only applies to withdrawal</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6 class="text-{{$text}}">Type</h6>
                                            <select name="methodtype" id="methodtype" class="form-control bg-{{$bg}} text-{{$text}}" required>
                                                <option value="currency">Currency</option>
                                                <option value="crypto">Crypto</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6 class="text-{{$text}}">Image url (Logo)</h6>
                                            <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="url" id="url">
                                        </div>
                                        {{-- Currency inputs --}}
                                        <div class="form-group col-md-6 currency">
                                            <h6 class="text-{{$text}}">Bank Name</h6>
                                            <input type="text" class="form-control bg-{{$bg}} text-{{$text}} currinput" name="bank" id="bank">
                                        </div>
                                        <div class="form-group col-md-6 currency">
                                            <h6 class="text-{{$text}}">Account Name</h6>
                                            <input type="text" class="form-control bg-{{$bg}} text-{{$text}} currinput" name="account_name" id="acnt_name">
                                        </div>
                                        <div class="form-group col-md-6 currency">
                                            <h6 class="text-{{$text}}">Account Number</h6>
                                            <input type="number" class="form-control bg-{{$bg}} text-{{$text}} currinput" name="account_number" id="acnt_number">
                                        </div>
                                        <div class="form-group col-md-6 currency">
                                            <h6 class="text-{{$text}}">Swift/Other Code</h6>
                                            <input type="number" class="form-control bg-{{$bg}} text-{{$text}} currinput" name="swift" id="swift">
                                        </div>

                                        {{-- Cryptocurrency Inputs --}}
                                        <div class="form-group col-md-6 d-none crypto">
                                            <h6 class="text-{{$text}}">Wallet Address</h6>
                                            <input type="text" class="form-control bg-{{$bg}} text-{{$text}} cryptoinput" name="walletaddress" id="walletaddress">
                                        </div>
                                        <div class="form-group col-md-6 d-none crypto">
                                            <h6 class="text-{{$text}}">Barcode Image (Optional)</h6>
                                            <input type="file" name="barcode" id=""  class="form-control bg-{{$bg}} text-{{$text}} cryptoinput">
                                            <small class="text-{{$text}}">Recommended Size: 575px both width and height </small>
                                            {{-- <input type="text" class="form-control bg-{{$bg}} text-{{$text}} cryptoinput" name="barcode" id="barcode"> --}}
                                        </div>
                                        <div class="form-group col-md-6 d-none crypto">
                                            <h6 class="text-{{$text}}">Wallet Address Network Type</h6>
                                            <input type="text" placeholder="eg ERC" class="form-control bg-{{$bg}} text-{{$text}} cryptoinput" name="wallettype" id="wallettype">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6 class="text-{{$text}}">Status</h6>
                                            <select name="status" id="status" class="form-control bg-{{$bg}} text-{{$text}}" required>
                                                <option value="enabled">Enable</option>
                                                <option value="disabled">Disable</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6 class="text-{{$text}}">Type for</h6>
                                            <select name="typefor" id="status" class="form-control bg-{{$bg}} text-{{$text}}" required>
                                                <option value="withdrawal">Withdrawal</option>
                                                <option value="deposit">Deposit</option>
                                                <option value="both">Both</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <h6 class="text-{{$text}}">Optional Note</h6>
                                            <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="note" placeholder="Payment may take up to 24 hours">
                                        </div>
                                        <div class="form-group col-md-12">
                                             <button type="submit" class="px-4 btn btn-primary">Save Method</button>
                                        </div>
                                    </div>
                                   
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 col-md-12 bg-{{$bg}} text-{{$text}} absolute">
        <div class=" table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Method Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Used for</th>
                        <th scope="col">Status</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($methods as $method)
                        <tr>
                            <th>{{$method->name}}</th>
                            <td>{{$method->methodtype}}</td>
                            <td>{{$method->type}}</td>
                            <td>
                                @if ($method->status == "enabled")
                                   <span class=" badge badge-success">{{$method->status}}</span> 
                                @else
                                <span class=" badge badge-danger">{{$method->status}}</span> 
                                @endif
                            </td>
                            <td>
                                <a href="{{route('editpaymethod', $method->id)}}" class="m-1 btn btn-primary btn-sm" title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                                @if ($method->name == "Bitcoin" or $method->name == "Ethereum" or $method->name == "Litecoin" or $method->name == "Stripe" or $method->name == "Paystack" or $method->name == "Paypal" or $method->name == "Bank Transfer")
                                    <button class=" btn btn-danger btn-sm" disabled data-toggle="tooltip" data-placement="top" title="you cannot delete default method">Delete</button> 
                                @else
                                <a href="{{route('deletepaymethod', $method->id)}}" class="m-1 btn btn-danger btn-sm">Delete</a> 
                                @endif
                                
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
    <div class="absolute top-0 w-10 bg-light">
        
    </div>
</div>

<script>
    let methodtype = document.getElementById('methodtype');
    let currtype = document.querySelectorAll('.currency');
    let currinput = document.querySelectorAll('.currinput');
    let cryptotype = document.querySelectorAll('.crypto');
    let cryptoinput = document.querySelectorAll('.cryptoinput');
    
    currinput[0].setAttribute('required','');
    currinput[1].setAttribute('required','');
    currinput[2].setAttribute('required','');

    methodtype.addEventListener('change', sortfields);
    function sortfields() {
        if(methodtype.value == 'currency'){
            cryptotype.forEach(element => {
                element.classList.add('d-none');
            });
            currinput[0].setAttribute('required','');
            currinput[1].setAttribute('required','');
            currinput[2].setAttribute('required','');

            cryptoinput[0].removeAttribute('required','');
            cryptoinput[2].removeAttribute('required','');
            
            currtype.forEach(curr => {
                curr.classList.remove('d-none');
            });

        }else{
            cryptoinput[0].setAttribute('required','');
            cryptoinput[2].setAttribute('required','');

            currinput[0].removeAttribute('required','');
            currinput[1].removeAttribute('required','');
            currinput[2].removeAttribute('required','');

            cryptotype.forEach(element => {
                element.classList.remove('d-none');
            });

            currtype.forEach(curr => {
                curr.classList.add('d-none');
            });
        }
    }
</script>