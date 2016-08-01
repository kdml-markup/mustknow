<?php
session_start();
if(!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
    session_destroy();
}
$uid = $_SESSION['uid'];
$uname = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MustKnow</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/mustknow/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/mustknow/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/mustknow/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/mustknow/dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="/mustknow/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="/mustknow/plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <script src="/mustknow/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/mustknow/plugins/select2/select2.full.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="main hold-transition skin-blue sidebar-mini inside-land">
    <!-- <?php include("../pages/tpl/advertising.tpl"); ?> -->
    <div class="wrapper">

      <?php include("../pages/tpl/header.tpl");
            include("../pages/tpl/cs-aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper f2">
           <div class="content main" style="padding-top: 44px;">        	
           		<div class="faq_sch">
           			<div class="faq_filter">
	           			<span>
	           				<span id="select_category" class="current">FAQ 전체검색</span>
	           				<span class="arrow"></span>
	           			</span>
	           			<ul id="ul_category" class="">
	           				<li>
	           					<a href="#">FAQ 전체검색</a>
	           				</li>
	           				<li>
	           					<a href="#">회원제도</a>
	           				</li>
	           				<li>
	           					<a href="#">Data 서비스</a>
	           				</li>
	           				<li>
	           					<a href="#">Form 서비스</a>
	           				</li>
	           				<li>
	           					<a href="#">기업회원</a>
	           				</li>
	           				<li>
	           					<a href="#">그룹사/협회</a>
	           				</li>
	           				<li>
	           					<a href="#">개인정보수정</a>
	           				</li>
	           				<li>
	           					<a href="#">가입/탈퇴</a>
	           				</li>
	           			</ul>
	           		</div>
           			<div class="faq_input">
           				<input type="text" placeholder="검색어를 입력하세요." />
           				<button>
           					<span></span>
           				</button>
           			</div>
           		</div>
	        	
	        	<div class="faq_menu">
	        		<ul>
	        			<li>
	        				<a href="#">
	        					<img src="/dist/img/faq_menu1.png" />
	        				</a>
	        			</li>
	        			<li>
	        				<a href="#">
	        					<img src="/dist/img/faq_menu2.png" />
	        				</a>
	        			</li>
	        			<li>
	        				<a href="#">
	        					<img src="/dist/img/faq_menu3.png" />
	        				</a>
	        			</li>
	        			<li>
	        				<a href="#">
	        					<img src="/dist/img/faq_menu4.png" />
	        				</a>
	        			</li>
	        			<li>
	        				<a href="#">
	        					<img src="/dist/img/faq_menu5.png" />
	        				</a>
	        			</li>
	        			<li>
	        				<a href="#">
	        					<img src="/dist/img/faq_menu6.png" />
	        				</a>
	        			</li>
	        			<li>
	        				<a href="#">
	        					<img src="/dist/img/faq_menu7.png" />
	        				</a>
	        			</li>
	        		</ul>
	        	</div>
               
                <?
                    $array = array(
                        array(
                            "title"=>"회원제도",
                            "txt"=>"무료회원/유료회원은 각각 어떤 서비스를 이용할 수 있나요?"
                        ),
                        array(
                            "title"=>"Data 서비스",
                            "txt"=>"“Data 서비스 결제 시 어떤 서비스를 받을 수 있나요?"
                        ),
                        array(
                            "title"=>"아이디/비밀번호찾기",
                            "txt"=>"아이디와 비밀번호를 잊어버렸어요. 어디에서 찾을 수 있나요?"
                        ),
                        array(
                            "title"=>"Form 서비스",
                            "txt"=>"제가 다니는 회사가 머스트노우의 전용회원으로 가입되어 있습니다. 어떻게 이용해야 하나요?"
                        ),
                        array(
                            "title"=>"그룹사/협회",
                            "txt"=>"그룹사와 협회에 따라 서비스를 받는 내용이 달라지나요?"
                        ),
                        array(
                            "title"=>"회원제도",
                            "txt"=>"회원등급 변경신청은 어디서 할 수 있나요?"
                        ),
                    );
                 ?>
                 <!--[D] list view -->
                 <div class="faq_bestlist">                 	
                 	<ul>
                 		<li class="head">
                 			<div>
                 				<h4>FAQ - BEST
                 					<strong>15</strong>
                 				</h4>
                 				<span>가장 많이 묻는 질문을 모았습니다.</span>
                 			</div>
                 		</li>
                        <?                     
                        $count = 0;
                        while(++$count <= 15){ 
                            $i = rand(0,5);
                        ?>
                 		<li>
                 			<div>
                 				<a href="#">
                 					<dl>
                 						<dt><? echo $array[$i]['title'] ?></dt>
                 						<dd><? echo $array[$i]['txt'] ?></dd>
                 					</dl>
                 				</a>
                 			</div>
                 		</li>
                    	<? } ?>
                 	</ul>
                </div>
                
                <div class="faq_bottom">
                	<div class="request">
                		<div>
	                		<h4>콘텐츠 요청
	                			<strong>n</strong>
	                		</h4>
	                		<ul class="page">
	                			<li class="on">
	                				<a href="#">01</a>
	                			</li>
	                			<li>
	                				<a href="#">02</a>
	                			</li>
	                			<li>
	                				<a href="#">03</a>
	                			</li>
	                			<li>
	                				<a href="#">04</a>
	                			</li>
	                			<li>
	                				<a href="#">05</a>
	                			</li>
	                		</ul>
	                	</div>
	                	<div class="request_list">
	                		<ul>
	                			<li>
	                				<a href="#">	                					
				                		<p>이런 경우 너무너무 궁금해요.</p>
				                		<span>멜론을 샀지 또, 그 배드민턴을 눌렀다 영원히 내 과자를 못 했어  스마트폰을 우울했다 우리는 개를 거짓말 안치고 느꼈었다 내가... 몬스터를 눈물이 났으며, 언젠가 네가 마술을  눌렀었다 그 날 그녀의 쌌다지 그의 내 목소리를 주었나 보네요 음. 이 망가졌으며,  척추를 매우 질질 짰다지 저 치킨을 막았을 것이다 곧 너의 김밥을 고래고래 소리쳤어요 그 곳에서  백원을 맡았다 네 나를 싫어했었다 저 슬리퍼를 정말 테러하였다 이 가수를 아무말 없이 속삭였다지 너의 공포를 배웠길래  너구리를 연구했다 그리고 나의 지우개를 잘못 했으며, 한번 더 나는 진실을 정말 죽을만큼 사랑했다 너 자몽을 거짓말 안치고 보고 화가났구려 </span>
				                		<div>
				                			<span>유**</span>
				                			<span><em></em>999</span>
				                			<span>2016-01-20</span>
				                		</div>	                					
	                				</a>
	                			</li>
	                			<li>
	                				<a href="#">	                					
				                		<p>이런 경우 너무너무 궁금해요.</p>
				                		<span>멜론을 샀지 또, 그 배드민턴을 눌렀다 영원히 내 과자를 못 했어  스마트폰을 우울했다 우리는 개를 거짓말 안치고 느꼈었다 내가... 몬스터를 눈물이 났으며, 언젠가 네가 마술을  눌렀었다 그 날 그녀의 쌌다지 그의 내 목소리를 주었나 보네요 음. 이 망가졌으며,  척추를 매우 질질 짰다지 저 치킨을 막았을 것이다 곧 너의 김밥을 고래고래 소리쳤어요 그 곳에서  백원을 맡았다 네 나를 싫어했었다 저 슬리퍼를 정말 테러하였다 이 가수를 아무말 없이 속삭였다지 너의 공포를 배웠길래  너구리를 연구했다 그리고 나의 지우개를 잘못 했으며, 한번 더 나는 진실을 정말 죽을만큼 사랑했다 너 자몽을 거짓말 안치고 보고 화가났구려 </span>
				                		<div>
				                			<span>유**</span>
				                			<span><em></em>999</span>
				                			<span>2016-01-20</span>
				                		</div>	                					
	                				</a>
	                			</li>
	                			<li>
	                				<a href="#">	                					
				                		<p>이런 경우 너무너무 궁금해요.</p>
				                		<span>멜론을 샀지 또, 그 배드민턴을 눌렀다 영원히 내 과자를 못 했어  스마트폰을 우울했다 우리는 개를 거짓말 안치고 느꼈었다 내가... 몬스터를 눈물이 났으며, 언젠가 네가 마술을  눌렀었다 그 날 그녀의 쌌다지 그의 내 목소리를 주었나 보네요 음. 이 망가졌으며,  척추를 매우 질질 짰다지 저 치킨을 막았을 것이다 곧 너의 김밥을 고래고래 소리쳤어요 그 곳에서  백원을 맡았다 네 나를 싫어했었다 저 슬리퍼를 정말 테러하였다 이 가수를 아무말 없이 속삭였다지 너의 공포를 배웠길래  너구리를 연구했다 그리고 나의 지우개를 잘못 했으며, 한번 더 나는 진실을 정말 죽을만큼 사랑했다 너 자몽을 거짓말 안치고 보고 화가났구려 </span>
				                		<div>
				                			<span>유**</span>
				                			<span><em></em>999</span>>
				                			<span>2016-01-20</span>
				                		</div>	                					
	                				</a>
	                			</li>
	                		</ul>
	                	</div>
                	</div>
                	<div class="notice">
                		<div>
	                		<h4>공지사항
	                			<strong>n</strong>
	                		</h4>
	                		<ul>
	                			<li>
	                				<a href="#">
	                					<span>[7/20] 개인정보방침관련 공지사항</span>
	                				</a>
	                			</li>
	                			<li>
	                				<a href="#">
	                					<span>[7/20] 회원관련 공지사항입니다.</span>
	                				</a>
	                			</li>
	                			<li>
	                				<a href="#">
	                					<span>[7/20] 내부이용자가 열명이 넘는데요.</span>
	                				</a>
	                			</li>
	                			<li>
	                				<a href="#">
	                					<span>[7/20] 콘텐츠 업데이트에 대한</span>
	                				</a>
	                			</li>
	                			<li>
	                				<a href="#">
	                					<span>[7/20] 새로운 동영상강의가 업데이트 되었습니다.</span>
	                				</a>
	                			</li>
	                		</ul>
	                	</div>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/cs-footer.tpl");?>
       
    </div><!-- ./wrapper -->
            
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
    <script>
    $( ".tiles-wrap li .favorites" ).click(function() {
      $( this ).toggleClass( "on" );
    });
    $("._list-type li a").click(function(event){
        event.preventDefault();
        $("._table-list,._tiles-wrap").toggle();
        $(this).parents("ul").find("li").toggleClass( "on" );
    });
    //Initialize Select2 Elements
    $(".select2").select2({
        minimumResultsForSearch: -1
    });
    
    $('#select_category').click(function() {
        	
	       if($('#ul_category').css('display') == 'none'){
	       	  $('#ul_category').show();	
	       } else{
	       	  $('#ul_category').hide();
	       }
        });
        
    $('#ul_category li').click(function() {
       	$("#select_category").get(0).innerHTML = ( $(this).children().get(0).innerHTML+ '<span class="select_arrow"></span>');
       	$("#select_category").css("color", "#4f555e");
       	$('#ul_category').hide();
    });
    
    
    
    
    </script>
  </body>
</html>