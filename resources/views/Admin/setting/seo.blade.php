@extends('admin.master');
@section('title', 'Admin-setting-seo')

@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-title">SEO Settings</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Meta Title <span class="manidory">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Meta Keywords <span class="manidory">*</span></label>
                                    <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Meta Keywords" name="services" value="Lorem,Ipsum" id="services">
                                </div>
                                <div class="form-group">
                                    <label>Meta Description <span class="manidory">*</span></label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection