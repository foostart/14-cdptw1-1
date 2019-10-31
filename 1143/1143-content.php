<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

    
        <div class="type-1143">
        <div class="navbar-collapse nav-main-collapse collapse navigation_menu">
                <div class="container mega_menu_container">
                    <nav class="nav-main mega-menu">
                        <ul id="mainMenu" class="nav navbar nav-pills nav-main">
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle" data-toggle="dropdown">Home</a>
                            </li>
                            <li class="dropdown main_item mega_menu_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle active">Courses</a>
                            </li>
                            <li class="dropdown main_item  main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Element</a>
                            </li>
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle" data-toggle="dropdown">Blog</a>
                            </li>
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Pages</a>
                            </li>
                            <li class="dropdown main_item">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">About</a>
                            </li>
                            <li class="dropdown main_item">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Contact Us</a>
                            </li>
                            <li class="dropdown main_item" style="float:right;">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">/  REGISTER</a>
                            </li>
                            <li class="dropdown main_item" style="float:right;">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">LOGIN</a>
                            </li>
                          
                           
                        </ul>

                    </nav>
                    <div class="lms_search_toggle" onclick="openSearch()" >
                        <a class="fa fa-search"></a>
                    </div>
                    <div class="lms_search_wrapper" id="my_search_box" style="display: none"> 
                        <form method="get" action="#">
                            <input type="search" value="" placeholder="Search..." name="s" id="cs" class="form-control">
                        </form> 
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class=" col-md-10">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Form Buttons</h3>
                            </div>
                            
                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 pull-right ">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class="active"><h3>Form Buttons</h3></a>
  <div id="myLinks">
    <a href="#news">Home</a>
    <a href="#contact">News</a>
    <a href="#about">Sports</a>
    <a href="#about">Blog</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()"> =
    <i class="fa fa-bars"></i>
  </a>
</div>



<!-- End smartphone / tablet look -->
</div>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


