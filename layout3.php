<?php
session_start();
require_once "insertdata.php";
require_once "config.php" ;
?>




<!DOCTYPE html>
<html>

    <head>
        <title>ققنوس دیزاینر</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link href="layout/styles/correct1.css" rel="stylesheet" type="text/css" media="all">
        <link href="layout/styles/popUpLogin.css" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/png" href="http://dakkehdar.ir/thephoenix5.png" />
        <link href="layout/styles/footerSamples.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="layout/styles/topMenu.css" rel="stylesheet" type="text/css" >
        <script src="layout/scripts/popUpLogin.js"></script>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }

        </script>
    </head>

    <body id="top">
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div  class="wrapper row1">
            <section  class="hoc clear">
                <!-- ################################################################################################ -->
                
                <nav id="mainav">
                    <ul class="clear" >
                        <li><a class="drop" >چطور کار میکنه؟</a>
                            <ul>
                                <li><a href="pages/loading.php">برای کارفرمایان</a></li>
                                <li><a href="pages/loading.php">برای طراحان</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">دسته بندی ها</a>
                            <ul>
                                <li><a href="pages/poosterSamples.php">طراحی پوستر</a></li>
                                <li><a href="pages/logoSamples.php">طراحی لوگو</a></li>
                                <li><a href="pages/bannerSamples.php">طراحی بنر</a></li>
                                <li><a href="pages/paintSamples.php">دیجیتال پینت</a></li>
                                <li><a href="pages/characterSamples.php">طراحی کاراکتر</a></li>
                                <li><a href="pages/appSamples.php">طراحی وب و اپلیکیشن</a></li>
                            </ul>
                        </li>

                         <li><a href="javascript:popUp()" onclick="popUp()">ورود/ثبت نام</a></li>
                        <li><a href="index.php">خانه</a></li>
                    </ul>
                </nav>
                <div class="topnav" id="myTopnav" >
                    <a  class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="panel.php">خانه</a>
                    <a href="javascript:popUp()" onclick="popUp()">ورود/ثبت نام</a>
                    <a href="pages/loading.php">برای کارفرمایان</a>
                    <a href="pages/loading.php">برای طراحان</a>
                    <a href="pages/poosterSamples.php">طراحی پوستر</a>
                    <a href="pages/logoSamples.php">طراحی لوگو</a>
                    <a href="pages/bannerSamples.php">طراحی بنر</a>
                    <a href="pages/paintSamples.php">دیجیتال پینت</a>
                    <a href="pages/characterSamples.php">طراحی کاراکتر</a>
                    <a href="pages/appSamples.php">طراحی وب و اپلیکیشن</a>
                </div>
            </section>

        </div>

        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/001.jpg');">
            <div id="pageintro" class="hoc clear">
                <!-- ################################################################################################ -->
                <article>
                    <h3 class="heading">ققنوس دیزاینر</h3>
                    <p class="heading">با ایجاد پروژه یا مسابقه در ققنوس می‌تونید افراد متخصص پیدا کنید و با پرداخت امن ققنوس می‌تونید با اطمینان با اونها بصورت آنلاین کار کنید</p>
                    <footer><a class="btn" href="#" onclick="popUp()" > زود باش ثبت نام کن </a></footer>
                </article>
                <!-- ################################################################################################ -->
            </div>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row3">
            <main class="hoc container clear">
                <!-- main body -->
                <!-- ################################################################################################ -->
                <div class="sectiontitle">
                    <h4 class="heading">خب خب! حالا چیکارا میشه کرد؟</h4>
                </div>
                <div class="group center btmspace-80">
                    <article class="one_third first">
                        <div class="btmspace-15"><img src="images/demo/113787.png" style="width: 160px; height: 160px;"></div>
                        <h6 class="heading">طراحی بنر</h6>
                    </article>
                    <article class="one_third">
                        <div class="btmspace-30"><img src="images/demo/119194.png" style="width: 140px; height: 140px;"></div>
                        <h6 class="heading">طراحی پوستر</h6>
                    </article>
                    <article class="one_third">
                        <div class="btmspace-50"><img src="images/demo/thePHOENIX5.png" style="width: 180px; height: 120px;"></div>
                        <h6 class="heading">طراحی لوگو</h6>
                    </article>
                    <article class="one_third first">
                        <div class="btmspace-15"><img src="images/demo/3447692.svg" style="width: 160px; height: 160px;"></div>
                        <h6 class="heading">طراحی وب و اپلیکیشن</h6>
                    </article>
                    <article class="one_third">
                        <div class="btmspace-30"><img src="images/demo/2496794.svg" style="width: 140px; height: 140px;"></div>
                        <h6 class="heading">دیجیتال پینت</h6>
                    </article>
                    <article class="one_third">
                        <div class="btmspace-30"><img src="images/demo/1480772.svg" style="width: 140px; height: 140px;"></div>
                        <h6 class="heading">طراحی کاراکتر</h6>
                    </article>
                    <!-- <article class="one_third"><a class="ringcon btmspace-50" href="#"><i class="fas fa-paw"></i></a>
                        <h6 class="heading">طراحی کاراکنر</h6>
                    </article> -->
                </div>
                <p class="center"><a class="btn" href="javascript:popUp()"> زود باش ثبت نام کن</a></p>
                <!-- ################################################################################################ -->
                <!-- / main body -->
                <div class="clear"></div>
            </main>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row2">
            <section class="hoc container clear">
                <!-- ################################################################################################ -->
                <div class="sectiontitle">
                    <h6 class="heading">نمونه کارها</h6>
                </div>
                <div id="latest" class="group">
                    <article class="one_third first">
                        <a class="imgover" href="pages/logoSamples.php"><img src="images/demo/portfolio2.jpg" alt=""></a>
                        <div class="excerpt">
                            <h6 class="heading">نمونه کار طراحی لوگو</h6>
                            <footer></footer>
                        </div>
                    </article>

                    <article class="one_third">
                        <a class="imgover" href="pages/poosterSamples.php"><img src="images/demo/portfolio2.jpg" alt=""></a>
                        <div class="excerpt">
                            <h6 class="heading">نمونه کار طراحی پوستر</h6>
                            <footer></footer>
                        </div>
                    </article>
                    <article class="one_third">
                        <a class="imgover" href="pages/bannersamples.php"><img src="images/demo/portfolio2.jpg" alt=""></a>
                        <div class="excerpt">
                            <h6 class="heading">نمونه کار طراحی بنر</h6>
                            <footer></footer>
                        </div>
                    </article>
                    <div id="latest" class="group">
                        <article class="one_third first">
                            <a class="imgover" href="pages/paintSamples.php"><img src="images/demo/portfolio2.jpg" alt=""></a>
                            <div class="excerpt">
                                <h6 class="heading">نمونه کار دیجیتال پینت</h6>
                                <footer></footer>
                            </div>
                        </article>
                        <article class="one_third">
                            <a class="imgover" href="pages/characterSamples.php"><img src="images/demo/portfolio2.jpg" alt=""></a>
                            <div class="excerpt">
                                <h6 class="heading">نمونه کار طراحی کاراکتر</h6>
                                <footer></footer>
                            </div>
                        </article>
                        <article class="one_third">
                            <a class="imgover" href="pages/appSamples.php"><img src="images/demo/portfolio2.jpg" alt=""></a>
                            <div class="excerpt">
                                <h6 class="heading">نمونه کار طراحی اپلیکیشن</h6>
                                <footer></footer>
                            </div>
                        </article>
                    </div>
                    <footer class="center"><a class="btn" href="pages/loading.php"> نمونه کارهای بیشتر </a></footer>
                    <!-- ################################################################################################ -->
            </section>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row4">
            <footer id="footer" class="hoc clear">
                <!-- ################################################################################################ -->
                <div class="one_third first">
                    <h6 class="heading">درباره ما</h6>
                    <p >خلاصه اینکه اینجا ی فضای خوبی برای طراحان و کارفرماها ایجاد شده که استفاده کنیم</p>
                    <p>راستی ما توی فضای مجازی هم فعالیم ، خوش حال میشیم اونجا هم به ما سر بزنین </p>

                    <ul class="faico clear">
                        <li><a class="faicon-telegram" href="#"><i class="fab fa-telegram"></i></a></li>
                        <li><a class="faicon-instagram" href="#"><i class="fab fa-instagram"></i></a></li>

                    </ul>
                </div>
                <div id="footerSamples" class="one_third ">
                    <h6 class="heading">نمونه کارها</h6>
                    <ul class="nospace clear latestimg">
                        <li>
                            <a href="images/demo/sample1.jpg"  class="imgover" ><img   src="images/demo/sample1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="images/demo/sample2.png"   class="imgover" ><img   src="images/demo/sample2.png" alt=""></a>
                        </li>
                        <li>
                            <a href="images/demo/sample3.png"   class="imgover" ><img   src="images/demo/sample3.png" alt=""></a>
                        </li>
                        <li>
                            <a href="images/demo/sample4.jpg"  class="imgover"  ><img   src="images/demo/sample4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="images/demo/sample5.jpg"   class="imgover" ><img  src="images/demo/sample5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="images/demo/sample6.jpg"  class="imgover" ><img   src="images/demo/sample6.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="one_third">
                    <h6 class="heading">ارتباط با ما</h6>
                    <p class="nospace btmspace-15">اگه برامون پیامی داری اینجا بگو ، ایمیلتم بزن که جوابتو بدیم</p>
                    <form method="post" action="#" style="direction: rtl">
                        <fieldset>
                            <legend>پیام به ما</legend>
                            <input class="btmspace-15" type="text" value="" placeholder="پیام کوتاه">
                            <input class="btmspace-15" type="text" value="" placeholder="ایمیل">
                            <button type="submit"  name="submit" value="submit">ارسال</button>
                        </fieldset>
                    </form>
                </div>
                <!-- ################################################################################################ -->
            </footer>
        </div>

        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
 <div id="maskDiv">
            <div id="login-signup" class="login-wrap">
                <div class="login-html">
                    <a class="close" onclick="closePopUp()">+</a>
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">ورود</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">ثبت نام</label>
                    <div class="login-form">
                        <div class="sign-in-htm">
                            <div class="group">
                                <input id="user" type="text" placeholder="نام کاربری" class="input">
                            </div>
                            <div class="group">
                                <input id="pass" type="password" class="input" placeholder="کلمه عبور" data-type="password">
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check"><span class="icon"></span> میخوای یادم بمونی؟</label>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="ورود">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">کلمه عبورت رو فراموش کردی؟</a>
                            </div>
                        </div>
                        <div class="sign-up-htm">
                            <div class="group">
                                <input id="user" type="text" class="input" placeholder="نام کاربری">
                            </div>
                            <div class="group">
                                <label for="pass" class="label"></label>
                                <input id="pass" type="password" class="input" data-type="password" placeholder="کلمه عبور">
                            </div>
                            <div class="group">
                                <input id="pass" type="password" class="input" data-type="password" placeholder="تکرار کلمه عبور">
                            </div>
                            <div class="group">
                                <input id="pass" type="text" class="input" placeholder="آدرس ایمیل">
                            </div>
                            <div class="group">
                                <input id="user" type="text" class="input" placeholder="نام خانوادگی">
                            </div>
                            <div class="group">
                                <input id="user" type="text" class="input" placeholder="شماره تماس">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="ثبت نام">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <label for="tab-1" id="otherTab">قبلا عضو شدی؟    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="layout/scripts/jquery.min.js"></script>
        <script src="layout/scripts/jquery.backtotop.js"></script>
        <script src="layout/scripts/jquery.mobilemenu.js"></script>
    </body>

</html>