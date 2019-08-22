@section('title')
WebGIS-Survey&GIS
@endsection
@extends('layouts.map')
@push('styles')
<link href="{{ asset('css/mappage.css') }}" rel="stylesheet">
@endpush
@push('pre_scripts')
<script type="text/javascript" src="{{ asset('js/ol.js') }}"></script>
@endpush
@section('content')
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WebGIS-Survey&GIS</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="navbar-form navbar-left">
        <div class="btn-group-tool">
          <button id="btn_fullextent_tool" type="button" class="btn btn-default">
            <i class="fa fa-arrows"></i>
          </button>
          |
          <button id="btn_drawcircle_tool" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Draw Circle">
            <i class="fa fa-edit"></i>
          </button>
          <button id="btn_drawpolygon_tool" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Draw Polygon">
            <i class="fa fa-edit"></i>
          </button>
          |
          <button id="btn_chose_areasurvey_tool" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Chose area for survey">
            <i class="fa fa-edit"></i>
          </button>
          <!-- <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Draw Circle">
            <i class="fa fa-edit"></i>
          </button>
          <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Draw Polygon">
            <i class="fa fa-edit"></i>
          </button> -->
        </div>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
</nav>
<div class="navbar-offset"></div>
<div id="map">
</div>
<div class="row main-row">
  <div class="col-sm-4 col-md-3 sidebar sidebar-left pull-left">
    <div class="panel-group sidebar-body" id="accordion-left">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#layers">
              <i class="fa fa-list-alt"></i>
              Layers
            </a>
            <span class="pull-right slide-submenu">
              <i class="fa fa-chevron-left"></i>
            </span>
          </h4>
        </div>
        <div id="layers" class="panel-collapse collapse in">
          <div class="panel-body list-group">
            <a href="#" class="list-group-item">
              <i class="fa fa-globe"></i> Open Street Map
            </a>
            <a href="#" class="list-group-item">
              <i class="fa fa-globe"></i> Bing
            </a>
            <a href="#" class="list-group-item">
              <i class="fa fa-globe"></i> WMS
            </a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#properties">
              <i class="fa fa-list-alt"></i>
              Properties
            </a>
          </h4>
        </div>
        <div id="properties" class="panel-collapse collapse in">
          <div class="panel-body">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-md-6 mid"></div>
  <div class="col-sm-4 col-md-3 sidebar sidebar-right pull-right">
    <div class="panel-group sidebar-body" id="accordion-right">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#taskpane">
              <i class="fa fa-tasks"></i>
              Task Pane
            </a>
            <span class="pull-right slide-submenu">
              <i class="fa fa-chevron-right"></i>
            </span>
          </h4>
        </div>
        <div id="taskpane" class="panel-collapse collapse in">
          <div class="panel-body">
              <div id="showgrid" class="show-grid">

              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mini-submenu mini-submenu-left pull-left">
  <i class="fa fa-list-alt"></i>
</div>
<div class="mini-submenu mini-submenu-right pull-right">
  <i class="fa fa-tasks"></i>
</div>
<div id="modalEnterSize" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Enter size of Grid</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="unit">Unit</label>
                  <select id="unit" class="form-control">
                    <option value="0">Meters</option>
                    <option value="1">Km</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="width">Width</label>
                  <input type="text" class="form-control" id="width" value="10000">
                </div>
                <div class="form-group">
                  <label for="height">Height</label>
                  <input type="text" class="form-control" id="height" value="10000">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_cancel" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_ok" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div id="modalEditAreaSurvey" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Properties of area</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="unit">Select for survey</label>
                  <select id="unit" class="form-control">
                    <option value="0">False</option>
                    <option value="1">True</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="width">Description</label>
                  <input type="text" class="form-control" id="area_description">
                </div>
                <div class="form-group">
                  <label for="height">Assign Employee</label>
                  <input type="text" class="form-control" id="area_assignemployee">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_cancel" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_ok_modalarea" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('js/pages/map.js') }}"></script>
<script type="text/javascript">
  var pro_id = {{$pro_id}};
  var url_addResearchingArea = "{{route('addResearchingArea')}}";
</script>
@endpush