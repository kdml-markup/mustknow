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
        <div class="content-wrapper f2">
           <div class="faq_content_top c_outside">
                <h2><span>콘텐츠 요청</span></h2>
                <ul>
                	<li>
                		<span>콘텐츠 요청은 머스트노우에서 제공하는 서비스로, 머스트노우 회원이시면 누구든지 요청하실 수 있고, ‘글쓴이’는 회원의 성만 보여집니다.</span>
                	</li>
                	<li>
                		<span>‘공감’이 많은 요청을 채택하여 링크를 달아드립니다. 채택된 요청은 나의 알림함을 통해 알려드립니다.</span>
                	</li>
                	<li>
                		<span>개인 정보 유출, 욕설 및 도배, 광고, 기타 법령에 위배되는 게시물은 관련 법률 약관에 따라 삭제하거나 회원 자격을 제한 . 정지 . 박탈할 수 있습니다.</span>
                	</li>
                </ul>
           </div>
           <div class="content main" style="padding-top: 44px;">        	
           		<div class="faq_sch">
           			<div class="sch_filter">
	                	<div class="sch_area">
	                		<input type="text" placeholder="검색어를 입력하세요.">
	                	</div>
	                	<div class="filter_area">
	                		<div class="list-type _list-type">
	                			<a href="#" class="wrt_request">
	                				<span data-toggle="modal" data-target="#txtover">새 글 작성하기</span>
	                			</a>
	                			<div class="sort">
	                                <select class="select2" style="width: 100%;">
	                                  <option selected="selected">작성일순</option>
	                                  <option>공감순</option>
	                                  <option>조회순</option>
	                                </select>
	                            </div>
	                		</div>
	                	</div>
	                </div>
           		</div>
               
                <?
                    $type = "t14"; //체크앤팁 t3
                    $array = array(
                        array(
                            "title"=>"상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법?",
                            "date"=>"2016-05-30",
                            "txt"=>"우선 상호계산이란 상인간 또는 상인비상 인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의 총 경우에 일정한 기간의 거래로 채권·채무의 총"
                        ),
                        array(
                            "title"=>"계약 기간은 다 돼가고 장사는 더 하고 싶을 때",
                            "date"=>"2016-05-29",
                            "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고싶다. 난 어떤 조치를 해야 하나?"
                        ),
                        array(
                            "title"=>"내부자들과 영업비밀",
                            "date"=>"2016-05-28",
                            "txt"=>"작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고"
                        ),
                        array(
                            "title"=>"분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?",
                            "date"=>"2016-05-27",
                            "txt"=>"향후 법적 분쟁과정에서는, 권리자가 상대방에서 어떤 사전 조치를 취했는지가 객관적으로 증명되는 것이 중요하다..."
                        ),
                        array(
                            "title"=>"디즈니가 스타워즈를 인수할 수 있었던 비결",
                            "date"=>"2016-05-26",
                            "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고 싶다. 난 어떤 조치를 해야 하나?"
                        ),
                        array(
                            "title"=>"스톡옵션을 줄려고 할 때 반드시 알아야 할 6가지",
                            "date"=>"2016-05-26",
                            "txt"=>"스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...?"
                        )
                    );
                 ?>
                 
                 
                <!--[D] card view -->
                <div role="main">
                  <ul class="tiles-wrap _tiles-wrap">
                  	<li class="request_none" style="display: none;>
                  		<span>검색 결과가 없습니다.</span>
                  	</li>
                     <?
                        $count = 0;
                        while(++$count <= 20){ 
                            $i = rand(0,5);
                    ?>
                    <li class="<? echo $type ?>" data-date="<? echo $array[$i]['date'] ?>" data-popularity="<? echo $array[$i]['impt'] ?>" data-issue="부동산" >
                        <h3><a href="#"><? echo mb_strimwidth($array[$i]['title'],'0','57',"...","utf-8"); ?></a></h3>
                        <p><a href="#"><? echo mb_strimwidth($array[$i]['txt'],'0','120',"...","utf-8"); ?></a></p>
                        <span>유**</span><span class="name">&nbsp;&nbsp;|&nbsp;&nbsp;<em class="on"></em>&nbsp;999</span><span class="date">&nbsp;&nbsp;|&nbsp;&nbsp;<? echo $array[$i]['date'] ?></span>
                    	<em class="link">
                    		<div class="link_popup" style="display: none;">
                    			<div class="title">
	                    			<em><strong>사례해설 · </strong>부동산</em>
	                    			<h4>상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법은 무엇인가요?</h4>
	                    			<div class="info">
				                        <ul>
				                            <li><em>발행일</em>2015-11-14</li>
				                            <li><em>조회수</em>354</li>
				                            <li><em>중요도</em>3</li>
				                        </ul>
				                    </div>
	                    			<div class="author">
				                        <ul>
				                            <li><img src="../../dist/img/author.png" alt="작성자 사진"><em>작성자</em><strong>박진만</strong></li>
				                            <li><img src="../../dist/img/author.png" alt="감수자 사진"><em>감수자</em><strong>박진만</strong></li>
				                        </ul>
				                    </div>
				                    <a href="#" class="close"><img src="../../dist/img/bnt_delete.png" /></a>
				                   </div>
				                   <div class="article">
				                   		<p>사례</p>
				                   		<span>계속적 거래관계가 있는 A업체와는 현재 상호계산계약관계에 있습니다. 얼마 전에 A업체 에 대하여 금전채권을 가지고 있는 B업체로부터 채권을 양수하였는데, 해당 채권을 별도로 A업체에 대하여 행사할 수 있는지 궁금합니다. 아니면 양사가 상호계산계약관계에 있으므로 해당 채권 역시 상호계산범위로 포함되어 계상되는 것인가요?</span>
				                   		<p>결론</p>
				                   		<span>B업체로부터 양수한 채권을 A업체에 대하여 별도로 행사할 수 있습니다. 제3자로부터 양수한 채권 즉, 귀사가 B업체로부터 양수한 채권은 거래로 발생한 채권에 해당하지 않으므 로 상호계산이 대상이 되지 않기 때문입니다. 즉, 귀사가 B업체로부터 양수한 채권은 거래로 발생한 채권에 해당되지 않습니다.</span>
				                   		<p>해설</p>
				                   		<span>우선 상호계산이란 상인간 또는 상인·비상인간에 계속적인 거래관계가 있는 경우에 일 정한 기간의 거래로 채권·채무의 총액에 관하여 상계(相計)하고 그 잔액을 지급할 것을 약정하는 계약을 의미합니다(상법 제72조). 상사거래에 있어 일정한 기간 거래가 계속될 때 개개의 거래시마다 대금결제를 하여야 한다면 불편할 수 있으므로 일정한 시기에 그 총액을 계상하여 결제할 수 있도록 하는 것입니다. 즉, 기간을 정한 때에는 그 기간마다, 기간을 정하지 아니한 때에는 6개월마다 총액을 계상하여 결제하면 되는 것입니다.
만약 귀사가 B업체로부터 받은 금전채권이 상호계산의 대상에 해당하게 된다면 상호 계산의 범위로 포함되어 계상되는 것이고, 해당 채권만 별도로 행사하지 못할 것입니 다. 그러나 상호계산의 대상이 되는 것은 일정기간 동안의 거래로 발생한 채권입니다. 제3자로부터 양수한 채권 즉, 귀사가 B업체로부터 양수한 채권은 거래로 발생한 채권 에 해당하지 않으므로 상호계산이 대상이 되지 않는 것입니다. 사무관리, 부당이득, 불법행위 등으로 인한 법정 채권과 어음 채권, 그리고 담보부 채권도 역시 상호계산의 대상에 해당하지 않습니다. 어음 기타의 상업증권의 경우에는 채무자가 변제하지 않을 때에 당사자자 그 항목을 예외적으로 상호계산에서 제거할수 있다는 것이 상법의 태도입니다. 그러므로 A업체로부터 받은 어음의 기한이 지났 음에도 불구하고 A업체가 대금을 변제하지 않았다면 질의주신 사안과 동일하게 어음 채권을 별도로 A업체에 대하여 행사하실 수 있으니 참고하시기 바랍니다.</span>
				                   	</div>
                    		</div>
                    	</em>
                    	<div class="card_preview" style="display: none;">
		                  	<h3><? echo mb_strimwidth($array[$i]['title'],'0','57',"...","utf-8"); ?></h3>
		                    <p><? echo mb_strimwidth($array[$i]['txt'],'0','120',"...","utf-8"); ?></p>
		                    <span>유**</span><span class="name">&nbsp;&nbsp;|&nbsp;&nbsp;<em class=""></em>&nbsp;999<i class="request_agree already" style="display: none;"></i></span><span class="date">&nbsp;&nbsp;|&nbsp;&nbsp;<? echo $array[$i]['date'] ?></span>
		                	<em class="link"></em>
	             	    </div>
                    </li>
                    <? } ?>
                    <li class="list-empty" style="display:none">검색결과가 없습니다.</li>
                    <!-- End of grid blocks -->                    
                  </ul>
                  
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination">
                        <!--[D] 검색시 back버튼 -->
                        <a href="#" class="history">이전 목록으로 돌아가기</a>
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
                </div>                    
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/cs-footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    	<!-- 새글쓰기 -->
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content write_request_popup">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">새 글 작성하기</h4>
            <a href="#" class="req_contents"><span>콘텐츠 요청</span></a>
          </div>
          <div class="modal-body">
          	<p>글쓴이</p><span>박**</span>
          	<input type="text" name="name" placeholder="제목을 입력해주세요">
          	<div class="letter_count"><span>0</span>&nbsp;/&nbsp;50자</div>
          	<textarea placeholder="질문사항을 입력해주세요."></textarea>
          	<div class="letter_count"><span>0</span>&nbsp;/&nbsp;1000자</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">전송</button>
          </div>
        </div>
      </div>
    </div>
    
    	<!-- 로그인하세요 -->
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content termspopup">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">로그인 해주세요.</h4>
          </div>
          <div class="modal-body">
            콘텐츠 요청의 새 글 작성하기는 로그인 상태에서 가능합니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    	<!-- 글자수초과 -->
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content termspopup">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">글자수를 초과하였습니다.</h4>
          </div>
          <div class="modal-body">
            최대 500자로 수정해주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    	<!-- 콘텐츠 요청 완료 -->
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content termspopup">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">콘텐츠 요청이 완료되었습니다..</h4>
          </div>
          <div class="modal-body">
            '공감'이 많은 요청을 채택하여 링크를 달아드립니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
            
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