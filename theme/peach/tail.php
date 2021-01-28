<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>


<div id="ft">
    <div class="ft_wr">
        <div id="ft_copy">
            
            <div id="ft_logo">
                <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/imgs/mirisci_eng.png" style="width:180px;" alt="<?php echo $config['cf_title']; ?>"></a>
            </div>

            <div id="ft_company">
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
				<sapn>&nbsp|&nbsp 대표이사 : 이용재</sapan>
				<!--
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
				-->
            </div>
            Copyright &copy; <b>(주)미르이즈</b> All rights reserved.<br>
        </div>

        <div id="ft_contact">
            <ul>
                <li><a href="tel:02-325-6530"><i class="fa fa-phone"></i><span>02)325-6530</a></span></li>
                <li><a href="mailto:maruko@miris.co.kr"><i class="fa fa-envelope-o"></i><span>maruko@miris.co.kr</a></span></li>
                <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=location"><i class="fa fa-map-marker"></i><span>서울특별시 마포구 양화로 156, LG팰리스 1901호</a></span></li>

            </ul>
        </div>
    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>



<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>