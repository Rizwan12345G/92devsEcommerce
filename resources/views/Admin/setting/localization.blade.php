@extends('admin.master');
@section('title', 'Admin-setting-localization')

@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-title">Localization Settings</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Localization Details</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Time Zone</label>
                                    <select class="form-control select">
                                        <option>(UTC+05:30) India</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Date Format</label>
                                    <select class="form-control select">
                                        <option>15/05/2016</option>
                                        <option>15-05-2016</option>
                                        <option>05/15/2016</option>
                                        <option>2016/05/15</option>
                                        <option>2016-05-15</option>
                                        <option>May 15 2016</option>
                                        <option>15 May 2016</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Time Format</label>
                                    <select class="form-control select">
                                        <option>12 Hours</option>
                                        <option>24 Hours</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Currency Code</label>
                                    <select class="form-control select">
                                        <option>USD</option>
                                        <option>Pound</option>
                                        <option>EURO</option>
                                        <option>Ringgit</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Currency Symbol</label>
                                    <select class="form-control select">
                                        <option>$</option>
                                        <option>€</option>
                                        <option>£</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Currency Position</label>
                                    <select class="form-control select">
                                        <option>Left</option>
                                        <option>Right</option>
                                    </select>
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