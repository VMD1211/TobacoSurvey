
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta name="author" content="pixelhint.com">
    <meta name="description" content=""/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <style>
        /*  Fonts  */
        @font-face {
            font-family: 'open_regular';
            src: url('../fonts/opensans-regular.eot');
            src: url('../fonts/opensans-regular.eot?#iefix') format('embedded-opentype'),
            url('../fonts/opensans-regular.woff') format('woff'),
            url('../fonts/opensans-regular.ttf') format('truetype'),
            url('../fonts/opensans-regular.svg#LatoRegular') format('svg');
            font-weight: normal;
            font-style: normal;

        }


        @font-face {
            font-family: 'open_bold';
            src: url('../fonts/opensans-bold.eot');
            src: url('../fonts/opensans-bold.eot?#iefix') format('embedded-opentype'),
            url('../fonts/opensans-bold.woff') format('woff'),
            url('../fonts/opensans-bold.ttf') format('truetype'),
            url('../fonts/opensans-bold.svg#LatoRegular') format('svg');
            font-weight: normal;
            font-style: normal;

        }


        @font-face {
            font-family: 'open_semibold';
            src: url('../fonts/opensans-semibold.eot');
            src: url('../fonts/opensans-semibold.eot?#iefix') format('embedded-opentype'),
            url('../fonts/opensans-semibold.woff') format('woff'),
            url('../fonts/opensans-semibold.ttf') format('truetype'),
            url('../fonts/opensans-semibold.svg#open_sanssemibold') format('svg');
            font-weight: normal;
            font-style: normal;

        }


        @font-face {
            font-family: 'satellite';
            src: url('../fonts/satellite.eot');
            src: url('../fonts/satellite.eot?#iefix') format('embedded-opentype'),
            url('../fonts/satellite.woff') format('woff'),
            url('../fonts/satellite.ttf') format('truetype'),
            url('../fonts/satellite.svg#open_sanssemibold') format('svg');
            font-weight: normal;
            font-style: normal;

        }




        /*  General CSS*/
        .wrapper{
            width: 1200px;
            height: auto;
            margin: 0 auto;
        }


        footer .f_cols ul.sm li a,
        header nav ul li a,
        footer a:hover{
            transition:all .2s linear;
            -webkit-transition:all .2s linear;
            -moz-transition:all .2s linear;
            -o-transition:all .2s linear;
        }






        /*  Header  */
        header.trasparent_nav{
            width: 100%;
            height: 100px;
            background-color: rgba(255, 255, 255, .5);
            border-bottom: 1px rgba(255, 255, 255, .3) solid;
            top: 0;
            left: 0;
            position: absolute;
            z-index: 9999;
        }


        header.trasparent_nav .logo,
        header.fixed_nav .logo{
            float: left;
            margin-top: 30px;
        }

        header.fixed_nav .logo{
            margin-top: 27px;
        }

        header.trasparent_nav nav,
        header.fixed_nav nav{
            float: right;
            margin-top: 40px;
        }

        header.fixed_nav nav{
            margin-top: 32px;
        }

        header.trasparent_nav nav ul,
        header.fixed_nav nav ul{
            list-style: none;
        }

        header.trasparent_nav nav ul li,
        header.fixed_nav nav ul li{
            float: left;
            margin-left: 50px;
        }

        header.trasparent_nav nav ul li:first-child,
        header.fixed_nav nav ul li:first-child{
            margin-left: 0;
        }

        header.trasparent_nav nav ul li a,
        header.fixed_nav nav ul li a{
            text-decoration: none;
            color: #454545;
            font-family: 'open_regular', arial;
            font-size: 16px;
        }

        header.trasparent_nav nav ul li a:hover,
        header.fixed_nav nav ul li a:hover{
            color: #e61c42;
        }

        header.fixed_nav nav ul li a{
            font-size: 14px;
        }


        header.fixed_nav{
            width: 100%;
            height: 80px;
            background-color: #ffffff;
            border-bottom: 1px solid #f1f1f1;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            margin-top: -81px;
        }




        /*  Billboard  */
        .billboard{
            width: 100%;
            height: 750px;
            overflow: hidden;
            position: relative;
        }




        /*  Call To Action Section  */
        .cta{
            width: 1200px;
            height: 90px;
            margin: 0 auto;
            position: relative;
        }

        .cta p{
            display: inline-block;
            font-family: 'open_regular', arial;
            font-size: 20px;
            margin: 35px 0 0 40px;
            letter-spacing: 1px;
        }

        .cta a{
            float: right;
            padding: 17px 60px;
            text-decoration: none;
            font-family: 'open_regular', arial;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 20px 40px 0 0;
        }

        .cta_top{
            background-color: rgba(255, 255, 255, .8);
            margin-top: -90px;
        }

        .cta_top p{
            color: #454545;
        }

        .cta_top a{
            background: #e61c42;
            color: #fff;
        }





        /*  Services  */
        .services,
        .testimonials{
            padding: 100px 0;
            background: #fbfbfb;
        }

        .services h2{
            color: #606060;
            font-family: Gabriola;
            font-size: 60px;
            font-weight: bold;
            text-align: center;
        }


        .services .separator{
            text-align: center;
            margin: 20px 0;
        }

        .services ul{
            list-style: none;
            margin-left: 80px;
            overflow: hidden;
        }

        .services ul li{
            float: left;
            display: block;
            width: 293px;
            height: auto;
            margin-left: 80px;
            text-align: center;
        }

        .services ul li:first-child{
            margin-left: 0;
        }

        .services ul li img.s_icons{
            margin-bottom: 40px;
        }

        .services ul li h3{
            color: #746969;
            font-family: 'open_bold', arial;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .services ul li p{
            color: #746969;
            font-family: 'open_regular', arial;
            font-size: 14px;
            line-height: 22px;
        }




        /*  Recent Work  */
        .recent_work{
            width: 100%;
            height: 310px;
            background: none;
            /*    overflow: hidden;*/
        }

        .recent_work .work{
            display: block;
            width: 20%;
            height: 100%;
            float: left;
        }




        /*  Testimonials  */
        .testimonials{
            height: auto;
            padding-bottom: 100px;
        }

        .testimonials h3{
            color: #616161;
            font-family: 'open_bold', arial;
            font-size: 26px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
        }

        .testimonials ul.testi_boxs{
            list-style: none;
            overflow: hidden;
            margin-top: 80px;
        }

        .testimonials ul.testi_boxs li{
            float: left;
            display: block;
            width: 293px;
            height: auto;
            margin-left: 80px;
        }

        .testimonials ul.testi_boxs img.avatar{
            border-radius: 100px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            -o-border-radius: 100px;
            margin-bottom: 20px;
        }

        .testimonials ul.testi_boxs h2{
            color: #616161;
            font-family: 'open_bold', arial;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: .5px;

        }

        .testimonials ul.testi_boxs h2 span{
            color: #756a6a;
            font-family: 'open_regular', arial;
            font-weight: normal;
            font-size: 12px;
        }

        .testimonials ul.testi_boxs p{
            color: #747474;
            font-family: 'open_regular', arial;
            font-size: 14px;
            line-height: 22px;
            margin-top: 20px;
        }




        /*  Clients  */
        .clients{
            width: 100%;
            height: 120px;
            background: #f2f1f1;
        }

        .clients ul{
            list-style: none;
        }

        .clients ul li{
            display: block;
            float: left;
            margin-left: 120px;
        }

        .clients ul li a img{
            margin-top: 45px;
            display: inline-block;
        }

        .clients ul li:first-child{
            margin-left: 42px;
        }





        /*  Footer  */
        footer{
            width: 100%;
            height: 500px;
            background: #353535;
            overflow: hidden;
            padding-bottom: 20px;
        }

        footer .cta_footer{
            background-color: #434343;
        }

        footer .cta_footer p{
            color: #ffffff;
        }

        footer .cta_footer a{
            background: #e61c42;
            color: #fff;
        }

        footer .footer_widget{
            overflow: hidden;
            padding-bottom: 40px;
            margin-bottom: 40px;
            border-bottom: 1px #434343 solid;
        }

        footer .f_cols{
            display: block;
            width: 270px;
            height: auto;
            float: left;
            margin:100px 40px 0 0;
        }

        footer .f_cols:last-child{
            margin-right: 0;
        }

        footer .f_cols h3{
            color: #fff;
            font-family: 'open_regular', arial;
            font-size: 20px;
            font-weight: normal;
            margin-bottom: 40px;
            letter-spacing: 1px;

        }

        footer .f_cols p{
            font-family: 'open_regular', arial;
            font-size: 14px;
            line-height: 26px;
            letter-spacing: 1px;
            color: #ffffff;
            margin-bottom: 20px;
        }

        footer .f_cols span.phone{
            display: block;
            font-family: 'open_bold', arial;
            font-weight: bold;
            color: #ffffff;
        }

        footer .f_cols ul.sm{
            list-style: none;
            overflow: hidden;
        }

        footer .f_cols ul.sm li{
            float: left;
            margin-left: 10px;
        }

        footer .f_cols ul.sm li:first-child{
            margin-left: 0;
        }

        footer .f_cols ul.sm li a{
            display: block;
            width: 25px;
            height: 25px;
            background: url('../img/social.png') no-repeat;
        }

        footer .f_cols ul.sm li a.fb{
            background-position: 0 0;
        }
        footer .f_cols ul.sm li a.twitter{
            background-position: -26px 0;
        }
        footer .f_cols ul.sm li a.dribbble{
            background-position: -52px 0;
        }

        footer .f_cols ul.sm li a:hover{
            background: url('../img/social_hover.png') no-repeat;
        }

        footer .f_cols ul.sm li a.fb:hover{
            background-position: 0 0;
        }
        footer .f_cols ul.sm li a.twitter:hover{
            background-position: -26px 0;
        }
        footer .f_cols ul.sm li a.dribbble:hover{
            background-position: -52px 0;
        }

        footer .f_cols a{
            display: inline-block;
            font-family: 'open_regular', arial;
            color: #ffffff;
        }

        footer .f_cols a:hover{
            color: #ffffff;
        }

        footer .f_cols ul li{
            list-style: none;
            margin-bottom: 15px;
        }

        footer .f_cols ul li a{
            text-decoration: none;
            color: #ffffff;
            font-family: 'open_regular', arial;
            font-family: 14px;
        }

        footer .f_cols ul li a:hover{
            color: #e61c42;
        }


        p.rights{
            display: block;
            text-align: center;
            margin: 0;
            padding: 0;
            color: #fff;
            font-family: 'open_regular', arial;
            font-size: 13px;
            letter-spacing: 1px;
        }

        p.rights a{
            font-family: 'open_bold', arial;
            font-weight: bold;
        }

        /*reset*/
        html, body, div, span, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        abbr, address, cite, code,
        del, dfn, em, img, ins, kbd, q, samp,
        small, strong, sub, sup, var,
        b, i,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section, summary,
        time, mark, audio, video {
            margin:0;
            padding:0;
            border:0;
            outline:0;
            font-size:100%;
            vertical-align:baseline;
            background:transparent;
        }

        body {
            line-height:1;
        }

        img{
            max-width: 100%;
        }

        article,aside,details,figcaption,figure,
        footer,header,hgroup,menu,nav,section {
            display:block;
        }

        nav ul {
            list-style:none;
        }

        blockquote, q {
            quotes:none;
        }

        blockquote:before, blockquote:after,
        q:before, q:after {
            content:'';
            content:none;
        }

        a {
            margin:0;
            padding:0;
            font-size:100%;
            vertical-align:baseline;
            background:transparent;
            color: #ffffff;
        }

        /* change colours to suit your needs */
        ins {
            background-color:#ff9;
            color:#000;
            text-decoration:none;
        }

        /* change colours to suit your needs */
        mark {
            background-color:#ff9;
            color:#000;
            font-style:italic;
            font-weight:bold;
        }

        del {
            text-decoration: line-through;
        }

        abbr[title], dfn[title] {
            border-bottom:1px dotted;
            cursor:help;
        }

        table {
            border-collapse:collapse;
            border-spacing:0;
        }

        /* change border colour to suit your needs */
        hr {
            display:block;
            height:1px;
            border:0;
            border-top:1px solid #cccccc;
            margin:1em 0;
            padding:0;
        }

        input, select {
            vertical-align:middle;
        }
    </style>
</head>
<body>


<header class="trasparent_nav">
    <div class="wrapper">
        <div class="logo">
            <a href="#"><img src="img/logo.png" alt="Fertile"></a>
        </div>

        <nav>
            <ul>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Journal</a></li>
                <li><a href="#">Contact</a></li>
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="/login" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title" style="font-family: Tohoma">
                                        Login/Register
                                    </h3>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header><!-- End trasparent_nav -->

<header class="fixed_nav">
    <div class="wrapper">
        <div class="logo">
            <a href="#"><img src="img/logo_small.png" alt="Fertile"></a>
        </div>

        <nav>
            <ul>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Journal</a></li>
                <li><a href="#">Contact</a></li>
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="login" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title" style="font-family: Tohoma">
                                        Login/Register
                                    </h3>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>


</header><!-- End fixed_nav -->
<section class="billboard">
    <img src="img/tl_big.jpg" alt="" title=""/>
</section><!-- End billboard -->

<section class="services wrapper">
    <h2>WELCOME TO TOBACCO SURVEY</h2>
    <div class="separator">
        <img src="img/separator.png" alt=""/>
    </div>
    <ul>
        <li>
            <img class="s_icons" src="img/s1.png" alt=""/>
            <h3>PROBLEM</h3>
        </li>

        <li>
            <img class="s_icons" src="img/s2.png" alt=""/>
            <h3>RESEARCH</h3>
        </li>

        <li>
            <img class="s_icons" src="img/s3.png" alt=""/>
            <h3>STATISTICAL</h3>
        </li>
    </ul>
</section><!-- End services -->


<section class="recent_work">
    <div class="work">
        <a href=""><img src="img/tl_tim3.jpg" alt=""></a>
    </div>
    <div class="work">
        <a href=""><img src="img/tl_khoi.jpg" alt=""></a>
    </div>
    <div class="work">
        <a href=""><img src="img/tl_tim7.jpg" alt=""></a>
    </div>
    <div class="work">
        <a href=""><img src="img/tl_tim5.jpg" alt=""></a>
    </div>
    <div class="work">
        <a href=""><img src="img/tl_tim6.jpg" alt=""></a>
    </div>
</section>
<!-- End recent_work -->
<br>
<br>
<section style="color: tomato; font-family: Gabriola; text-align: center; font-size: 40px">
    <h1>The cessation of smoking will have many health benefits!</h1>
</section>

<footer>

</footer><!-- End Footer -->

<script src='../ga.js'></script>
</body>
</html>