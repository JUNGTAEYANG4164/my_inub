<?php
$link=mysqli_connect("localhost","jbts","wjdqhxhdtls1","jbts");
if (!$link)
{ echo "MySQL error : "; echo mysqli_connect_error(); exit(); }
mysqli_set_charset($link,"utf8");
$sql = "select * from pft";
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<!--라이센스 설명-->
<html>
	<head>
		<title>SMART CITY</title> <!--사이트 최상단 제목-->
		<meta charset="utf-8" /> <!--문자셋을 utf-8로 인코딩한다-->
		<meta name="viewport" content="width=device-width, initial-scale=1" /> <!--화면 크기에 맞추어 조정-->
		<link rel="stylesheet" href="assets/css/main.css" /> <!--stylesheet로 main.css 파일을 assets/css 폴더에서 불러옴-->
		<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
		<!--flexsilder.css 파일을 css 폴더에서 불러옴 (슬라이더 사용을 위해)-->

		<!-- 타 브라우저 -->
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
<body>

		<!-- 헤더 -->
			<div id="header">
				<div class="top">
					<!-- 사이드바 최상단 설정 -->
						<div id="logo">
							<h1 id="title">DATABASE</h1>
							<p>SMART CITY</p>
						</div>

					<!-- Nav -->
					<!-- 네비게이션 링크로 구성된 섹션임 -->
						<nav id="nav">
							<!--
								(설정하기 위한 두가지 방식)
								Prologue's nav expects links in one of two formats:
								1. Hash link (scrolls to a different section within the page)
								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>
								2. Standard link (sends the user to another page/site)
								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
							-->
							<ul>		
								<!-- 사이드바 부분

									hypertext reference. 즉, 참조해서 쓰기 위해 사용하는 것임
									각 조를 구별하기 위해 사용
									banner - 초기 화면 (슬라이더)
									park - 스마트 파크, farm - 스마트 팜, home - 스마트 홈, mar - 스마트 마켓, 
									sch - 스마트 스쿨, com - 스마트 컴퍼니, plot - 스마트 주차장, pft - 무인 체력장
								-->	
								<li><a href="secdb.php" id="park-link" class="skel-layers-ignoreHref"><span class="icon fa-tree">Smart Secretary</span></a></li>
								<li><a href="farmdb.php" id="farm-link" class="skel-layers-ignoreHref"><span class="icon fa-pagelines">Smart Farm</span></a></li>
								<li><a href="homedb.php" id="home-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Smart Home</span></a></li>
								<li><a href="mardb.php" id="mar-link" class="skel-layers-ignoreHref"><span class="icon fa-shopping-cart">Smart Market</span></a></li>
								<li><a href="schdb.php" id="sch-link" class="skel-layers-ignoreHref"><span class="icon fa-graduation-cap">Smart School</span></a></li>
								<li><a href="comdb.php" id="com-link" class="skel-layers-ignoreHref"><span class="icon fa-building">Smart Company</span></a></li>
								<li><a href="plotdb.php" id="plot-link" class="skel-layers-ignoreHref"><span class="icon fa-product-hunt">Smart Parking lot</span></a></li>
								<li><a href="#pft" id="pft-link" class="skel-layers-ignoreHref"><span class="icon fa-heartbeat">Unnamed PFT</span></a></li>
							</ul>
						</nav>
				</div>
			</div>
			<style>
					table {
						width: 100%;
						border: 3px solid #444444;
						border-collapse: collapse;
					}
					tr, td {
						border: 3px solid #444444;
					}
					</style>
		<!-- Main -->
			<div id="main">
					<!-- 스마트 컴퍼니 -->
					<section id="mar">
						<div class="container">
							<header>
								<!-- 조명 및 조원-->
								<h2>
									<strong>Unmanned PFT</strong>
								</h2>
							</header>
							<table cellSpacing=1 bgColor=#ced4da>

									<tr> <td> event</td> 
									<td>userID</td>
									<td> time</td> <tr>
										<?	while($row=mysqli_fetch_array($result)){ ?>
											<tr> 
												<td> <?=$row[0]?></td> 
												<td> <?=$row[1]?></td>
												<td>  <?=$row[2]?></td>
											</tr>
										<?
										}
										?>
								</tr> </tr>
							</table>

						<!-- 작품 소개 및 설명-->
						<p>
						event : 종목 구분 </br>
						userID : 고객 ID 값</br>
						time : 활동한 시간 체크</br>					
						</p>
					<a href="down.php">파일 다운받기</a>
					<div>
					<a href="index.html#pft">
						<img src="image/pft_off.png"
						onmouseover='this.src="image/pft_ex.png"'
						onmouseout='this.src="image/pft_off.png"'/>
						
					</div>
					</section>
					
			</div>
		<!-- Footer 설정 -->
		<div id="footer">
			<!-- Copyright 설정-->
			<ul class="copyright">
				<li>&copy; 2018. 인천전자마이스터고 정보통신기기과 정태양, 노하늘, 노예원, 박재환, 천예준. All rights reserved.</li><li>Design : <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollzer.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		
		<!-- FlexSlider -->
		<script defer src="assets/js/jquery.flexslider.js"></script>

		<script type="text/javascript">
			$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				$('body').removeClass('loading');
				}
			});
			});
		</script>

		<!-- Syntax Highlighter -->
		<script type="text/javascript" src="assets/js/shCore.js"></script>
		<script type="text/javascript" src="assets/js/shBrushXml.js"></script>
		<script type="text/javascript" src="assets/js/shBrushJScript.js"></script>

		<!-- Optional FlexSlider Additions -->
		<script src="assets/js/jquery.easing.js"></script>
		<script src="assets/js/jquery.mousewheel.js"></script>
		<script defer src="assets/js/demo.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- TOP 버튼 설정 -->
		<style>
			.go_top {position:fixed; bottom:20px; right:10px; width:40px;height:40px;text-align:center;border-radius:40px;background-color:rgba(102,102,102,.7)}
			.go_top span {display:block;padding-top:5px;font-size:15px;color:#fff;}
		</style>
		<a class="top1" href="#"><div class="go_top"><span>TOP</span></div></a>

		<!-- TOP 버튼 관련 스크립트  -->
		<script>
			$(document).ready(function(){
				$(".top1").click(function(){
					return $("html, body").animate({scrollTop:0},300),!1})

				$(".top1").hide();

				$(function () {
					$(window).scroll(function () {
						if ($(this).scrollTop() > 100) {
							$('.top1').fadeIn('slow');
						} else {
							$('.top1').fadeOut('slow');
						}
					});
				});
			});
		</script>
	</body>
</html>