

<!DOCTYPE html>

<html>

    <head>
        <title>ققنوس دیزاینر</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/styles/popUpLogin.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="../layout/styles/topMenu.css" rel="stylesheet" type="text/css" >
        <script src="../layout/scripts/popUpLogin.js"></script>
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
                                <li><a href="../pages/loading.php">برای کارفرمایان</a></li>
                                <li><a href="../pages/loading.php">برای طراحان</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">دسته بندی ها</a>
                            <ul>
                                <li><a href="../pages/poosterSamples.php">طراحی پوستر</a></li>
                                <li><a href="../pages/logoSamples.php">طراحی لوگو</a></li>
                                <li><a href="../pages/bannerSamples.php">طراحی بنر</a></li>
                                <li><a href="../pages/paintSamples.php">دیجیتال پینت</a></li>
                                <li><a href="../pages/characterSamples.php">طراحی کاراکتر</a></li>
                                <li><a href="../pages/appSamples.php">طراحی وب و اپلیکیشن</a></li>   
                            </ul>
                        </li>
                        <li><a href="javascript:popUp()" onclick="popUp()">ورود/ثبت نام</a></li>
                        <li><a href="../index.php">خانه</a></li>
                    </ul>
                </nav>
                <div class="topnav" id="myTopnav" >
                    <a  class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="../index.php">خانه</a>
                    <a href="../javascript:popUp()" onclick="popUp()">ورود/ثبت نام</a>
                    <a href="../pages/loading.php">برای کارفرمایان</a>
                    <a href="../pages/loading.php">برای طراحان</a>
                    <a href="../pages/poosterSamples.php">طراحی پوستر</a>
                    <a href="../pages/logoSamples.php">طراحی لوگو</a>
                    <a href="../pages/bannerSamples.php">طراحی بنر</a>
                    <a href="../pages/paintSamples.php">دیجیتال پینت</a>
                    <a href="../pages/characterSamples.php">طراحی کاراکتر</a>
                    <a href="../pages/appSamples.php">طراحی وب و اپلیکیشن</a>
                </div>
            </section>

        </div>

        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper bgded overlay" style="background-image:url('../images/loading.gif');
                                                  background-size:contain;">
            <div id="pageintro" class="hoc clear">
                <!-- ################################################################################################ -->
                <article>
                    <p><b>. . . </b>مقداری صبر پیشه کنین ، هنوز داریم روش کار میکنیم </p>
                    <!--<img src="../images/loading.gif">-->
                </article>
                <!-- ################################################################################################ -->
            </div>
        </div>
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
               <div id="footerSamples" class="one_third">
                    <h6 class="heading">نمونه کارها</h6>
                    <ul class="nospace clear latestimg">
                        <li>
                            <a href="../images/demo/sample1.jpg"  class="imgover" ><img   src="../images/demo/100x100.png" alt=""></a>
                        </li>
                        <li>
                            <a href="../images/demo/sample2.png"   class="imgover" ><img   src="../images/demo/100x100.png" alt=""></a>
                        </li>
                        <li>
                            <a href="../images/demo/sample3.png"   class="imgover" ><img   src="../images/demo/100x100.png" alt=""></a>
                        </li>
                        <li>
                            <a href="../images/demo/sample4.jpg"  class="imgover"  ><img   src="../images/demo/100x100.png" alt=""></a>
                        </li>
                        <li>
                            <a href="../images/demo/sample5.jpg"   class="imgover" ><img  src="../images/demo/100x100.png" alt=""></a>
                        </li>
                        <li>
                            <a href="../images/demo/sample6.jpg"  class="imgover" ><img   src="../images/demo/100x100.png" alt=""></a>
                        </li>

                    </ul>
                </div>
                <div class="one_third">
                    <h6 class="heading">ارتباط با ما</h6>
                    <p class="nospace btmspace-15">اگه برامون پیامی داری اینجا بگو ، ایمیلتم بزن که جوابتو بدیم</p>
                    <form method="post" action="#" style="direction: rtl">
                        <fieldset>
                            <legend>پیام به ما</legend>
                            <input class="btmspace-15" type="text" name="text" value="" placeholder="پیام کوتاه">
                            <input class="btmspace-15" type="text"  name="e_mail" value="" placeholder="ایمیل">
                            <button type="submit"  name="submit" value="submit">ارسال</button>
                        </fieldset>
                    </form>
                </div>
                <!-- ################################################################################################ -->
            </footer>
        </div>
    </body>
</html>