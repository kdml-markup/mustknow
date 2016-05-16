<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MustKnow</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <link rel="stylesheet" href="dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="dist/js/main/imagesloaded.pkgd.min.js"></script>
    <script src="dist/js/main/tickerme.js"></script>
    <script src="dist/js/main/wookmark.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini main">
    <?php include("pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("pages/tpl/header.tpl");
            include("pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #fff;">        	
       		<div class="title-area">
       			<h2>
       				<span>칼럼</span>
       			</h2>
       		</div>
           <div class="content">
                <div class="sch_filter">
                	<div class="sch_area">
                		<input type="text" placeholder="검색어를 입력하세요."/>
                	</div>
                	<div class="filter_area">
                		<div class="list-type">
                			<ul>
                				<li style="margin-right: 8px;">
                					<a>
                						<em>썸네일형</em>
                					</a>
                				</li>
                				<li class="on">
                					<a>
                						<em>리스트형</em>
                					</a>
                				</li>
                			</ul>
                			<div class="select-box">
                				<div class="value">
                					<button type="button">조회순
                						<span class="arrow"></span>
                					</button>
                				</div>
                				<div class="select-list" style="display: none;">
                					<ul>
                						<li class="on">
                							<label>조회순</label>
                						</li>
                						<li>
                							<label>카테고리순</label>
                						</li>
                						<li>
                							<label>중요도순</label>
                						</li>
                						<li>
                							<label>제목순</label>
                						</li>
                					</ul>
                				</div>
                			</div>
                		</div>
                		<div class="sort-type"></div>
                	</div>
                </div>
                <div class="table-list table-column">
                	<table>
                		<caption>칼럼</caption>
                		<colgroup>
                			<col width="55px">
                			<col width="53px">
                			<col width="91px">
                			<col width="51px">
                			<col />
                			<col width="101px" />
                			<col width="89px" />
                			<col width="103px" />
                		</colgroup>
                		<thead>
                			<tr>
                				<th scope="col">
                					<span></span>
                				</th>
                				<th scope="col">
                					<span>no.</span>
                				</th>
                				<th scope="col">
                					<span>카테고리</span>
                					<em class="controller"></em>
                				</th>
                				<th scope="col">
                					<span>중요도</span>
                					<em class="controller"></em>
                				</th>
                				<th scope="col">
                					<span>제목</span>
                					<em class="controller"></em>
                				</th>
                				<th scope="col">
                					<span>작성자</span>
                				</th>
                				<th scope="col">
                					<span>발행일</span>
                					<em class="controller"></em>
                				</th>
                				<th scope="col">
                					<span>조회수</span>
                					<em class="controller"></em>
                				</th>
                			</tr>
                		</thead>
                		<tbody>
                			<tr style="display: none;">
                				<td class="list-empty" colspan="8">
                					<span>검색결과가 없습니다.</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span class="on"></span>
                				</td>
                				<td class="td-type-1">
                					<span>9,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>형사고소</span>
                				</td>
                				<td class="td-type-2">
                					<span>3</span>
                				</td>
                				<td class="title">
                					<a href="#">상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전 채권을 별도로 행사할 수 있는지 알 수 있는 방법은?</a>
                				</td>
                				<td class="td-type-1">
                					<span>홍길동</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                			<tr>
                				<td class="bookmark">
                					<span></span>
                				</td>
                				<td class="td-type-1">
                					<span>99,999</span>
                				</td>
                				<td class="td-type-2">
                					<span>협상</span>
                				</td>
                				<td class="td-type-2">
                					<span>2</span>
                				</td>
                				<td class="title">
                					<a href="#">분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</a>
                				</td>
                				<td class="td-type-1">
                					<span>임꺽정</span>
                				</td>
                				<td class="td-type-1">
                					<span>2016-05-06</span>
                				</td>
                				<td class="td-type-1">
                					<span>999,999</span>
                				</td>
                			</tr>
                		</tbody>
                	</table>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php include("pages/tpl/footer.tpl"); ?>
    </div><!-- ./wrapper -->
            
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
      
  </body>
</html>
