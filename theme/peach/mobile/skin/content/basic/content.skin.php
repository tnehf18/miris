<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
$api_key = "1fabf5329aaecfe818fb5bda037d0344";
?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?><h1>
    </header>

    <div id="ctt_con">
        <?php echo $str; ?>
    </div>
    
    <?php if(trim($co_id) == "location") {
        echo '<div class="map_wrapper" style="margin:0 auto; max-width:1280px;" align="center">';
        echo '<div id="map" style="width:100%;height:400px; display:inline-block;"></div>';
        echo '</div>';
    } 
    ?>
</article>
<?php if(trim($co_id) == "location") {
echo '<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=' . $api_key . '"></script>';
echo '<script tyle="text/javascript" src="' . G5_THEME_JS_URL . '/loc_map.js"></script>';
} elseif(trim($co_id) == "project") {
echo '<script tyle="text/javascript" src="' . G5_THEME_JS_URL . '/project.js"></script>';
}
?>
