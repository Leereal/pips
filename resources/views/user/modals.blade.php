
			
			
			<!-- Submit MT4 MODAL modal -->
			<div id="submitmt4modal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">
					<div class="modal-header bg-{{$bg}}">
						<h4 class="modal-title text-{{$text}}">Subscribe to subscription Trading</h4>
						<button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
			      </div>
			     	<div class="modal-body bg-{{$bg}}">
              			<form role="form" method="post" action="{{route('savemt4details')}}">
							@csrf
							<div class="form-row">
								<div class="form-group col-md-6">
									<h5 class="text-{{$text}}">Subscription Duration</h5>
									<select class="form-control bg-{{$bg}} text-{{$text}}" onchange="calcAmount(this)" name="duration" class="duration" id="duratn">
										<option value="default">Select duration</option>
										<option>Monthly</option>
										<option>Quaterly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-{{$text}}">Amount to Pay</h5>
									<input class="form-control subamount bg-{{$bg}} text-{{$text}}" type="text" id="amount" disabled><br/>
									
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-{{$text}} ">MT4 ID*:</h5>
									<input class="form-control bg-{{$bg}} text-{{$text}}"  type="text" name="userid" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-{{$text}} ">MT4 Password*:</h5>
									<input class="form-control bg-{{$bg}} text-{{$text}}"  type="text" name="pswrd" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-{{$text}} ">Account Type:</h5>
									<input  class="form-control bg-{{$bg}} text-{{$text}}" Placeholder="E.g. Standard" type="text" name="acntype" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-{{$text}} ">Currency*:</h5>
									<input  class="form-control bg-{{$bg}} text-{{$text}}" Placeholder="E.g. USD" type="text" name="currency" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-{{$text}} ">Leverage*:</h5>
									<input  class="form-control bg-{{$bg}} text-{{$text}}" Placeholder="E.g. 1:500"  type="text" name="leverage" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-{{$text}} ">Server*:</h5>
									<input  class="form-control bg-{{$bg}} text-{{$text}}" Placeholder="E.g. HantecGlobal-live"  type="text" name="server" required>
								</div>
								<div class="form-group col-12">
									<small class="text-{{$text}}">Amount will be deducted from your Account balance</small>
								</div>
								<div class="form-group col-md-6">
									<input id="amountpay" type="hidden" name="amount">
					   				<input type="submit" class="btn btn-primary" value="Subscribe Now">
								</div>
							</div>
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /plans Modal -->
			<script type="text/javascript">
				function calcAmount(sub) {
					if(sub.value=="Quaterly"){
						var amount = document.getElementById('amount');
						var amountpay = document.getElementById('amountpay');
						amount.value = '<?php echo $settings->currency.$settings->quarterlyfee; ?>';
						amountpay.value = '<?php echo $settings->quarterlyfee; ?>';
					}if(sub.value=="Yearly"){
						var amount = document.getElementById('amount');
						var amountpay = document.getElementById('amountpay');
						amount.value = '<?php echo $settings->currency.$settings->yearlyfee; ?>';
						amountpay.value = '<?php echo $settings->yearlyfee; ?>';
					}if(sub.value=="Monthly"){
						var amount = document.getElementById('amount');
						var amountpay = document.getElementById('amountpay');
						amount.value = '<?php echo $settings->currency.$settings->monthlyfee; ?>';
						amountpay.value = '<?php echo $settings->monthlyfee; ?>';
					}
				}
				</script>