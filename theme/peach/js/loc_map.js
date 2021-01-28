// content.skin.php 카카오맵 불러오기
var container = document.getElementById("map");
var options = {
    center: new kakao.maps.LatLng(37.556113, 126.923448),
    level: 2
};
var markerPosition  = new kakao.maps.LatLng(37.556113, 126.923448);
var marker = new kakao.maps.Marker({
    position: markerPosition
});
var mapTypeControl = new kakao.maps.MapTypeControl();
var zoomControl = new kakao.maps.ZoomControl();

var iwContent = '<div style="width:150px; height:30px; padding:5px;"><a href="http://kko.to/h6D28iP0M" target="_blank">(주)미르이즈</a></div>';

    iwPosition = new kakao.maps.LatLng(37.556113, 126.923448);
var infowindow = new kakao.maps.InfoWindow({
    position : iwPosition, 
    content : iwContent 
});

var map = new kakao.maps.Map(container, options);
    map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);
    map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);
marker.setMap(map);
infowindow.open(map, marker);
