<div class="row">
    <div class="col-12">
        <form method="post" action="javascript:void(0)" id="updatepreference">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Contact Email</h5>
                    <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="contact_email" value="{{$settings->contact_email}}" required>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Uploaded Files Location</h5>
                    <select name="location" class="form-control bg-{{$bg}} text-{{$text}}">
                        <option>{{$settings->location}}</option> 
                        <option>AWS S3</option> 
                        <option>Email</option>
                        <option>Local</option>
                    </select>
                    <small class="text-{{$text}}">Note: To use AWS S3, please supply your AWS information in the .ENV file</small> 
                </div> 
                <input name="s_currency" value="{{ $settings->s_currency }}" id="s_c" type="hidden">
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Website Currency</h5>
                    <select name="currency" id="select_c" class="form-control bg-{{$bg}} text-{{$text}} select2" onchange="changecurr()" style="width: 100%">
                        <option value="<?php echo htmlentities($settings->currency); ?>">{{ $settings->currency }}</option>
                        @foreach($currencies as $key=>$currency)
                        <option id="{{$key}}" value="<?php echo html_entity_decode($currency); ?>">{{$key .' ('.html_entity_decode($currency).')'}}</option>
                        @endforeach
                    </select>
                    
                </div> 
                <input type="hidden" value="{{$settings->site_preference}}" name="site_preference">
            </div>
            
            <div class="mt-3 row">
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Annoucment:</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="annouc" id="annouc" value="on" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="annouc" id="annoucoff" value="off" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                </div>
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Weekend Trade:</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="weekend_trade" id="weekend_trade" value="on" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="weekend_trade" id="weekend_tradeoff" value="off" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                       <small class="text-{{$text}}">if turned off, Users will not receive ROI on weekends</small> 
                    </div>
                </div>
                
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Withdrawals</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="withdraw" id="withdraw" value="true" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">Enable</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="withdraw" id="withdrawoff" value="false" class="selectgroup-input">
                            <span class="selectgroup-button">Disable</span>
                        </label>
                    </div>
                    <div>
                        <small class="text-{{$text}}">if disabled, Users will not be able to place withdrawal request</small>
                    </div>
                    
                </div>
            
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Google ReCaptcha:</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="captcha" id="captcha" value="true" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="captcha" id="captchaoff" value="false" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                       <small class="text-{{$text}}">if turned on, Users will need to pass the google recaptcha challenge upon registration, also please see how to set up google recpatcha on your website before you can use it. <a href="https://doc.onlinetrade.brynamics.xyz/details/how-to-add-google-recaptcha-" target="_blank">See how</a></small> 
                    </div>
                    
                </div>

                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Translation</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="googlet" id="googlet" value="on" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="googlet" id="googletoff" value="off" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">if turned on, Users will have the option of selecting their preferred language through google translation</small>  
                    </div>
                </div>

                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Trade Mode</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="trade_mode" id="trade_mode" value="on" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="trade_mode" id="trade_modeoff" value="off" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">if turned off, Users will not receive thier ROI at all.</small>  
                    </div>
                </div>
                
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">KYC(Verification)</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="enable_kyc" id="enable_kyc" value="yes" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="enable_kyc" id="enable_kycoff" value="no" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">if turned on, Users will need to submit required documents to get verified before they can place a withdrawal request.</small> 
                    </div>
                </div>

                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Google Login</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="social" id="social" value="yes" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="social" id="socialoff" value="no" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">Google Login allows users to login/register with their google account</small> 
                    </div>
                </div>

                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Email Verification</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="enail_verify" id="enail_verify" value="true" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">Enable</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="enail_verify" id="enail_verifyoff" value="false" class="selectgroup-input">
                            <span class="selectgroup-button">Disable</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">If email verification is disabled users will not be ask to verify their email address.</small> 
                    </div>
                </div>
                <input type="hidden" name="id" value="1">
            </div>
            <div class="mt-4">
                <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
            </div>
        </form>
    </div>
</div>
    @if($settings->enable_annoc=='on')
    <script>document.getElementById("annouc").checked= true;</script>
    @else
    <script>document.getElementById("annoucoff").checked= true;</script>
    @endif

    @if($settings->enable_verification =='true')
    <script>document.getElementById("enail_verify").checked= true;</script>
    @else
    <script>document.getElementById("enail_verifyoff").checked= true;</script>
    @endif

    @if($settings->google_translate=='on')
    <script>document.getElementById("googlet").checked= true;</script>
    @else
    <script>document.getElementById("googletoff").checked= true;</script>
    @endif

    @if($settings->trade_mode=='on')
        <script>document.getElementById("trade_mode").checked= true;</script>
    @else
    <script>document.getElementById("trade_modeoff").checked= true;</script>
    @endif

    @if($settings->enable_kyc=='yes')
        <script>document.getElementById("enable_kyc").checked= true;</script>
        @else
        <script>document.getElementById("enable_kycoff").checked= true;</script>
    @endif

    @if($settings->weekend_trade=='true')
        <script>document.getElementById("weekend_trade").checked= true;</script>
        @else
        <script>document.getElementById("weekend_tradeoff").checked= true;</script>
    @endif

    @if($settings->enable_with=='true')
        <script>document.getElementById("withdraw").checked= true;</script>
        @else
        <script>document.getElementById("withdrawoff").checked= true;</script>
    @endif

    @if($settings->captcha=='true')
        <script>document.getElementById("captcha").checked= true;</script>
        @else
        <script>document.getElementById("captchaoff").checked= true;</script>
    @endif
    @if($settings->enable_social_login=='yes')
    <script>document.getElementById("social").checked= true;</script>
    @else
        <script>document.getElementById("socialoff").checked= true;</script>
    @endif
    