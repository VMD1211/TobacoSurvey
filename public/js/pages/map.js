//init variable
var map, draw, source;
var format = new ol.format.WKT();
var wktRepresenation = null;
// select interaction working on "click"
var selectClick = new ol.interaction.Select({
  condition: ol.events.condition.click
});
//select interaction working on "dbclick"
var selectdbClick = new ol.interaction.Select({
  condition: ol.events.condition.doubleClick
});
selectClick.on('select', function(e) {
  console.log(e);
});
selectdbClick.on('select', function(e) {
  //console.log(e.selected[0]);
  e.selected[0].setProperties({"selected": true});
  console.log(e.selected[0].getProperties());
  $('#modalEditAreaSurvey').modal();
});

//
$(function(){
  $('#btn_ok').click(function(){
    if(wktRepresenation != null){
      var unit = $('#unit').val();
      var height = $('#height').val();
      var width = $('#width').val();
      //requestServerGet('http://localhost/surveyandgisv2/public/makegrid2d', {geo: wktRepresenation, unit: unit, height: height, width: width});
      addResearchingArea(url_addResearchingArea, {pro_id: pro_id, geo: wktRepresenation, unit: unit, height: height, width: width, _token: $('meta[name="csrf-token"]').attr('content')});
      $('#modalEnterSize').modal('hide');
    }
  });
  //
  $(".btn-group-tool > .btn").click(function(){
      $(".btn-group-tool > .btn").removeClass("active");
      $(this).addClass("active");
      console.log($(this)[0].id);
      activeButtonInGroup($(this)[0].id);
  });

  $('.sidebar-left .slide-submenu').on('click',function() {
    var thisEl = $(this);
    thisEl.closest('.sidebar-body').fadeOut('slide',function(){
      $('.mini-submenu-left').fadeIn();
      applyMargins();
    });
  });

  $('.mini-submenu-left').on('click',function() {
    var thisEl = $(this);
    $('.sidebar-left .sidebar-body').toggle('slide');
    thisEl.hide();
    applyMargins();
  });

  $('.sidebar-right .slide-submenu').on('click',function() {
    var thisEl = $(this);
    thisEl.closest('.sidebar-body').fadeOut('slide',function(){
      $('.mini-submenu-right').fadeIn();
      applyMargins();
    });
  });

  $('.mini-submenu-right').on('click',function() {
    var thisEl = $(this);
    $('.sidebar-right .sidebar-body').toggle('slide');
    thisEl.hide();
    applyMargins();
  });

  $(window).on("resize", applyMargins);

  map = new ol.Map({
    target: "map",
    layers: [
      new ol.layer.Tile({
        source: new ol.source.OSM()
      })
    ],
    view: new ol.View({
      center: [0, 0],
      zoom: 2
    })
  });

  //add draw interactive
  source = new ol.source.Vector({wrapX: false});

  var vector = new ol.layer.Vector({
    source: source
  });
  map.addLayer(vector);
  //action when click
  /*typeSelect.onchange = function() {
    map.removeInteraction(draw);
    addInteraction();
  };*/
  //

  /*map.addInteraction(selectClick);
  */
  applyInitialUIState();
  applyMargins();
});

// list function
//
function applyMargins() {
  var leftToggler = $(".mini-submenu-left");
  var rightToggler = $(".mini-submenu-right");
  if (leftToggler.is(":visible")) {
    $("#map .ol-zoom")
      .css("margin-left", 0)
      .removeClass("zoom-top-opened-sidebar")
      .addClass("zoom-top-collapsed");
  } else {
    $("#map .ol-zoom")
      .css("margin-left", $(".sidebar-left").width())
      .removeClass("zoom-top-opened-sidebar")
      .removeClass("zoom-top-collapsed");
  }
  if (rightToggler.is(":visible")) {
    $("#map .ol-rotate")
      .css("margin-right", 0)
      .removeClass("zoom-top-opened-sidebar")
      .addClass("zoom-top-collapsed");
  } else {
    $("#map .ol-rotate")
      .css("margin-right", $(".sidebar-right").width())
      .removeClass("zoom-top-opened-sidebar")
      .removeClass("zoom-top-collapsed");
  }
}

//
function isConstrained() {
  return $("div.mid").width() == $(window).width();
}

//
function applyInitialUIState() {
  if (isConstrained()) {
    $(".sidebar-left .sidebar-body").fadeOut('slide');
    $(".sidebar-right .sidebar-body").fadeOut('slide');
    $('.mini-submenu-left').fadeIn();
    $('.mini-submenu-right').fadeIn();
  }
}

//add Interaction for drawing on map
function addInteractionDraw(type) {
  draw = new ol.interaction.Draw({
    source: source,
    type: type
  });
  map.addInteraction(draw);
  draw.on('drawend', function(evt){
      drawing = true;
      drawing_feature = evt.feature;   
      wktRepresenation  = format.writeGeometry(drawing_feature.getGeometry());
      $("#modalEnterSize").modal();
  });
}
//
function addResearchingArea(url, params){
  $.post(url, params).done(function(data){
    console.log(data);
  });
}
//
function loadData(url, params){
  $.getJSON(url, params).done(function(data){
    console.log(data);
  });
}
//
function requestServerGet(url, params){
  $.getJSON(url, params )
  .done(function( data ) {
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        var feature = format.readFeature(data[i].st_astext, {
          dataProjection: 'EPSG:3857',
          featureProjection: 'EPSG:3857'
        });
        source.addFeature(feature);
      };
      map.removeInteraction(draw);
  });
}

//
function activeButtonInGroup(id){
  if(id == "btn_fullextent_tool"){

  }
  else if(id == "btn_drawcircle_tool"){
    addInteractionDraw('Circle');
  }else if(id == "btn_drawpolygon_tool"){
    addInteractionDraw('Polygon');
  }else if(id == "btn_chose_areasurvey_tool"){
    map.addInteraction(selectdbClick);
  }
}