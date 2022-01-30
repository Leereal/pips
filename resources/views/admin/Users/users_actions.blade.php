	<!-- Top Up Modal -->
    <div id="topupModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">Credit/Debit {{$user->name}} account.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <form method="post" action="{{route('topup')}}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control bg-{{$bg}} text-{{$text}}" placeholder="Enter amount" type="text" name="amount" required>
                        </div>
                        <div class="form-group">
                            <h5 class="text-{{$text}}">Select where to Credit/Debit</h5>
                            <select class="form-control bg-{{$bg}} text-{{$text}}" name="type" required>
                                <option value="" selected disabled>Select Column</option>
                                <option value="Bonus">Bonus</option>
                                <option value="Profit">Profit</option>
                                <option value="Ref_Bonus">Ref_Bonus</option>
                                <option value="balance">Account Balance</option>
                                <option value="Deposit">Deposit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5 class="text-{{$text}}">Select credit to add, debit to subtract.</h5>
                            <select class="form-control bg-{{$bg}} text-{{$text}}" name="t_type" required>
                                <option value="">Select type</option>
                                <option value="Credit">Credit</option>
                                <option value="Debit">Debit</option>
                            </select>
                            <small> <b>NOTE:</b> You cannot debit deposit</small>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <input type="submit" class="btn btn-{{$text}}" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit for a plan Modal -->


    <!-- send a single user email Modal-->
    <div id="sendmailtooneuserModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">Send Email</h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <p class="text-{{$text}}">This message will be sent to {{$user->name}}</p>
                    <form style="padding:3px;" role="form" method="post" action="{{route('sendmailtooneuser')}}">
                        @csrf
                        <div class=" form-group">
                            <input type="text" name="subject" class="form-control bg-{{$bg}} text-{{$text}}" placeholder="Subject" required>
                        </div>
                        <div class=" form-group">
                            <textarea placeholder="Type your message here" class="form-control bg-{{$bg}} text-{{$text}}" name="message" row="8" placeholder="Type your message here" required></textarea>
                        </div>
                        <div class=" form-group">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <input type="submit" class="btn btn-{{$text}}" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Trading History Modal -->
            
    <div id="TradingModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">Add Trading History for {{$user->name}} {{$user->l_name}} </h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <form role="form" method="post" action="{{route('addhistory')}}">
                        @csrf
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Select Investment Plan</h5>
                            <select class="form-control bg-{{$bg}} text-{{$text}}" name="plan">
                                <option value="" selected disabled>Select Plan</option>
                            @foreach($pl as $plns)
                                <option value="{{$plns->name}}">{{$plns->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                           <h5 class=" text-{{$text}}">Amount</h5>
                            <input type="number" name="amount" class="form-control bg-{{$bg}} text-{{$text}}">
                        </div>
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Type</h5>
                            <select class="form-control bg-{{$bg}} text-{{$text}}" name="type">
                                <option value="" selected disabled>Select type</option>
                                <option value="Bonus">Bonus</option>
                                <option value="ROI">ROI</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-{{$text}}" value="Add History">
                            <input type="hidden" name="user_id" value="{{$user->id}}"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /send a single user email Modal -->

<!-- Edit user Modal -->
    <div id="edituser" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">Edit {{$user->name}} details.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <form role="form" method="post" action="{{route('edituser')}}">
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Username</h5>
                            <input class="form-control bg-{{$bg}} text-{{$text}}" id="input1" value="{{$user->username}}" type="text" name="username" required> 
                             <small>Note: same username should be use in the referral link.</small>
                        </div>
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Fullname</h5>
                            <input class="form-control bg-{{$bg}} text-{{$text}}" value="{{$user->name}}" type="text" name="name" required>  
                        </div>
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Email</h5>
                            <input  class="form-control bg-{{$bg}} text-{{$text}}" value="{{$user->email}}" type="text" name="email" required> 
                        </div>
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Phone Number</h5>
                            <input class="form-control bg-{{$bg}} text-{{$text}}" value="{{$user->phone}}" type="text" name="phone" required> 
                        </div>
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Country</h5>
                            <input class="form-control bg-{{$bg}} text-{{$text}}" value="{{$user->country}}" type="text" name="country">
                        </div>
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Referral link</h5>
                            <input class="form-control bg-{{$bg}} text-{{$text}}" value="{{$user->ref_link}}" type="text" name="ref_link" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <input type="submit" class="btn btn-{{$text}}" value="Update">
                        </div>
                    </form>
                </div>
                <script>
                    $('#input1').on('keypress', function(e) {
                        return e.which !== 32;
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- /Edit user Modal -->

    <!-- Reset user password Modal -->
    <div id="resetpswdModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">Reset Password</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <p class="text-{{$text}}">Are you sure you want to reset password for {{$user->name}} to <span class="text-primary font-weight-bolder">user01236</span></p>
                    <a class="btn btn-{{$text}}" href="{{ url('admin/dashboard/resetpswd') }}/{{$user->id}}">Reset Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Reset user password Modal -->
    
    <!-- Switch useraccount Modal -->
    <div id="switchuserModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">You are about to login as {{$user->name}}.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <a class="btn btn-success" href="{{ url('admin/dashboard/switchuser') }}/{{$user->id}}">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Switch user account Modal -->

    <!-- Clear account Modal -->
    <div id="clearacctModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">Clear Account</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <p class="text-{{$text}}">You are clearing account for {{$user->name}} to {{$settings->currency}}0.00</p>
                    <a class="btn btn-{{$text}}" href="{{ url('admin/dashboard/clearacct') }}/{{$user->id}}">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Clear account Modal -->

    <!-- Delete user Modal -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    
                    <h4 class="modal-title text-{{$text}}">Delete User</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}} p-3">
                    <p class="text-{{$text}}">Are you sure you want to delete {{$user->name}} Account? Everything associated with this account will be loss.</p>
                    <a class="btn btn-danger" href="{{ url('admin/dashboard/delsystemuser') }}/{{$user->id}}">Yes i'm sure</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete user Modal --> 