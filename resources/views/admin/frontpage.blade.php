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
                    <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{$text}}">Edit Front page of your website</h1>
                    </div>
                    <x-danger-alert/>
                    <x-success-alert/>
        
                    @if(count($errors) > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert" >
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="mb-5 row">
                        <div class="p-3 col-12">
                            <a href="#"  data-toggle="modal" data-target="#faqmodal" class="btn btn-{{$text}}"><i class="fa fa-plus"></i> Add FAQ</a>
                                <div id="faqmodal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                            <h4 class="modal-title" style="text-align:center;">Add Faq</h4>
                                            <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                            <form action="{{route('savefaq')}}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <h5 class="text-{{$text}}">Question</h5>
                                                    <input type="text" name="question" placeholder="Enter the Question here" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-{{$text}}">Answer</h5>
                                                    <textarea name="answer" placeholder="Enter the Answer to the question above" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" rows="4" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <a href="#" data-toggle="modal" data-target="#testi" class="btn btn-{{$text}}"><i class="fa fa-plus"></i> Add Tesimonial</a>
                                <div id="testi" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                <h4 class="modal-title" style="text-align:center;">Add Testimony</h4>
                                                <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                <form action="{{route('savetestimony')}}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <h5 class="text-{{$text}}">Testifier Name</h5>
                                                        <input type="text" name="testifier" placeholder="Full name" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class=" text-{{$text}}">Position</h5>
                                                        <input type="text" name="position" placeholder="System user or anonymus"  class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class=" text-{{$text}}">What testifier said</h5>
                                                        <textarea name="said" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class=" text-{{$text}}">Picture</h5>
                                                        
                                                        <select name="picture"  class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                            @foreach ($images as $item) 
                                                            <option>{{$item->img_path}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <a href="#" data-toggle="modal" data-target="#images" class="btn btn-{{$text}}"><i class="fa fa-plus"></i> Add Image</a>
                                <div id="images" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                <h4 class="modal-title" style="text-align:center;">Add Image</h4>
                                                <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                <form action="{{route('saveimg')}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <h5 class="text-{{$text}}">Title of Image</h5>
                                                        <input type="text" name="img_title" placeholder="Name of Image" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class="text-{{$text}}">Images Description</h5>
                                                        <textarea name="img_desc" placeholder="Describe the image" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" rows="2"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class="text-{{$text}}">Image</h5>
                                                        <small>Note: Images Uploaded will be renamed by our system to 'random_characters/name_of_file/random_number'.</small>
                                                        <input name="image" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" type="file">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <a href="#" data-toggle="modal" data-target="#content" class="btn btn-{{$text}}"><i class="fa fa-plus"></i> Add Content</a>
                                <div id="content" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                <h4 class="modal-title" style="text-align:center;">Add General Content</h4>
                                                <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                <form action="{{route('savecontents')}}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <h5 class=" text-{{$text}}">Title of Content</h5>
                                                        <input type="text" name="title" placeholder="Name of Content" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class="text-{{$text}}">Content Description</h5>
                                                        <textarea name="content" placeholder="Describe the content" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" rows="2" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button> 
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-12">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                  <a class="mb-2 nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#1" role="tab" aria-controls="nav-home" aria-selected="true"> FAQ(S)</a>
        
                                  <a class="mb-2 nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#2" role="tab" aria-controls="nav-profile" aria-selected="false">TESTIMONIALS</a>
        
                                  <a class="mb-2 nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#3" role="tab" aria-controls="nav-contact" aria-selected="false">WEBSITE CONTENTS</a>
        
                                  <a class="mb-2 nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#4" role="tab" aria-controls="nav-about" aria-selected="false">IMAGES</a>
                                </div>
                            </nav>
        
        
                            <div class="px-3 py-3 tab-content px-sm-0" id="nav-tabContent">
                                {{-- This is the first Tab content --}}
                                <div class="tab-pane fade show active bg-{{Auth('admin')->User()->dashboard_style}} card p-3" id="1" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="boxes">
                                        <div class="row">
                                        @foreach($faqs as $faq)
                                            <div class="p-1 col-md-4">
                                                <div class="card border p-1 bg-{{Auth('admin')->User()->dashboard_style}}">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-{{$text}}"><strong>{{$faq->question}}</strong> </h5>
                                                        <p class="card-text text-{{$text}}">{{$faq->answer}}</p>
                                                        <a href="{{ url('admin/dashboard/delfaq') }}/{{$faq->id}}" type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></a> &nbsp;
                                                        <a href="#" data-toggle="modal" data-target="#editfaq{{$faq->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="editfaq{{$faq->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                            <h4 class="modal-title" style="text-align:center;">Update Faq</h4>
                                                            <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                            <form action="{{route('updatefaq')}}" method="post">
                                                                {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <h5 class="text-{{$text}}">Question</h5>
                                                                    <input type="text" name="question" value="{{$faq->question}}" placeholder="Enter the Question here" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <h5 class="text-{{$text}}">Answer</h5>
                                                                    <textarea name="answer" placeholder="Enter the Answer to the question above" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" rows="4" required>{{$faq->answer}}</textarea>
                                                                </div>
                                                                <input type="hidden" name="id" value="{{$faq->id}}">
                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                   
                                </div>
        
                                {{-- This is the second Tab Content --}}
                                <div class="tab-pane fade card bg-{{Auth('admin')->User()->dashboard_style}} p-3" id="2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="boxes">
                                        <div class="row">
                                        @foreach($testimonies as $faq)
                                            <div class="p-1 col-md-4">
                                                <div class="card border p-1 bg-{{Auth('admin')->User()->dashboard_style}}">
                                                    <div class="card-body">
                                                     
                                                        <h5 class="card-title text-{{$text}}"><strong>{{$faq->name}}</strong> </h5>
                                                        <p class="card-text text-{{$text}}">{{$faq->what_is_said}}</p>
                                                    </div>
                                                    <ul class="list-group list-group-flush ">
                                                        <li class="list-group-item bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}"> {{$faq->position}}</li>
                                                        <li class="bg-{{Auth('admin')->User()->dashboard_style}} list-group-item text-{{$text}}">{{$faq->picture}}</li>
                                                    </ul>
                                                    <div class="card-body">
                                                        <a href="{{ url('admin/dashboard/deltestimony') }}/{{$faq->id}}" type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></a> &nbsp; &nbsp;
                                                        <a href="#" data-toggle="modal" data-target="#edittes{{$faq->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="edittes{{$faq->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                            <h4 class="modal-title" style="text-align:center;">Update  Testimony</h4>
                                                            <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                            <form action="{{route('updatetestimony')}}" method="post">
                                                                {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <h5 class="text-{{$text}}">Testifier Name</h5>
                                                                    <input type="text" name="testifier" placeholder="Full name" value="{{$faq->name}}" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <h5 class=" text-{{$text}}">Position</h5>
                                                                    <input type="text" name="position" value="{{$faq->position}}" placeholder="System user or anonymus"  class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <h5 class=" text-{{$text}}">What testifier said</h5>
                                                                    <textarea name="said" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" rows="4">{{$faq->what_is_said}}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <h5 class=" text-{{$text}}">Picture</h5>
                                                                    <select name="picture"  class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                                        <option value="{{$faq->picture}}">{{$faq->picture}}</option>
                                                                        @foreach ($images as $item) 
                                                                        <option>{{$item->img_path}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <input type="hidden" name="id" value="{{$faq->id}}">
                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
        
                                {{-- This is the Third Tab Content --}}
                                <div class="tab-pane fade card bg-{{Auth('admin')->User()->dashboard_style}} p-3" id="3" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="boxes">
                                        <div class="row">
                                            @foreach($contents as $faq)
                                                <div class="p-1 col-md-3">
                                                    <div class="card border p-1 bg-{{Auth('admin')->User()->dashboard_style}}">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-{{$text}}"><strong>{{$faq->title}}</strong> </h5>
                                                            <p class="card-text text-{{$text}}">{{$faq->description}}</p>
                                                            
                                                            <a href="#" data-toggle="modal" data-target="#editcont{{$faq->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="editcont{{$faq->id}}" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                                <h4 class="modal-title" style="text-align:center;">Update General Content</h4>
                                                                <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                                <form action="{{route('updatecontents')}}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <div class="form-group">
                                                                        <h5 class=" text-{{$text}}">Title of Content</h5>
                                                                        <input type="text" name="title" placeholder="Name of Content" value="{{$faq->title}} " class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <h5 class="text-{{$text}}">Content Description</h5>
                                                                        <textarea name="content" placeholder="Describe the content" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" rows="2" required>{{$faq->description}}</textarea>
                                                                    </div>
                                                                    <input type="hidden" name="id" value="{{$faq->id}}">
                                                                    <button type="submit" class="btn btn-primary">Update</button> 
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>
        
                                {{-- This is the Fouth Tab Content --}}
                                <div class="tab-pane fade card bg-{{Auth('admin')->User()->dashboard_style}} p-3" id="4" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <div class="boxes">
                                        <div class="row">
                                            @foreach($images as $faq)
                                                <div class="p-1 col-md-4">
                                                    <div class="card border p-1 bg-{{Auth('admin')->User()->dashboard_style}}">
                                                        <img src="{{ asset('storage/app/public/photos/'.$faq->img_path)}}" class="card-img-top w-50" alt="Image">
                                                        
                                                        <div class="card-body">
                                                            <h5 class="card-title text-{{$text}}"><strong>{{$faq->title}}</strong> </h5>
                                                            <p class="card-text text-{{$text}}">{{$faq->description}}</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <a href="#" data-toggle="modal" data-target="#editimg{{$faq->id}}" class="btn btn-primary btn-sm">Edit</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="editimg{{$faq->id}}" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                                <h4 class="modal-title" style="text-align:center;">Update Image</h4>
                                                                <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                                <form action="{{route('updateimg')}}" method="post" enctype="multipart/form-data">
                                                                    {{ csrf_field() }}
                                                                    <div class="form-group">
                                                                        <h5 class="text-{{$text}}">Title of Image</h5>
                                                                    <input type="text" name="img_title" value="{{$faq->title}}" placeholder="Name of Image" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <h5 class="text-{{$text}}">Images Description</h5>
                                                                        <textarea name="img_desc" placeholder="Describe the image" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" rows="2">{{$faq->description}}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <h5 class="text-{{$text}}">Image</h5>
                                                                        <input name="image" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" type="file">
                                                                    </div>
                                                                    <input type="hidden" name="id" value="{{$faq->id}}">
                                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection