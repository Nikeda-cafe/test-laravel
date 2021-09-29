<div class="navbar-fixed">
  <nav class="nav-wraper teal lighten-3">
    <div class="cotainer">
　　　　<!--ハンバーガーメニューの開くアイコン-->
      <a href="#" class="sidenav-trigger right" data-target="mobile-links">
        <i class="material-icons">menu</i>
      </a>
      <div class="menu">
        <ul class="right hide-on-med-and-down">
          <li><a href="/public/people" class="grey-text text-darken-3">HOME</a></li>
          <li><a href="/public/people/add" class="grey-text text-darken-3">ADD USER</a></li>
          <li><a href="#" class="grey-text text-darken-3">Contents3</a></li>
          <li><a href="#" class="grey-text text-darken-3">Contents4</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<ul class="sidenav" id="mobile-links">
　　<!--ハンバーガーメニューの閉じるアイコン-->
  <a href="#" class="sidenav-close " data-target="mobile-links">
    <i class="material-icons close-icon">close</i>
  </a>

  <div class="menu">
    <li><a href="/public/people">HOME</a></li>
    <li><a href="/public/people/add">ADD USER</a></li>
    <li><a href="#">Contents3</a></li>
    <li><a href="#">Contents4</a></li>
  </div>
</ul>
<script>
  $(document).ready(function () {
   $('.sidenav').sidenav({
     edge: 'right',
   });
 })
</script>
