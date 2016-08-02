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
  <body class="hold-transition skin-blue sidebar-mini inside-land">
    <?php include("../pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("../pages/tpl/header.tpl");
            include("../pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper sevice_apply_wrap action_wrap">
           <div class="title-area">
                <h2><img src="/mustknow/dist/img/service_apply_h.png" /></h2>
           </div>
       		<div class="apply_guide">
       			<p>Data 서비스 신청 가이드</p>
       			<ul>
       				<li>
       					<span>구입한 서비스는 마이페이지 / 서비스 결제함에서 확인 및 결제할 수 있습니다.</span>
       				</li>
       				<li>
       					<span>결제한 서비스 기간동안 모든 유료콘텐츠 Cast Study / Reference / Evaluation 를 열람할 수 있습니다. (유료 Form은 별도로 결제해야 다운로드할 수 있습니다)</span>
       				</li>
       				<li>
       					<span>Data 서비스는 이월이 불가능하며, 서비스 기간 연장을 원하시면 재결제하셔야 합니다.</span>
       				</li>
       				<li>
       					<span>Data 서비스 기간이 만료되었을 시에는 콘텐츠를 열람할 수 없고, 마이페이지>즐겨찾기 보관함에 담긴 콘텐츠 또한 리스트는 보여지나 열람은 불가능합니다.</span>
       				</li>
       				<li>
       					<span>6개월 이상 Data 서비스 결제시 할인혜택을 드립니다</span>
       				</li>
       				<li>
       					<span>Data 서비스 결제시 바로 이용할 수 있습니다.</span>
       				</li>
       			</ul>
       		</div>
           <div class="content main">
           		<div class="data_service">
           			<div class="promotion">
           				<h3>Data 서비스 프로모션 할인안내</h3>
           				<ol>
           					<li>
           						<a href="#">서비스 기본 (1개월)</a>
           						<span>82,500&nbsp;원</span>
           					</li>
           					<li>
           						<a href="#">서비스 프로모션 할인-6개월 이상 (10%)</a>
           						<span><em>495,000&nbsp;원</em>445,500&nbsp;원</span>
           					</li>
           					<li>
           						<a href="#">서비스 프로모션 할인-12개월 (20%)</a>
           						<span><em>990,000&nbsp;원</em>792,000&nbsp;원</span>
           					</li>
           				</ol>
           				<ul>
           					<li>
           						<span>프로모션 1회 결제 시 기간 선택을 6개월 또는 12개월로 할 때 할인혜택을 드립니다.</span>
           					</li>
           					<li>
           						<span>6-11개월까지는 10%할인이 적용되며, 1회 결제 시 12개월이 최대 입력 기간입니다.</span>
           					</li>
           				</ul>
           			</div>
           			<div class="apply">
           				<h3>Data 서비스 신청
           					<a href="#" class="cancel_guide" data-toggle="modal" data-target="#refund_guide"></a>
           				</h3>
           				<table>
           					<colgroup>
	           					<col width=""/>
	           					<col width="128px"/>
           					</colgroup>
           					<thead>
           						<tr>
           							<th scope="col">서비스명</th>
           							<th scope="col">개월 수 입력</th>
           						</tr>
           					</thead>
           					<tbody>
           						<tr>
           							<td>Data 서비스</td>
           							<td>
           								<div>
           									<a href="#"></a>
           									<input readonly="" value="1" type="text"/>
           									<a href="#" class="plus"></a>
           								</div>
           							</td>
           						</tr>
           					</tbody>
           					<tfoot>
           						<tr class="price price1">
           							<td><span>총 합계</span></td>
           							<td><strong>82,500 원</strong></td>
           						</tr>
           						<tr class="price price2">
           							<td class="promotion_discount"><span>프로모션 할인<em>(20%)</em></span></td>
           							<td><strong><em>(-)</em>0 원</strong></td>
           						</tr>
           						<tr class="total">
           							<td><span>총 결제 금액</span></td>
           							<td><strong>82,500 원</strong></td>
           						</tr>
           					</tfoot>
           				</table>
           			</div>
           		</div>           
                <div class="action c_outside">
                	<div class="btnWrap">
	                	<a href="" class="act_btn g_btn" style="width: 171px;" data-toggle="modal" data-target="#purchase_service">서비스 결제함에 담기</a>
	                	<a href="" class="act_btn b_btn" data-toggle="modal" data-target="#purchase_service2">바로 결제</a>
	                </div>
                </div>   
            </div>     
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade" id="purchase_service" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm"style="width: 373px;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">서비스 결제함으로 이동합니다.</h4>
          </div>
          <div class="modal-body">
          		고객님이 신청하신 서비스가 서비스 결제함에 담겼습니다.<br>결제를 위해 서비스 결제함으로 바로 이동합니다.
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    
    
    <div class="modal fade" id="purchase_service2" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm"style="width: 373px;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">서비스 결제함에 담겼습니다.</h4>
          </div>
          <div class="modal-body">
          		고객님이 신청하신 서비스가 서비스 결제함에 담겼습니다.<br>서비스 결제함으로 이동하여 결제를 진행하시겠습니까?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">확인</button>
           </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="refund_guide" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm refund_guide">
        <div class="modal-content">
          <div class="modal-header">
          	<a href="#">
          		<img class="close" src="/mustknow/dist/img/bnt_delete.png" />
          	</a>
          </div>
          <div class="modal-body">
          	<p>환불 및 결제 취소 안내</p>
          	<ul>
          		<li>사용자가 허용하지 않은 계정이나 결제 수단으로 구매한 상품인 경우 도와드릴 수 있습니다.</li>
          		<li>서비스가 정상적으로 작동하지 않거나, 예상과 다른 경우 도와드릴 수 있습니다.</li>
          		<li>실수로 구매했거나, 구매 후 변심한 경우에는 구체적인 상황에 따라 도와드릴 수도 있습니다.</li>
          		<li>계정 또는 결제 세부정보를 다른 사람에게 알려주거나, 정책을 악용하거나, 인증을 사용하여 계정을 보호하지<br>않은 경우 환불 처리할 수 없습니다.</li>
          		<li>사용자가 허용하지 않은 계정이나 결제 수단으로 구매한 상품인 경우 도와드릴 수 있습니다.</li>
          		<li>서비스가 정상적으로 작동하지 않거나, 예상과 다른 경우 도와드릴 수 있습니다.</li>
          		<li>실수로 구매했거나, 구매 후 변심한 경우에는 구체적인 상황에 따라 도와드릴 수도 있습니다.</li>
          		<li>사용자가 허용하지 않은 계정이나 결제 수단으로 구매한 상품인 경우 도와드릴 수 있습니다.</li>
          		<li>서비스가 정상적으로 작동하지 않거나, 예상과 다른 경우 도와드릴 수 있습니다.</li>
          		<li>실수로 구매했거나, 구매 후 변심한 경우에는 구체적인 상황에 따라 도와드릴 수도 있습니다.</li>
          	</ul>
          </div>
          <div class="modal-footer"></div>
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
    </script>
  </body>
</html>