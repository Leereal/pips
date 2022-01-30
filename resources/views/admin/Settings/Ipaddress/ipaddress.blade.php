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
        <div class="main-panel bg-{{$bg}}">
			<div class="content bg-{{$bg}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">IP Address Blacklist</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
                    <div class="mb-5 row">
						<div class="col-md-12">
                            <div class="card p-1 p-md-5 shadow-lg bg-{{$bg}} text-{{$text}}">
                                <div class="row">
                                    <div class="mb-3 col-md-8 offset-md-2">
                                        <form method="post" action="javascript:void(0)" id="ipform" >
                                            @csrf
                                            <div class="form-group">
                                                <h6 class="text-{{$text}}">IP Address</h6>
                                                <input type="text" name="ipaddress" id="ipaddress" class="form-control bg-{{$bg}} text-{{$text}}">
                                                <small class="text-{{$text}}">This IP Address wont be able to access your website.</small> 
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="px-5 btn btn-primary btn-lg" value="Blacklist">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <div class=" table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">IP-address</th>
                                                        <th scope="col">Date blacklisted</th>
                                                        <th scope="col">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="showipaddress">
                                                
                                                </tbody>
                                            </table>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
<script>
    let textinput = document.getElementById('ipaddress');
    getallips();
    function getallips(){
        let url = "{{route('allipaddress')}}";
        fetch(url)
        .then(function(res){
            return res.json();
        })
        .then(function (response){
            if(response.status === 200){
                document.getElementById('showipaddress').innerHTML = response.data;
            }
        })
        .catch(function(err){
            console.log(err);
        });
        
    }

    function deleteip(id){
        let url = "{{url('admin/dashboard/delete-ip')}}"  + '/' + id;
        fetch(url)
        .then(function(res){
            return res.json();
        })
        .then(function (response){
            if(response.status === 200){
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
                    placement: {
                        from: "top",
                        align: "right"
                    },
                    offset: 20,
                    spacing: 10,
                    z_index: 1031,
                    delay: 5000,
                    timer: 1000,
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },

                });
                getallips();
            }
        })
        .catch(function(err){
            console.log(err);
        });
    }
	// Submit email preference form
	$('#ipform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "{{route('addipaddress')}}",
			type: 'POST',
			data: $('#ipform').serialize(),
			success: function(response) {
				if (response.status === 200) {
                    textinput.value = "";
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
						placement: {
							from: "top",
							align: "right"
						},
						offset: 20,
						spacing: 10,
						z_index: 1031,
						delay: 5000,
						timer: 1000,
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
	
					});
                    getallips();
				} else {
					
				}
			},
			error: function(error) {
				console.log(error);
			},
		});
      
	});
</script>
    @endsection