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
                        <h1 class="title1 text-{{$text}}">View My Task</h1> <br> <br>
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
                    <div class="row mb-5">
                        <div class="col-lg-12 card p-4 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-hover text-{{$text}}">
                                    <thead> 
										<tr> 
											<th>Task Title</th>
											<th>Assigned To</th>
											<th>Note</th>
											<th>From Date</th>
											<th>To Date</th>
											<th>Status</th> 
											<th>Date Created</th>
											<th>Option</th>
										</tr> 
                                    </thead>
                                    <tbody>
                                        @foreach ($tasks as $task)
                                        <tr> 
                                            <td>{{$task->title}}</td> 
											<td>{{$task->tuser->firstName}} {{$task->tuser->lastName}}</td>
											<td>{{$task->note}}</td> 
											<td>{{$task->start_date}}</td> 
                                            <td>{{$task->end_date}}</td>
                                            <td>
                                                @if ($task->status == 'Pending')
                                                    <span class="badge badge-danger">{{$task->status}}</span>
                                                @else
                                                <span class=" badge badge-success">{{$task->status}}</span>
                                                @endif
                                            </td>
                                            <td>{{$task->created_at}}</td>
                                            <td>
                                                @if ($task->status == 'Pending')
                                                <a href="{{ url('admin/dashboard/markdone') }}/{{$task->id}}" class="btn btn-primary btn-sm m-1">Mark as Done</a>
                                                @else
                                                    <a class="btn btn-success btn-sm m-1">No Action Needed</a>
                                                @endif
                                                
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection