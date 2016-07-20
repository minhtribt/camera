
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootsnipp-env.elasticbeanstalk.com/iframe/r1Pjd by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2016 05:50:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Responsive Navigation Menu - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../asset/admin/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="../../asset/admin/js/jquery-1.10.2.min.js"></script>
    <script src="../../asset/admin/js/bootstrap.min.js"></script>
	<link href="../../asset/admin/css/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    .nav-side-menu {

  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  top: 0px;
  width: 20%;
  min-height: 916px;
  color: #e1ffff;
  float: left;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 40px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 35px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}
.main-footer {
    background: #fff;
    padding: 15px;
    color: #444;
    border-top: 1px solid #d2d6de;
}

    </style>
	<script type="text/javascript">
	
	</script>
</head>
<body>
<div style="background: #3c8dbc; min-height: 50px; padding: 10px 15px 0 15px; color: #fff; font-size: 20px;     TEXT-ALIGN: RIGHT;">
CAMERA BẾN TRE - ADMINISTRATOR PAGE
</div>
<div class="nav-side-menu">
    <div class="brand">Danh mục chức năng</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Sản phẩm <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse in" id="products">
                    <li class="active"><a href="#">Thêm sản phẩm</a></li>
                    <li><a href="#">Danh sách sản phẩm</a></li>
                </ul>

				 <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-users fa-lg"></i> Tin tức <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse in" id="products">
                    <li class="active"><a href="#">Thêm tin tức</a></li>
                    <li><a href="#">Danh sách tin tức</a></li>
                </ul>
				
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Danh mục <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse in" id="service">
                  <li>Thêm danh mục</li>
                  <li>Danh sách danh mục</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Banner <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse in" id="new">
                  <li>Thêm banner</li>
                  <li>Danh sách banner</li>
                </ul>


                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Quảng lý Trang tĩnh
                  </a>
                  </li>

                 <li>
                  <a href="#">
                  <i class="fa fa-users fa-lg"></i> Download File
                  </a>
                </li>
            </ul>
     </div>
	 
</div>
<div style="background: #ecf0f5; float: right; width: 80%; min-height: 916px;">
a
</div>
<div style="clear: both;"> </div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright © 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</body>

<!-- Mirrored from bootsnipp-env.elasticbeanstalk.com/iframe/r1Pjd by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2016 05:50:10 GMT -->
</html>
