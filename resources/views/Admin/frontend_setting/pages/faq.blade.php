  
   
@extends('admin.master');
@section('title', 'Admin-front-setting-pages')
@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-lg-8 m-auto">

                        <div class="page-header">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="page-title">FAQ</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-lg-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-heads">
                                            <h4 class="card-title">FAQ</h4>
                                            <div class="col-auto">
                                                <div class="status-toggle">
                                                    <input id="faq" class="check" type="checkbox" checked="">
                                                    <label for="faq" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="faq">
                                            <div class="row counts-list">
                                                <div class="col-md-11">
                                                    <div class="cards">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" value="Anim pariatur cliche reprehenderit?">
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label>Content</label>
                                                            <textarea class="form-control">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
                                                        <i class="far fa-trash-alt "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row counts-list">
                                                <div class="col-md-11">
                                                    <div class="cards">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" value="Anim pariatur cliche reprehenderit?">
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label>Content</label>
                                                            <textarea class="form-control">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
                                                        <i class="far fa-trash-alt "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row counts-list">
                                                <div class="col-md-11">
                                                    <div class="cards">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label>Content</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="#" class="btn btn-sm bg-danger-light  delete_review_comment">
                                                        <i class="far fa-trash-alt "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a class="btn  btn-success addfaq"><i class="fa fa-plus me-2"></i>Add New</a>
                                        </div>
                                        <div class="form-groupbtn">
                                            <a class="btn btn-update">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

   