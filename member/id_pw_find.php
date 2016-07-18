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
        <div class="content-wrapper cscenter_wrap login_wrap join_wrap find_wrap signup_form f2">
           <div class="faq_content_top">
                <h2><span>아이디 &amp; 패스워드 찾기</span><strong>Find your ID &amp; Password</strong></h2>
           </div>
           <div class="content main">                
           		<div class="left-col">
           			<h3>아이디 찾기</h3>
           			<div class="acocuntBox acocuntBox1">
	           			<p>이름
	           				<span class="incorrect">이름을 입력해주세요.</span>     
	           				<span class="incorrect">등록된 이름이 아닙니다. 다시 한 번 확인해주세요.</span>     
	           			</p>
	           			<input class="c_outside" type="text" id="user_id" placeholder="이름을 입력해주세요.">
           				<p>이메일주소
	           				<span class="correct">인증번호가 전송되었습니다.</span>
	           				<span class="incorrect">이메일 주소를 입력해주세요.</span>    
	           				<span class="incorrect">등록된 이메일 주소가 아닙니다. 다시 한 번 확인해주세요.</span>    
		           		</p>
	           			<div class="certify">
	           				<input class="c_outside" type="text" id="user_id" placeholder="가입시 등록하신 이메일 주소를 입력해주세요.">
	           				<a href="#" class="send_code" data-toggle="modal" data-target="#certify">인증번호 발송</a>
	           			</div>           			
	           			<p>이메일 인증번호
	           				<span class="correct">인증번호 입력시간 00:59:33</span>
	           				<span class="correct">인증이 완료되었습니다.</span>
	           				<span class="incorrect">인증번호 입력시간이 초과되었습니다.</span>     
	           				<span class="incorrect">인증번호 입력이 잘못되었습니다. 다시 인증해주세요.</span>    
	           			</p>
	           			<input class="c_outside" type="text" id="user_id" placeholder="이메일로 전송된 인증번호를 정확하게 입력해주세요.">
	           			<a href="#" class="btn_c1">아이디 찾기</a>
	           		</div>
           		</div>           		
           		<div class="right-col">
           			<h3>비밀번호 찾기</h3>
       				<div class="acocuntBox acocuntBox1">
       					<p>아이디
	           				<span class="incorrect">아이디를 입력해주세요.</span>     
	           				<span class="incorrect">등록된 아이디가 아닙니다. 다시 한 번 확인해주세요.</span>
	           			</p>
	           			<input class="c_outside" type="text" id="user_id" placeholder="아이디를 입력해주세요.">
	           			<p>이메일주소
	           				<span class="correct">인증번호가 전송되었습니다.</span>
	           				<span class="incorrect">이메일 주소를 입력해주세요.</span>    
	           				<span class="incorrect">등록된 이메일 주소가 아닙니다.</span>    
		           		</p>
	           			<div class="certify">
	           				<input class="c_outside" type="text" id="user_id" placeholder="가입시 등록하신 이메일 주소를 입력해주세요.">
	           				<a href="#" class="send_code" data-toggle="modal" data-target="#certify">인증번호 발송</a>
	           			</div>           			
	           			<p>이메일 인증번호
	           				<span class="correct">인증번호 입력시간 00:59:33</span>
	           				<span class="correct">인증이 완료되었습니다.</span>
	           				<span class="incorrect">인증번호 입력시간이 초과되었습니다.</span>     
	           				<span class="incorrect">인증번호 입력이 잘못되었습니다. 다시 인증해주세요.</span>    
	           			</p>
	           			<input class="c_outside" type="text" id="user_id" placeholder="이메일로 전송된 인증번호를 정확하게 입력해주세요.">
		           		<a href="#" class="btn_c1">비밀번호 찾기</a>
	           		</div>
           		</div>
               
        </div><!-- /.content-wrapper -->
    
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