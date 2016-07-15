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
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/plugins/select2/select2.full.min.js"></script>
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
        <div class="content-wrapper cscenter_wrap">
           <div class="faq_content_top">
                <h2><span>FAQ</span></h2>
                <ul>
                	<li>
                		<span>고객님들이 자주하는 질문을 모아놓았습니다. 검색창을 이용해보세요.</span>
                	</li>
                	<li>
                		<span>자주하는 질문으로 찾으시는 답변이 없을 경우, <a href="#">문의메일 상담</a>을 이용해보세요. </span>
                	</li>
                </ul>
           </div>
           <div class="content main">
               <div class="sch_filter">
                	<div class="sch_area">
                		<input type="text" placeholder="검색어를 입력하세요."/>
                	</div>
                	<!-- <div class="filter_area">
                		<div class="list-type _list-type">
                			<ul>
                				<li class="card" style="margin-right: 8px;">
                					<a href="#"><em>썸네일형</em></a>
                				</li>
                				<li class="list on">
                					<a href="#"><em>리스트형</em></a>
                				</li>
                			</ul>
                			<div class="sort">
                                <select class="select2" style="width: 100%;">
                                  <option selected="selected">조회순</option>
                                  <option>카테고리순</option>
                                  <option>중요도순</option>
                                  <option>제목순</option>
                                </select>
                            </div>
                		</div>
                	</div> -->
                </div>	
                
           		<div class="faq_result_list">
           			
           			<ul class="tabs">
       					<li class="active">
       						<a href="#">
       							<span>전체</span>
       						</a>
       					</li>
       					<li>
       						<a href="#">
       							<span>회원제도</span>
       						</a>
       					</li>
       					<li>
       						<a href="#">
       							<span>Data 서비스</span>
       						</a>
       					</li>
       					<li>
       						<a href="#">
       							<span>Form 서비스</span>
       						</a>
       					</li>
       					<li>
       						<a href="#">
       							<span>기업회원</span>
       						</a>
       					</li>
       					<li>
       						<a href="#">
       							<span>그룹사/협회</span>
       						</a>
       					</li>
       					<li>
       						<a href="#">
       							<span>개인정보 수정</span>
       						</a>
       					</li>
       					<li>
       						<a href="#">
       							<span>가입/탈퇴</span>
       						</a>
       					</li>
       				</ul>
       				
	                <?
	                    $array = array(
	                        array(
	                            "title"=>"[회원제도]",
	                            "txt"=>"무료회원/유료회원은 각각 어떤 서비스를 이용할 수 있나요?"
	                        ),
	                        array(
	                            "title"=>"[Data 서비스]",
	                            "txt"=>"“Data 서비스 결제 시 어떤 서비스를 받을 수 있나요?"
	                        ),
	                        array(
	                            "title"=>"[아이디/비밀번호찾기]",
	                            "txt"=>"아이디와 비밀번호를 잊어버렸어요. 어디에서 찾을 수 있나요?"
	                        ),
	                        array(
	                            "title"=>"[Form 서비스]",
	                            "txt"=>"제가 다니는 회사가 머스트노우의 전용회원으로 가입되어 있습니다. 어떻게 이용해야 하나요?"
	                        ),
	                        array(
	                            "title"=>"[그룹사/협회]",
	                            "txt"=>"그룹사와 협회에 따라 서비스를 받는 내용이 달라지나요?"
	                        ),
	                        array(
	                            "title"=>"[회원제도]",
	                            "txt"=>"회원등급 변경신청은 어디서 할 수 있나요?"
	                        ),
	                    );
	                 ?>
       				<ol class="faq_list_table">
       					<li class="none" style="display: none;">
       						<span>검색결과가 없습니다.</span>
       					</li>
                        <?                     
                        $count = 0;
                        while(++$count <= 16){ 
                            $i = rand(0,5);
                        ?>                 		
       					<li>
       						<div class="question" id='question_<?=$count?>' onclick='faqList(<?=$count?>)' style="cursor:pointer;">
       							<a>
       								<p><? echo $array[$i]['txt'] ?></p>
       								<span ><? echo $array[$i]['title'] ?></span>
       								<em class="arrow"></em>
       							</a>
       						</div>
       						<div class="answer" id='answer_<?=$count?>' style="display: none;">
       							<span class="icon_re"></span>
       							<p>법인회원은 개인사업자 또는 법인명의의 회원을 말하며,  사업체명의 세금계산서가 꼭 필요하신 곳이라면 반드시 법인회원으로 가입해 주셔야 합니다. 법인회원은 추가 내부이용자를 위한 서브(SUB)아이디를 만들 수 있으며, 서브(SUB)아이디 관리를 위한 별도의 관리자페이지가 제공됩니다. 개인회원이 법인회원으로 전환하기를 원하시면 아래 연락처로 전화를 주시면 바로 처리해 드립니다. </p>
       						</div>
       					</li>
                    	<? } ?>
       				</ol>
           			
           		</div>
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination">
                        <!--[D] 검색시 back버튼 -->
                        <!-- <a href="#" class="history">이전 목록으로 돌아가기</a> -->
                        <!--//[D] 검색시 back버튼 -->
                        <ul class="pagination">
                            <li class="goto first"><a href="#">처음으로</a></li>
                            <li class="goto pre"><a href="#">이전</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li class="goto next"><a href="#">다음</a></li>
                            <li class="goto end"><a href="#">끝으로</a></li>
                        </ul>
                    </div>
                  <!--// 페이지네이션 -->
               
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
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
        
	function faqList(_id) 
	{	
	   var obj = $("#answer_"+_id);
	   
	   $(".question").css("background-color", "#fff");
	   $($(".question").find(".arrow")).css("background-image", "url(../../dist/img/list_arrow.png)");
	   
	   if( obj.css('display') == 'block'){
	   		obj.hide();
	   }
	   else{
	   		$(".answer").hide()

	   		obj.show();
	   		$("#question_"+_id).css("background-color", "#fafafa");
	   		
	   		console.log($($("#question_"+_id).find(".arrow")));
	   		$($("#question_"+_id).find(".arrow")).css("background-image", "url(../../dist/img/list_arrow_opened.png)");
	   }
	}

    </script>
  </body>
</html>