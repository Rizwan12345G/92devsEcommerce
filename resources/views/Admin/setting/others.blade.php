@extends('admin.master');
@section('title', 'Admin-setting-others')

@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-title">Other Settings</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Enable Google Analytics</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="googleanalytics" class="check" type="checkbox" checked>
                                            <label for="googleanalytics" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Google Analytics <span class="manidory">*</span></label>
                                    <textarea class="form-control" placeholder="Google Analytics"></textarea>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Enable Google Adsense Code</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="adsensecode" class="check" type="checkbox" checked="">
                                            <label for="adsensecode" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Google Adsense Code<span class="manidory">*</span></label>
                                    <textarea class="form-control" placeholder="Google Adsense Code"></textarea>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Display Facebook Messenger</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="facebookmessage" class="check" type="checkbox" checked="">
                                            <label for="facebookmessage" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Facebook Messenger<span class="manidory">*</span></label>
                                    <textarea class="form-control" placeholder="Facebook Messenger"></textarea>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Display Facebook Pixel</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="facebookpixel" class="check" type="checkbox" checked="">
                                            <label for="facebookpixel" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Google Adsense Code<span class="manidory">*</span></label>
                                    <textarea class="form-control" placeholder="Google Adsense Code"></textarea>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Display Google Recaptcha</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="googlerecaptcha" class="check" type="checkbox" checked="">
                                            <label for="googlerecaptcha" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Google Rechaptcha Site Key<span class="manidory">*</span></label>
                                    <input type="text" class="form-control" placeholder="6LcnPoEaAAAAAF6QhKPZ8V4744yiEnr41li3SYDn">
                                </div>
                                <div class="form-group">
                                    <label>Google Rechaptcha Secret Key</label>
                                    <input type="text" class="form-control" placeholder="6LcnPoEaAAAAACV_xC4jdPqumaYKBnxz9Sj6y0zk">
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Cookies Agreement</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="cookies" class="check" type="checkbox" checked="">
                                            <label for="cookies" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Google Adsense Code<span class="manidory">*</span></label>

                                    <div id="editor"></div>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        @endsection