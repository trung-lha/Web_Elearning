<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Bộ lọc</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-md-4"><a href="" type="button" class="btn btn-primary">
                            All <span class="badge bg-white">4</span>
                        </a><a href="" type="button" class="btn btn-success">
                            Active <span class="badge bg-white">2</span>
                        </a><a href="" type="button" class="btn btn-success">
                            Inactive <span class="badge bg-white">2</span>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="form-inline"  style="float:right;">
                            <div class="form-group">
                                @yield('option')
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="search_value" value="">
                            </div>
                            
                            <div class="input-group-btn form-group">
                                <button id="btn-clear" type="button" class="btn btn-success"
                                    style="margin-right: 0px">Xóa tìm kiếm</button>
                                <button id="btn-search" type="button" class="btn btn-primary">Tìm kiếm</button>
                            </div>
                            <input type="hidden" name="search_field" value="all">
                        </div>
                    </div>
                    {{-- <div class="col-md-2">
                        <select name="select_filter" class="form-control" data-field="level">
                            <option value="default" selected="selected">Select Level</option>
                            <option value="admin">Admin</option>
                            <option value="member">Member</option>
                        </select>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>