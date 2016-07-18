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
        <div class="content-wrapper cscenter_wrap login_wrap terms join_wrap action_wrap">
           <div class="faq_content_top">
                <h2><span>회원가입</span><strong>Register</strong></h2>
           </div>
           <div class="content main">                
           		<div class="col">
           			<h3>약관동의</h3>
           			<div class="acocuntBox">
           				<div class="terms_wrap">
           					<p class="terms_agree_all">
           						<span class="checkbox">
			                		<input type="checkbox" id="chk_all" value="">
			                		<label for="chk_all">
			                			<i></i>
			                			<span>서비스 이용약관, 개인정보 수집 및 이용에 대한 안내, 이벤트 / 프로모션 알림 메일 수신(선택)에 모두 동의합니다.</span>
			                		</label>
			                	</span>
           					</p>
           					<ul class="terms_list">
           						<li>
	           						<span class="checkbox">
				                		<input type="checkbox" id="terms1" value="">
				                		<label for="terms1">
				                			<i></i>
				                			<span>서비스 이용약관<em class="necessary">&nbsp;(필수)</em></span>
				                		</label>
				                	</span>
           							<div class="tems_content">
           							</div>
           						</li>
           						<li>
	           						<span class="checkbox">
				                		<input type="checkbox" id="terms2" value="">
				                		<label for="terms2">
				                			<i></i>
           									<span>개인정보 수집 및 이용에 대한 안내<em class="necessary">&nbsp;(필수)</em></span>
           								</label>
           							</span>
           							<div class="tems_content">
           							</div>
           						</li>
           					</ul>
           					<p class="terms_opt">
           						<span class="checkbox">
			                		<input type="checkbox" id="chk_opt" value="">
			                		<label for="chk_opt">
			                			<i></i>
			                			<span>이벤트 / 프로모션 알림 메일 수신<em class="optional">&nbsp;(선택)</em></span>
			                		</label>
			                	</span>
           					</p>
           				</div>
           			</div>
           		</div>
                <div class="action">
                	<div class="btnWrap">
	                	<a href="" class="act_btn g_btn">취소</a>
	                	<a href="" class="act_btn b_btn" data-toggle="modal" data-target="#txtover">다음 단계</a>
	                </div>
                </div>
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm termspopup">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">약관에 동의해주세요.</h4>
          </div>
          <div class="modal-body">
            가입을 위해 약관을 확인하시고 동의해주세요.
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
     
    $('#auto_login').change(function() {
    	
        if($(this).is(':checked')){
        	$($(this).parent()).removeClass("checked");
        }
        else{
        	$($(this).parent()).addClass("checked");
        }
	});
	
	$('#chk_all').change(function() {
    	
        if($(this).is(':checked')){
        	$($(this).parent()).removeClass("checked");
        }
        else{
        	$($(this).parent()).addClass("checked");
        }
	});
	
	$('#terms1').change(function() {
    	
        if($(this).is(':checked')){
        	$($(this).parent()).removeClass("checked");
        }
        else{
        	$($(this).parent()).addClass("checked");
        }
	});
	
	$('#terms2').change(function() {
    	
        if($(this).is(':checked')){
        	$($(this).parent()).removeClass("checked");
        }
        else{
        	$($(this).parent()).addClass("checked");
        }
	});
	
	$('#chk_opt').change(function() {
    	
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