<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
	$bg = 'light';
} else {
    $text = "light";
	$bg = 'dark';
}
?>
@extends('layouts.app')
    @section('content')
        @include('admin.topmenu')
        @include('admin.sidebar')
		<div class="main-panel">
			<div class="content bg-{{$bg}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">Update Investment Plan</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
					<div class="mb-5 row">
						<div class="col-lg-12 ">
                            <div class="p-3 card bg-{{$bg}}">
                                <form role="form" method="post" action="{{ route('updateplan') }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <h5 class="text-{{$text}}">Plan Name</h5>
                                            <input  class="form-control text-{{$text}} bg-{{$bg}}" value="{{$plan->name}}" placeholder="Enter Plan name" type="text" name="name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5 class="text-{{$text}}">Plan price({{$settings->currency}})</h5> 
                                            <input class="form-control text-{{$text}} bg-{{$bg}}" value="{{$plan->price}}" placeholder="Enter Plan price" type="text" name="price" required>   
                                            <small class="text-{{$text}}">This is the maximum amount a user can pay to invest in this plan</small>
                                       </div>	
                                       <div class="form-group col-md-6">
                                            <h5 class="text-{{$text}}">Plan Minimum Price ({{$settings->currency}})</h5> 			 
                                             <input placeholder="Enter Plan minimum price" value="{{$plan->min_price}}" class="form-control text-{{$text}} bg-{{$bg}}" type="text" name="min_price" required>  
                                             <small class="text-{{$text}}">This is the minimum amount a user can pay to invest in this plan</small> 
                                       </div>
                                       <div class="form-group col-md-6">
                                             <h5 class="text-{{$text}}">Plan Maximum Price ({{$settings->currency}})</h5> 			 
                                             <input class="form-control text-{{$text}} bg-{{$bg}}" value="{{$plan->max_price}}" placeholder="Enter Plan maximum price" type="text" name="max_price" required> 
                                            <small class="text-{{$text}}">Same as plan price</small> 
                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-{{$text}}">Minimum return ({{$settings->currency}})</h5> 
                                           <input class="form-control text-{{$text}} bg-{{$bg}}" value="{{$plan->minr}}" placeholder="Enter minimum return" type="text" name="minr" required>   
                                           <small class="text-{{$text}}">This is the minimum return (ROI) for this plan</small>
                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-{{$text}}">Maximum return ({{$settings->currency}})</h5> 
                                           <input class="form-control text-{{$text}} bg-{{$bg}}" value="{{$plan->maxr}}" placeholder="Enter maximum return" type="text" name="maxr" required>  
                                           <small class="text-{{$text}}">This is the Maximum return (ROI) for this plan</small> 
                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-{{$text}}">Gift Bonus ({{$settings->currency}})</h5> 
                                           <input class="form-control text-{{$text}} bg-{{$bg}}" value="{{$plan->gift}}" placeholder="Enter Additional Gift Bonus" type="text" name="gift" value="0" required>  
                                           <small class="text-{{$text}}">Optional Bonus if a user buys this plan. </small>  
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-{{$text}}">Top up Interval</h5> 	
                                           <select class="form-control text-{{$text}} bg-{{$bg}}" name="t_interval">
                                            <option>{{$plan->increment_interval}}</option>
                                               <option>Monthly</option>
                                               <option>Weekly</option>
                                               <option>Daily</option>
                                               <option>Hourly</option>
                                               <option>Every 30 Minutes</option>
                                           </select>  
                                           <small class="text-{{$text}}">This specifies how often the system should add profit(ROI) to user account.</small>    
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-{{$text}}">Top up Type</h5> 
                                           <select class="form-control text-{{$text}} bg-{{$bg}}" name="t_type">
                                            <option>{{$plan->increment_type}}</option>
                                               <option>Percentage</option>
                                               <option>Fixed</option>
                                           </select>  
                                           <small class="text-{{$text}}">This specifies if the system should add profit in percentage(%) or a fixed amount.</small>   
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-{{$text}}">Top up Amount (in % or {{$settings->currency}} as specified above)</h5> 
                                           <input class="form-control text-{{$text}} bg-{{$bg}}" value="{{$plan->increment_amount}}" placeholder="top up amount" type="text" name="t_amount" required> 
                                           <small class="text-{{$text}}">This is the amount the system will add to users account as profit, based on what you selected in topup type and topup interval above. </small>   
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-{{$text}}">Investment Duration</h5> 
                                           <input class="form-control text-{{$text}} bg-{{$bg}}"value="{{$plan->expiration}}" placeholder="eg 1 Days, 2 Weeks, 1 Months" type="text" name="expiration" required> 
                                           <small class="text-{{$text}}">This specifies how long the investment plan will run. Please strictly follow the guide on <a href="" data-toggle="modal" data-target="#durationModal">how to setup investment duration</a> else it may not work. </small> 
                                              
                                       </div>
                                       <div class="form-group col-md-12">
                                        <input type="hidden" name="id" value="{{ $plan->id}}">
                                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           <input type="submit" class="btn btn-primary" value="Update Plan">   
                                       </div>
                                    </div>
                               </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
            
            <div id="durationModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body bg-{{$bg}}">
                            <h5 class="text-{{$text}}">FIRSTLY, Always preceed the time frame with a digit, that is do not write the number in letters, <br> <br> SECONDLY, always add space after the number, <br> <br> LASTLY, the first letter of the timeframe should be in CAPS and always add 's' to the timeframe even if your duration is just a day, month or year.</h5>
                            <h2 class="text-{{$text}}">Eg, 1 Days, 3 Weeks, 1 Hours, 48 Hours, 4 Months, 1 Years, 9 Months</h2>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div id="topupModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body bg-{{$bg}}">
                            
                        </div>
                    </div>
                </div>
            </div>
	@endsection