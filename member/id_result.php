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
        <div class="content-wrapper cscenter_wrap login_wrap join join_wrap f2">
           <div class="faq_content_top">
                <h2><span>아이디 &amp; 패스워드 찾기</span><strong>Find your ID &amp; Password</strong></h2>
           </div>
           <div class="content main">                
           		<div class="join_done">
           			<div class="acocuntBox acocuntBox1 find_result id_result">
           				<img src="/mustknow/dist/img/mailsent.png" />
           				<p>고객님의 아이디 정보를 알려드립니다.</p>
           				<span>김수진 고객님의 ID는  <strong>mustknow_022</strong>  입니다.</span>
           				<div class="find_result_btn">
           					<a href="id_pw_find.php" class="btn_c2">비밀번호 찾기</a>
		           			<a href="login.php" class="btn_c1">로그인</a>
		           		</div>
	           		</div>
           		</div>
               
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
            
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