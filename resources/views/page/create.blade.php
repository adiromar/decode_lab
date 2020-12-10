@extends('inc.app')

@section('content')
       

          <!-- Content -->
          <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="main-content">
                   

                    <div class="row pt-3">
                        <div class="col-md-12 col-12">
                            <div class="widget-box">
                                <div class="table-header">
                                    {{ $title }}
                                </div>
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <form action="{{ route('page.store') }}" method="post" enctype="multipart/form-data" class="">
                                            {{ csrf_field() }}

                                            <div class="form-horizontal">
                                                {{-- updated --}}
                                                <div class="row form-group">
                                                    {{-- <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Lab Id</h5>
                                                        <input type="text" name="lab_id" class="input-sm">
                                                    </div> --}}

                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <h5>Page Title <span class="req_red">*</span></h5>
                                                        <input type="text" name="page_title" class="form-control" placeholder="Title" required>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-12">
                                                        <h5>Sub Title <span class="req_red">*</span></h5>
                                                        <input type="text" name="subtitle" class="form-control" placeholder="Sub title">
                                                    </div>

                                                    {{-- <div class="col-md-3 col-sm-3 col-12">
                                                        <h5>Blog Image </h5>
                                                        <input type="file" name="image" class="form-control">
                                                    </div> --}}

                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12 col-12">
                                                        <h5>Content <span class="req_red">*</span></h5>
                                                        {{-- <div class="wysiwyg-editor" id="editor1"></div> --}}
                                                        <textarea name="content" id="editor11" cols="300" rows="10" class="form-controls wysiwyg-editor" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-10 col-12">
                                                        <input type="submit" class="btn btn-primary btn-sm ml-2" value="Submit">
                                                    </div>
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
          </div>


        <script src="https://cdn.ckeditor.com/4.15.1/full-all/ckeditor.js"></script>

        <script>
            CKEDITOR.replace( 'editor11' );
            
        </script>
		
@endsection

