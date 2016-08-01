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
        <div class="content-wrapper cscenter_wrap f2 notice_wrap">
           <div class="faq_content_top">
                <h2><span>공지사항</span></h2>
           </div>
           <div class="content main">
               <div class="sch_filter">
                	<div class="sch_area">
                		<input type="text" placeholder="검색어를 입력하세요."/>
                	</div>
                	<div class="filter_area">
                		<div class="list-type _list-type">
                			<!-- <ul>
                				<li class="card" style="margin-right: 8px;">
                					<a href="#"><em>썸네일형</em></a>
                				</li>
                				<li class="list on">
                					<a href="#"><em>리스트형</em></a>
                				</li>
                			</ul> -->
                			<div class="sort">
                                <select class="select2" style="width: 100%;">
                                  <option selected="selected">작성일순</option>
                                  <option>조회순</option>
                                  <option>제목순</option>
                                </select>
                            </div>
                		</div>
                	</div>
                </div>	
                <?
                    $type = "t3"; //체크앤팁 t3
                    $array = array(
                        array(
                            "title"=>"상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법?",
                            "date"=>"2016-05-30",
                            "impt"=>"3",
                            "count"=>"20",
                            "txt"=>"우선 상호계산이란 상인간 또는 상인비상 인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의 총 경우에 일정한 기간의 거래로 채권·채무의 총"
                        ),
                        array(
                            "title"=>"계약 기간은 다 돼가고 장사는 더 하고 싶을 때",
                            "date"=>"2016-05-29",
                            "impt"=>"10",
                            "count"=>"1",
                            "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고싶다. 난 어떤 조치를 해야 하나?"
                        ),
                        array(
                            "title"=>"내부자들과 영업비밀",
                            "date"=>"2016-05-28",
                            "impt"=>"7",
                            "count"=>"15",
                            "txt"=>"작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고"
                        ),
                        array(
                            "title"=>"분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?",
                            "date"=>"2016-05-27",
                            "impt"=>"7",
                            "count"=>"120",
                            "txt"=>"향후 법적 분쟁과정에서는, 권리자가 상대방에서 어떤 사전 조치를 취했는지가 객관적으로 증명되는 것이 중요하다..."
                        ),
                        array(
                            "title"=>"디즈니가 스타워즈를 인수할 수 있었던 비결",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"7",
                            "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고 싶다. 난 어떤 조치를 해야 하나?"
                        ),
                        array(
                            "title"=>"스톡옵션을 줄려고 할 때 반드시 알아야 할 6가지",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"156",
                            "txt"=>"스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...?"
                        )
                    );
                 ?>
                 <!--[D] list view -->
                 <div class="table-list">
                    <table>
                        <caption>체크앤팁</caption>
                        <colgroup>
                            <col width="86px">
                            <col />
                            <col width="108px" />
                            <col width="82px" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col"><span>no.</span></th>
                                <th scope="col"><span>제목</span><em class="controller"></em></th>
                                <th scope="col"><span>발행일</span><em class="controller"></em></th>
                                <th scope="col"><span>조회수</span><em class="controller"></em></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="display: none;">
                                <td class="list-empty" colspan="4">
                                    <span>검색결과가 없습니다.</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="important_notice"><span></span></td>
                                <td class="title"><a href="#">2016년 11월 11일부터 머스트노우 회원 가격 및 접속 정책이 변경 됩니다 2016년 11월 11일부터 머스트노우 회원 가격 및 접속의정책이가...<strong class="new_banner"></strong></a></td>
                                <td class="td-type-1"><span>2016-05-26</span></td>
                                <td class="td-type-1"><span>27</span></td>
                            </tr>
                            <tr class="notice_content" style="display: none;">
                            	<td colspan="4">                            		
		       						<div id='answer_<?=$count?>'>
		       							<span class="icon_re"></span>
		       							<p>법인회원은 개인사업자 또는 법인명의의 회원을 말하며,  사업체명의 세금계산서가 꼭 필요하신 곳이라면 반드시 법인회원으로 가입해 주셔야 합니다. 법인회원은 추가 내부이용자를 위한 서브(SUB)아이디를 만들 수 있으며, 서브(SUB)아이디 관리를 위한 별도의 관리자페이지가 제공됩니다. 개인회원이 법인회원으로 전환하기를 원하시면 아래 연락처로 전화를 주시면 바로 처리해 드립니다. </p>
		       						</div>
                            	</td>
                            </tr>
                            <?                     
                            $count = 0;
                            while(++$count <= 16){ 
                                $i = rand(0,5);
                            ?>
                            <tr>
                                <td class="td-type-1"><span>9,999</span></td>
                                <td class="title"><a href="#"><? echo $array[$i]['title'] ?></a></td>
                                <td class="td-type-1"><span><? echo $array[$i]['date'] ?></span></td>
                                <td class="td-type-1"><span><? echo $array[$i]['count'] ?></span></td>
                            </tr>
                            <? } ?>
                        </tbody>
                     </table>
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