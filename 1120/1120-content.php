<div class="type-25-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="right-col">
                    <div class="row nav_menu">

                        <nav>
                            <div id="myLinks">
                                <a href="#news"> News </a>
                                <a href="#contact"> Contact</a>
                                <a href="#contact"> pages</a>
                                <a href="#about"> Blogs </a>
                            </div>
                            <a href="javascript:void(0);" id="menu-toggle" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                            <div class="nav navbar-nav navbar-right">
                                <div class="drop">
                                    <div class="bt" data-toggle="collapse" data-target="#john">
                                        <a href="#">
                                            <img src="images/img.jpg" alt="hinh1">John Doe
                                            <span class="fa fa-chevron-down"></span>
                                        </a>
                                        <h5>&nbsp;</h5>
                                    </div>
                                    <div id="john" class="collapse">
                                        <div class="c_john">
                                            <ul>
                                                <li><a href="#"> Profile</a></li>
                                                <li>
                                                    <a href="#">
                                                        <span class="badge bg-red ">50%</span>
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">Help</a></li>
                                                <li><a href="#"><i class="fa fa-sign-out "></i> Log Out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="drop">
                                    <div class="bt" data-toggle="collapse" data-target="#mail">
                                        <a href="#" class="aaa">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="badge bg-green">6</span>
                                        </a>
                                        <h5>&nbsp;</h5>
                                    </div>
                                    <div id="mail" class="collapse">
                                        <div class="c_mail">
                                            <ul>
                                                <li class="ago">
                                                    <a>
                                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                        <span>
                                                            <span>John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="message">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="ago">
                                                    <a>
                                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                        <span>
                                                            <span>John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="message">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="ago">
                                                    <a>
                                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                        <span>
                                                            <span>John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="message">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="ago">
                                                    <a>
                                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                        <span>
                                                            <span>John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="message">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="ago">
                                                    <div class="text-center">
                                                        <a>
                                                            <strong>See All Alerts</strong>
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./images/img1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./images/img2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./images/img3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./images/img1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./images/img2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./images/img3.jpg" alt=""></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    </div>
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
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>