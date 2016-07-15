<aside class="cs-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="#">
            <span class="cs_customer"></span> <span>고객 지원</span><i class="angle-left"></i>
          </a>
          <ul class="treeview-menu">
              <li class="dropdown-hover">
                <a href="#">콘텐츠 요청</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">문의메일 상담</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">아이디/비밀번호 찾기</a>
              </li>
              <li class=""><a href="#">서비스 이용안내</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <span class="cs_faq"></span> <span>FAQ</span><i class="angle-left"></i>
          </a>
          <ul class="treeview-menu">
              <li class="dropdown-hover">
                  <a href="#">전체</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">회원제도</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">Data 서비스</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">Form 서비스</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">기업회원</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">그룹사/협회</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">개인정보 수정</a>
              </li>
              <li class="dropdown-hover">
                  <a href="#">가입/탈퇴</a>
              </li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <span class="cs_notice"></span> <span>공지사항</span>
          </a>
        </li>
      </ul>
    </section>
<!-- /.sidebar -->
</aside>

<script>
$('.treeview-menu > li.dropdown-hover').hover(function() {
  $(this).find('.nav-end').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.nav-end').stop(true, true).delay(200).fadeOut(500);
});
</script>