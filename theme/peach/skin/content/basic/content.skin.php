<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?><h1>
    </header>

    <div id="ctt_con">
        <?php echo $str; ?>
    </div>

    <?php if(trim($co_id) == "location") {
        echo '<div class="map_wrapper" style="text-align:center;" align="center">';
        echo '<div id="daumRoughmapContainer1566901855403" class="root_daum_roughmap root_daum_roughmap_landing" style="margin: auto 0; display:inline-block;"></div>';
        echo '</div>';
    }
    ?>
</article>
<?php if(trim($co_id) == "location") {
    echo '<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>';
    echo '<script charset="UTF-8">';
    echo 'new daum.roughmap.Lander({';
    echo		'"timestamp" : "1566901855403",';
    echo		'"key" : "uuhd",';
    echo		'"mapWidth" : "1280",';
    echo		'"mapHeight" : "400"';
    echo '}).render();';
    echo '</script>';
}
?>