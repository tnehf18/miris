<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<div class="slideshow-container" >
	<div class="mySlides fade">
		<img src="<?php echo G5_IMG_URL?>/imgs/main_1.jpg" style="width:100%;">
	</div>
	<div class="mySlides fade">
		<img src="<?php echo G5_IMG_URL?>/imgs/main_2.jpg" style="width:100%;">
	</div>
	<div class="mySlides fade">
		<img src="<?php echo G5_IMG_URL?>/imgs/main_3.jpg" style="width:100%;">
	</div>
</div>
<div class="idx_lt">
	<div class="v250 text_center">
		<h2 style="font-size: 4vmin;font-weight: 600;font-family: 'Nanum Gothic', sans-serif;">미르이즈는</h2>
		<p style="font-size: 3vmin;">항상 새로움을 꿈꾸며, 고객이 원하는 것이 무엇인가를 고민하고 또 고민합니다.</p>
		<p style="font-size: 3vmin;">고객과 저희가 함께 성장하는 것이 미르이즈의 바램이며 행복입니다.</p>
	</div>
</div>
<div class="idx_con">
    <ul>
        <li>
            <h2><img class="tmb" src="<?php echo G5_IMG_URL ?>/imgs/trust.png" /><span>성공적인 서비스</span></h2>
            <p>13년간의 축적된 기술력과 노하우를 바탕으로 <br>고객에게 신뢰와 믿음을 주는 서비스를 하겠습니다.</p>
        </li>
        <li>
            <h2><img class="tmb" src="<?php echo G5_IMG_URL ?>/imgs/technology.png" /></i><span>신기술 개발</span></h2>
            <p>부설연구소에서는 혁신적인 솔루션 개발을 위하여 <br>지속적인 연구활동을 추진하고 있습니다.</p>
        </li>   
         <li>
            <h2><img class="tmb" src="<?php echo G5_IMG_URL ?>/imgs/partnership.png" /><span>고객 감동</span></h2>
            <p>고객이 만족할 때까지 <br>끊임없는 노력과 최선을 다하겠습니다.</p>
        </li>   
    </ul>
</div>

<div class="clearfix"></div>

<div id="slider_wrapper" align="center">
  <div class="wrapper_title">
	<h2 style="font-size: 30px;font-weight: 600;color:#7f8c8d;">MAIN CLIENT</h2>
  </div>
  <div id="slider-wrap" style="max-width:1280px;">
	  <ul id="slider" >
		 <li>            
			<img src="<?php echo G5_IMG_URL?>/imgs/logo_1.jpg" style="width:100%;">
		 </li>
		 <li>
			<img src="<?php echo G5_IMG_URL?>/imgs/logo_2.png" style="width:100%;">
		 </li>
		 <li>            
			<img src="<?php echo G5_IMG_URL?>/imgs/logo_3.png" style="width:100%;">
		 </li>
		 <li>            
			<img src="<?php echo G5_IMG_URL?>/imgs/logo_4.jpg" style="width:100%;">
		 </li>
	  </ul>
	  <!--controls-->
	  <div class="btns" id="next"><i class="fa fa-arrow-right"></i></div>
	  <div class="btns" id="previous"><i class="fa fa-arrow-left"></i></div>
   </div>
</div>


<!--  최신글 -->
<!-- 
<div class="idx_lt">
    <div class="idx_lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'notice', 4, 33);
        ?>

        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'free', 4, 33);
        ?>

		<?php
		// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
		// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
		// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
		echo latest('theme/basic', 'gallery', 6, 33);
		?>

        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>

    </div>
</div>
-->
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/index.css">
<script src="<?php echo G5_THEME_JS_URL ?>/index.js"></script>
<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>