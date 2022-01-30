<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
} else {
    $text = "light";
}
?>
@extends('layouts.app')
    @section('content')
        @include('admin.topmenu')
        @include('admin.sidebar')
        <div class="main-panel bg-{{Auth('admin')->User()->dashboard_style}}">
            <div class="content bg-{{Auth('admin')->User()->dashboard_style}}">
                <div class="page-inner">
                    <div class="mt-2 mb-5">
                        @if (Auth('admin')->User()->type == "Super Admin" || Auth('admin')->User()->type == "Admin")
                       <h1 class="title1 text-{{$text}}">Manage New Registered Members </h1> <br> <br>
                        @endif
                        
                    </div>
                    @if(Session::has('message'))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
                            </div>
                        </div>
                    </div>
                    @endif
        
                    @if(count($errors) > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert" >
                                <button type="button" clsass="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    @if (Auth('admin')->User()->type == "Super Admin" || Auth('admin')->User()->type == "Admin")
                    
                        <div class="row mb-3">
                            <div class="col">
                                <a href="#" data-toggle="modal" data-target="#assignModal" class="btn btn-primary">Assign</a> &nbsp; &nbsp;
                                	<!-- Assign Modal -->
                                    <div id="assignModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                            <h4 class="modal-title text-{{$text}}">Assign Users</h4>
                                            <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                <form style="padding:3px;" role="form" method="post" action="{{route('assignuser')}}">
                                                    <div class="form-group">
                                                        <h5 class="text-{{$text}}">Select User to Assign</h5>
                                                        <select name="user_name" id="" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                            @foreach ($users as $user)
                                                            <option value="{{$user->id}} ">{{$user->name}} {{$user->l_name}}</option>
                                                            @endforeach
                                                        </select> 
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class="text-{{$text}}">Select Admin to assign this user to.</h5>
                                                        <select name="admin" id="" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                            <option value="">Select</option>
                                                            @foreach ($admin as $user)
                                                            <option value="{{$user->id}}">{{$user->firstName}} {{$user->lastName}}</option>
                                                            @endforeach
                                                        </select> 
                                                    </div>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-{{$text}}" value="Assign">
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- /Assign Modal end -->
                                <a >
                                    <form action="{{ route('fileImport')}}" class="form-inline" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <h5 class="text-{{$text}}">Import Leads from Excel</h5> &nbsp; &nbsp;
                                            <input name="file" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" type="file" required>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12 card p-4 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                                <div class="table-responsive" data-example-id="hoverable-table">
                                    <table id="ShipTable" class="table table-hover text-{{$text}}">
                                        <thead> 
                                            <tr> 
                                                <th>ID</th> 
                                                <th>Balance</th> 
                                                <th>First Name</th> 
                                                <th>Last Name</th> 
                                                <th>Email</th> 
                                                <th>Phone</th>
                                                <th>Inv. plan</th>
                                                <th>Status</th>
                                                <th>Date registered</th> 
                                                <th>Assigned To</th>
                                                <th>Action</th> 
                                            </tr> 
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $list)
                                            <tr> 
                                                <th scope="row">{{$list->id}}</th>
                                                <td>${{$list->account_bal}}</td> 
                                                <td>{{$list->name}}</td> 
                                                <td>{{$list->l_name}}</td> 
                                                <td>{{$list->email}}</td> 
                                                <td>{{$list->phone_number}}</td>
                                                @if(isset($list->dplan->name)) 
                                                <td>{{$list->dplan->name}}</td>
                                                @else
                                                <td>NULL</td>
                                                @endif 
                                                <td>{{$list->status}}</td> 
                                                <td>{{\Carbon\Carbon::parse($list->created_at)->toDayDateTimeString()}}</td> 
                                                <td>{{$list->tuser->firstName}} {{$list->tuser->lastName}}</td>
                                                <td>
                                                    @if ($list->cstatus =="Customer")
                                                    <a class="btn btn-success btn-sm m-1">Converted</a>  
                                                    @else
                                                    <a href="{{ url('admin/dashboard/convert') }}/{{$list->id}}" class="btn btn-primary btn-sm m-1">Convert</a> 
                                                    @endif
                                                   
                                                    <a class="btn btn-info btn-sm m-1" data-toggle="modal" data-target="#editModal{{$list->id}}" >Edit Status</a>
                                                </td>
                                            </tr> 
    
                                            <div id="editModal{{$list->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                  <!-- Modal content-->
                                                  <div class="modal-content">
                                                    <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                      <h4 class="modal-title">Edit this User status</h4>
                                                      <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                        <form method="post" action="{{route('updateuser')}}">
                                                            <div class="form-group">
                                                                <h5 class=" text-{{$text}}">User Status</h5>
                                                                <textarea name="userupdate" id=""  rows="5" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" placeholder="Enter here" required>{{$list->userupdate}}</textarea>
                                                            </div>
                                                            <input type="hidden" name="id" value="{{$list->id}}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input type="submit" class="btn btn-primary" value="Save">
                                                                
                                                        </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <!-- /send all users email Modal -->
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
    @endsection