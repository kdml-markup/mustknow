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
        <div class="content-wrapper writemail cscenter_wrap action_wrap f2">
           <div class="faq_content_top c_outside">
                <h2><span>문의메일 상담</span></h2>
                <ul>
                	<li>
                		<span>문의하신 내용의 답변은 마이페이지-나의 알림함-<a href="#">문의메일함</a>에서 확인하실 수 있습니다.</span>
                	</li>
                	<li>
                		<span>'메일주소로 답변받기'를 체크하시면 메일주소로 답변을 받으실 수 있습니다.</span>
                	</li>
                </ul>
           </div>
           <div class="content main">
           		<div class="lt_section">
           			<h3 class="c_outside">이름</h3>
           			<input class="c_outside" type="text" id="user_id" placeholder="홍길동 (admin001)" />
           			<h3 class="c_outside">메일 주소</h3>
           			<input class="c_outside" type="text" id="user_id" placeholder="TEST@testcompany.com" />
           			<h3 class="c_outside">문의 유형</h3>
                    <div>
                    	<span id="select_category" class="select_result">카테고리를 선택해주세요
                    		<span class="select_arrow"></span>
                    	</span>
                    	<ul id="ul_category" style="display:none; position:absolute; z-index:1000;">
                    		<li>
                    			<span>콘텐츠 문의</span>
                    		</li>
                    		<li>
                    			<span>회원정보 문의</span>
                    		</li>
                    		<li>
                    			<span>가입 / 결제 문의</span>                            		
                    		</li>
                    		<li>
                    			<span>제휴 / 광고 문의</span>
                    		</li>
                    		<li>
                    			<span>부동산</span>
                    		</li>
                    		<li>
                    			<span>지재권</span>                            		
                    		</li>
                    	</ul>
                    </div>
           		</div>           		
                <div class="rt_section c_outside">
                    <div class="section">
                        <h3>제목</h3>
                        <div>
                        	<input type="text" name="name" placeholder="제목을 입력해주세요" />
                        </div>
                        <div class="letter_count"><span>0</span>&nbsp;/&nbsp;100자</div>
                    </div>
                    <div class="section">
                        <h3>내용</h3>
                        <div>
                        	<textarea style="width:100%; min-width:655px;" placeholder="질문사항을 입력해주세요."></textarea>
                        </div>
                        <div class="letter_count"><span>0</span>&nbsp;/&nbsp;1000자</div>
                    </div>
                </div>               
                <div class="action c_outside">
                	<div class="checkbox">
                		<input type="checkbox" id="check_mail" value="" />
                		<label for="check_mail">
                			<i></i>
                			<span>메일주소로 답변받기</span>
                		</label>
                	</div>
                	<div class="btnWrap">
	                	<a href="" class="act_btn g_btn">취소</a>
	                	<a href="" class="act_btn b_btn" data-toggle="modal" data-target="#txtover">작성</a>
	                </div>
                </div>
    	    </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/cs-footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">문의메일을 전송하시겠습니까?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">전송</button>
          </div>
        </div>
      </div>
    </div>
    
     <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">글자수를 초과하였습니다.</h4>
          </div>
          <div class="modal-body">
          		최대 1000자로 수정해주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">전송</button>
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
    
    
	function faqList() 
	{ 
	   var obj = document.getElementById("answer"); 
	   if(obj.style.display != "block") 
	   { 
	      obj.style.display = "block"; 
	      document.getElementById("question"); 
	      } else { 
	      obj.style.display = "none"; 
	      document.getElementById("question"); 
	   }; 
	} 
    
    $(".c_outside").click(function(){
	     $('#ul_category').hide();                     
    });
     
    $('#check_mail').change(function() {
    	
        if($(this).is(':checked')){
        	$($(this).parent()).removeClass("checked");
        }
        else{
        	$($(this).parent()).addClass("checked");
        }
	});
    
    </script>
  </body>
</html>