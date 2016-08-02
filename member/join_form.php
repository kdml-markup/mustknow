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
    <?php include("../pages/tpl/advertising.tpl"); ?> 
    <div class="wrapper">

      <?php include("../pages/tpl/header.tpl");
            include("../pages/tpl/cs-aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper cscenter_wrap signup_form writemail join_wrap action_wrap f2">
           <div class="faq_content_top">
                <h2><span>회원가입</span><strong>Register</strong></h2>
           </div>
           <div class="content main">   
           		<div class="lt_section">
      		     	<h3>개인정보 입력</h3>             
           			<p>아이디<em class="asterisk">*</em>
           				<span class="correct">사용할 수 있는 아이디입니다.</span>
           				<span class="incorrect">아이디를 다시 입력해주세요.</span>
           			</p>
           			<input class="c_outside" type="text" id="user_id" placeholder="영문, 숫자로 구성된 아이디를 입력해주세요. (특수문자 입력 불가)">
           			<p>비밀번호<em class="asterisk">*</em>
           				<span class="correct">사용가능한 비밀번호입니다.</span>
           				<span class="incorrect">비밀번호를 다시 입력해주세요.</span>
           			</p>
           			<input class="c_outside" type="password" id="user_id" placeholder="8자리 이상 비밀번호를 입력해주세요.">
           			<p>비밀번호 확인<em class="asterisk">*</em>
           				<span class="correct">비밀번호가 일치합니다.</span>
           				<span class="incorrect">비밀번호가 일치하지 않습니다.</span>           				
           			</p>
           			<input class="c_outside" type="password" id="user_id" placeholder="8자리 이상 비밀번호를 입력해주세요.">
           			<p>사업자 유형<em class="asterisk">*</em>
           				<span class="notice">선택하신 사업자 유형에 따라 다른 콘텐츠를 제공합니다.</span>
           			</p>
                    <div>
                    	<span id="select_category" class="select_result">사업자 유형을 선택해주세요.
                    		<span class="select_arrow"></span>
                    	</span>
                    	<ul id="ul_category" style="display:none; position:absolute; z-index:1000;">
                    		<li>
                    			<span>개인 일반</span>
                    		</li>
                    		<li>
                    			<span>개인 사업자</span>
                    		</li>
                    		<li>
                    			<span>영업 담당자</span>                            		
                    		</li>
                    		<li>
                    			<span>구매 담당자</span>
                    		</li>
                    		<li>
                    			<span>법무 담당자</span>
                    		</li>
                    		<li>
                    			<span>법무 담당자</span>                            		
                    		</li>
                    	</ul>
                    </div>
                    <p>이름<em class="asterisk">*</em></p>
           			<input class="c_outside" type="text" id="user_id" placeholder="이름을 입력해주세요.">
           			<p>휴대전화<em class="asterisk">*</em></p>
                    <div class="phone_num">
                    	<span id="select_phone" class="select_phone">010
                    		<span class="select_arrow"></span>
                    	</span>
                    	<ul id="ul_phone">
                    		<li>
                    			<span>010</span>
                    		</li>
                    		<li>
                    			<span>011</span>
                    		</li>
                    		<li>
                    			<span>016</span>                            		
                    		</li>
                    		<li>
                    			<span>017</span>
                    		</li>
                    		<li>
                    			<span>018</span>
                    		</li>
                    		<li>
                    			<span>019s</span>                            		
                    		</li>
                    	</ul>
                    	<em>-</em>
						<input type="text" />
                    	<em>-</em>
						<input type="text" />
                    </div>
                    <p>이메일주소<em class="asterisk">*</em>
           				<span class="correct">인증번호가 전송되었습니다.</span>
           			</p>
           			<div class="certify">
           				<input class="c_outside" type="text" id="user_id" placeholder="이메일주소를 정확하게 입력해주세요.">
           				<a href="#" class="send_code" data-toggle="modal" data-target="#certify">인증번호 발송</a>
           			</div>           			
           			<p>이메일 인증번호<em class="asterisk">*</em>
           				<span class="correct">인증번호 입력시간 00:59:33</span>
           				<span class="correct">인증이 완료되었습니다.</span>
           				<span class="incorrect">인증번호 입력시간이 초과되었습니다.</span>     
           			</p>
           			<input class="c_outside" type="text" id="user_id" placeholder="이메일로 전송된 인증번호를 정확하게 입력해주세요.">
           		</div>
           		           
           		<div class="rt_section">
           			<h3>소속정보 입력</h3>
           			<p>소속명&nbsp;<em class="Optional">Optional</em></p>
           			<input class="c_outside" type="text" id="user_id" placeholder="소속명을 입력해주세요">
           			<p>부서&nbsp;<em class="Optional">Optional</em></p>
           			<input class="c_outside" type="text" id="user_id" placeholder="부서를 입력해주세요">
           			<p>직급&nbsp;<em class="Optional">Optional</em></p>
           			<input class="c_outside" type="text" id="user_id" placeholder="직급을 입력해주세요">
           		</div>
                <div class="action">
                	<span>
                		<em class="asterisk">*</em>표시가 있는 항목은 필수 입력 항목입니다. 가입 절차를 위해 반드시 입력해주세요.
                	</span>
                	<div class="btnWrap">
	                	<a href="" class="act_btn g_btn">취소</a>
	                	<a href="" class="act_btn b_btn" data-toggle="modal" data-target="#missing">가입</a>
	                </div>
                </div>
           	</div>
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/cs-footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade" id="certify" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm termspopup">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">인증번호가 발송되었습니다.</h4>
          </div>
          <div class="modal-body">
            가입시 등록했던 이메일 주소로 인증번호가 발송되었습니다.<br>유효 시간내에 인증번호를 입력해주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm" >확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="missing" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm termspopup">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">필수 입력 항목을 확인해주세요.</h4>
          </div>
          <div class="modal-body">
            <em class="asterisk">*</em>표시가 있는 항목은 필수 입력 항목입니다.<br>가입을 위해 누락된 정보를 확인하고 입력해주세요.
          </div>
          <div class="modal-footer">
            <a href="join_done.php" type="button" class="btn btn-confirm" >확인</a>
          </div>
        </div>
      </div>
    </div>
            
    <!-- Bootstrap 3.3.5 -->
    <script src="/mustknow/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/mustknow/dist/js/app.min.js"></script>
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
    
    $('#select_phone').click(function() {
        	
	       if($('#ul_phone').css('display') == 'none'){
	       	  $('#ul_phone').show();	
	       } else{
	       	  $('#ul_phone').hide();
	       }
        });
        
    $('#ul_phone li').click(function() {
       	$("#select_phone").get(0).innerHTML = ( $(this).children().get(0).innerHTML+ '<span class="select_arrow"></span>');
       	$("#select_phone").css("color", "#4f555e");
       	$('#ul_phone').hide();
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
    
    
    </script>
  </body>
</html>