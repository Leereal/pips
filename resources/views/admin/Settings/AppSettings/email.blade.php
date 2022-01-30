<div class="row">
    <div class="col-md-12">
        <h4>Configuration</h4>
        <hr>
    </div>
    <div class="col-md-12">
        <form action="javascript:void(0)" method="POST" id="emailform">
            @csrf
            @method('PUT')
            <div class=" form-row">
                <div class="form-group col-md-12">
                    <div class="">
                        <h5 class="text-{{$text}}">Mail Server</h5>
                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" name="server" id="sendmailserver" value="sendmail" class="selectgroup-input" checked="">
                                <span class="selectgroup-button">Sendmail</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="server" id="smtpserver" value="smtp" class="selectgroup-input">
                                <span class="selectgroup-button">SMTP</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Email From</h5>
                    <input type="email" name="emailfrom" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->emailfrom}}" required>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Email From Name</h5>
                    <input type="text" name="emailfromname" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->emailfromname}}" required>
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-{{$text}}">SMTP Host</h5>
                    <input type="text" name="smtp_host" class="form-control bg-{{$bg}} text-{{$text}} smtpinput" value="{{$settings->smtp_host}}">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-{{$text}}">SMPT Port</h5>
                    <input type="text" name="smtp_port" class="form-control bg-{{$bg}} text-{{$text}} smtpinput" value="{{$settings->smtp_port}}">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-{{$text}}">SMPT Encryption</h5>
                    <input type="text" name="smtp_encrypt" class="form-control bg-{{$bg}} text-{{$text}} smtpinput" value="{{$settings->smtp_encrypt}}">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-{{$text}}">SMPT Username</h5>
                    <input type="text" name="smtp_user" class="form-control bg-{{$bg}} text-{{$text}} smtpinput" value="{{$settings->smtp_user}}">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-{{$text}}">SMPT Password</h5>
                    <input type="text" name="smtp_password" class="form-control bg-{{$bg}} text-{{$text}} smtpinput" value="{{$settings->smtp_password}}">
                </div>
            </div>
            <hr>
            <div class="form-row">
                <div class="col-md-12">
                    <h4>Google Login Credentials</h4>
                    <hr>
                </div>
            </div>
            <div class=" form-row">
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Client ID</h5>
                    <input type="text" name="google_id" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->google_id}}">
                    <small class="text-{{$text}}"> From console.cloud.google.com</small>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Client Secret</h5>
                    <input type="text" name="google_secret" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->google_secret}}">
                    <small class="text-{{$text}}"> From console.cloud.google.com</small>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Redirect URL</h5>
                    <input type="text" name="google_redirect" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->google_redirect}}">
                    <small class="text-{{$text}}">Set this to your Valid OAuth Redirect URI in console.cloud.google.com. Be sure to replace  </small>
                </div>
            </div>
            <div class="mt-4 form-row">
                <div class="col-md-12">
                    <h4>Google Captcha Credentials</h4>
                    <hr>
                </div>
            </div>
            <div class=" form-row">
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Captcha Secret</h5>
                    <input type="text" name="capt_secret" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->capt_secret}}">
                    <small class="text-{{$text}}"> From https://www.google.com/recaptcha/admin/create  </small>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Captcha Site-Key</h5>
                    <input type="text" name="capt_sitekey" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->capt_sitekey}}">
                    <small class="text-{{$text}}"> From https://www.google.com/recaptcha/admin/create</small>
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
                </div>
            </div>
        </form>
    </div>
</div>


@if($settings->mail_server=='sendmail')
<script>document.getElementById("sendmailserver").checked= true;</script>
@else
<script>document.getElementById("smtpserver").checked= true;</script>
@endif