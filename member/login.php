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
        <div class="content-wrapper cscenter_wrap login_wrap join_wrap">
           <div class="faq_content_top">
                <h2><span>로그인</span><strong>Login</strong></h2>
           </div>
           <div class="content main">
                
           		<div class="left-col">
           			<h3>로그인</h3>
           			<div class="acocuntBox acocuntBox1">
	           			<div>
	           				<label for="user_id">아이디</label>
	           				<em class="error" style="display: none;">아이디를 입력해주세요.</em>
	           				<em class="error" style="display: none;">등록된 아이디가 아닙니다. 다시 한 번 확인해주세요.</em>
	           				<input type="text" id="user_id" title="아이디를 입력해주세요." placeholder="아이디를 입력해주세요."/>
	           				<button type="button"id="userid_clear" tabindex="-1" onclick="$('#userid').val('')">아이디 입력값 삭제하기</button>
	           			</div>
	           			<div>
	           				<label for="password">비밀번호</label>
	           				<em class="error" style="display: none;">패스워드를 입력해주세요.</em>
	           				<em class="error" style="display: none;">패스워드가 일치하지 않습니다.</em>
	           				<input type="password" id="password" title="비밀번호를 입력해주세요." placeholder="비밀번호를 입력해주세요."/>
	           				<button type="button"id="userid_clear" tabindex="-1" onclick="$('#userid').val('')">아이디 입력값 삭제하기</button>
	           			</div>
	           			<div class="login_status">
	           				<div class="checkbox">
		                		<input type="checkbox" id="auto_login" value="">
		                		<label for="auto_login">
		                			<i></i>
		                			<span>로그인 상태 유지</span>
		                		</label>
		                	</div>
	   						<div class="ip_security">
	   							<img src="../../dist/img/icon_security.png" />
	   							<span>
	   								IP 보안
	   							</span>
	   							<!-- <strong>OFF</strong> -->
	   							<strong class="on">ON</strong>
	   						</div>
	           			</div>
	           			<a href="#" class="btn_c1">로그인</a>
	           		</div>
           		</div>
           		
           		<div class="right-col">
           			<div>
           				<h3>회원가입</h3>
           				<div class="acocuntBox acocuntBox2">
           					<p><em>*&nbsp;</em>아직 머스트노우에 가입하지 않으셨나요?</p>
           					<a href="#" class="btn_c2">회원가입</a>
           				</div>
           			</div>           			
           			<div>
           				<h3>아이디/비밀번호 찾기</h3>
           				<div class="acocuntBox acocuntBox3">
           					<p><em>*&nbsp;</em>아이디/비밀번호를 잊어버리셨나요?</p>
           					<a href="#" class="btn_c3">아이디/비밀번호 찾기</a>
           				</div>
           			</div>           			
           		</div>
               
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