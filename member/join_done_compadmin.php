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
        <div class="content-wrapper cscenter_wrap login_wrap join join_wrap">
           <div class="faq_content_top">
                <h2><span>회원 가입 완료</span><strong>Registration successful</strong></h2>
           </div>
           <div class="content main">
                
           		<div class="join_done">
           			<div class="acocuntBox acocuntBox1">
           					<img src="../../dist/img/img_usertype2.png" />
           				<p>기업 회원가입을 축하드립니다.</p>
           				<span>기업 회원 가입이 완료되었습니다.<br>지금부터 머스트노우만의 서비스를 이용해보세요.</span>
	           			<a href="#" class="btn_c1">메인으로 이동</a>
	           		</div>
           		</div>
           		<div class="comp_signup_notice">
           			<span>*그룹사 또는 협회 가입에 대한 안내를 원하시나요?</span>
           			<a href="#" data-toggle="modal" data-target="#group_guide">그룹사 또는 협회 등록<i></i></a>
           		</div>
               
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade" id="group_guide" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm group_guide">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">그룹 설정 안내 가이드</h4>
            <span class="close">
            	<img src="../../dist/img/bnt_delete_02.png" />
            </span>
          </div>
          <div class="modal-body">
          	<ul>
          		<li>그룹 생성은 최소 2개 이상의 법인이 있어야 가능합니다.</li>
          		<li>그룹 설정은 기업의 그룹사나 협회를 생성하여 서비스를 이용할 수 있습니다.</li>
          		<li>그룹사 / 협회 설정은 기업관리자 패널 내에서 진행이 가능합니다. ( 그룹 생성 / 탈퇴 등 )</li>
          		<li>기업관리자이면서 동시에 그룹관리자가 되었을 시 그룹 탈퇴 규정을 준수하셔야 합니다.</li>
          		<li>사용자가 기업관리자 가입 이후 그룹 설정을 위해 필요한 안내가 있다면 추가적으로 생성할 수 있습니다.</li>
          	</ul>
          </div>
          <div class="modal-footer create_group">
          	<div>
            	<button type="button" class="btn group_new" style="width: 250px;">새로운 그룹 생성</button>
            	<span>*새로운 그룹을 생성하면 기업관리자이자<br>생성한 그룹의 그룹관리자 권한을 함께 갖게 됩니다.</span>
            </div>
            <div>
	            <button type="button" class="btn group_exist" style="width: 250px;">기존 그룹 등록</button>
	            <span>*그룹이 이미 생성되어 있는 경우 기존 그룹으로<br>등록하여 서비스를 함께 제공받을 수 있습니다.</span>
	          </div>
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
    
    
    </script>
  </body>
</html>