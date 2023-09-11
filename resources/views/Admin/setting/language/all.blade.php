 
@extends('admin.master');
@section('title', 'Admin-setting-twilio')

@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Languages</h3>
                        </div>
                        <div class="col-auto text-end">
                            <a class="btn btn-primary add-button" href="add-language.html">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Language</th>
                                                <th>Code</th>
                                                <th>RTL</th>
                                                <th>Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>English</td>
                                                <td>en</td>
                                                <td>
                                                    <div class="status-toggle">
                                                        <input id="rtl_1" class="check" type="checkbox" checked>
                                                        <label for="rtl_1" class="checktoggle">checkbox</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="status-toggle">
                                                        <input id="lan_status_1" class="check" type="checkbox" checked>
                                                        <label for="lan_status_1" class="checktoggle">checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a class="btn btn-sm bg-info-light me-2" href="#" title="Web Translation">
                                                        <i class="fas fa-language me-1"></i>Web
                                                    </a>
                                                    <a class="btn btn-sm bg-warning-light me-2" href="#" title="App Translation">
                                                        <i class="fas fa-language me-1"></i>App
                                                    </a>
                                                    <a href="edit-language.html" class="btn btn-sm bg-success-light me-2" title="Edit">
                                                        <i class="far fa-edit me-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Arabic</td>
                                                <td>ar</td>
                                                <td>
                                                    <div class="status-toggle">
                                                        <input id="rtl_2" class="check" type="checkbox" checked>
                                                        <label for="rtl_2" class="checktoggle">checkbox</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="status-toggle">
                                                        <input id="lan_status_2" class="check" type="checkbox" checked>
                                                        <label for="lan_status_2" class="checktoggle">checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a class="btn btn-sm bg-info-light me-2" href="#" title="Web Translation">
                                                        <i class="fas fa-language me-1"></i>Web
                                                    </a>
                                                    <a class="btn btn-sm bg-warning-light me-2" href="#" title="App Translation">
                                                        <i class="fas fa-language me-1"></i>App
                                                    </a>
                                                    <a href="edit-language.html" class="btn btn-sm bg-success-light me-2" title="Edit">
                                                        <i class="far fa-edit me-1"></i>Edit
                                                    </a>
                                                    <a href="#" class="btn btn-sm bg-danger-light me-2 delete_review_comment">
                                                        <i class="far fa-trash-alt me-1"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

    