<?php require '../shortcuts/main_header.html';   ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Inside Interior Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Inside Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="preload" href="https://snapinsight/web/css/bootstrap.css" as="style" onload="this.rel='stylesheet'">
	<!-- Style-CSS -->
	<link rel="preload" href="https://snapinsight/web/css/font-awesome.css" as="style" onload="this.rel='stylesheet'">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<style>
/* Reset Code */
body {
    padding: 0;
    margin: 0;
    background: #FFF;
    font-family: 'Roboto', sans-serif;
}

body a {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    text-decoration: none;
}

body a:hover {
    text-decoration: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

body a:focus,
a:hover {
    text-decoration: none;
}

input[type="button"],
input[type="submit"] {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

input[type="button"]:hover,
input[type="submit"]:hover {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
}

p {
    margin: 0;
    padding: 0;
    font-size: 16px;
    letter-spacing: 1px;
    line-height: 1.9;
    color: #999;
    font-family: 'Roboto', sans-serif;
}

ul,
ol {
    margin: 0;
    padding: 0;
}

label {
    margin: 0;
}

a:focus,
a:hover {
    text-decoration: none;
    outline: none
}

/* //Reset Code */
/* bottom-to-top */
#toTop {
    display: none;
    text-decoration: none;
    position: fixed;
    bottom: 24px;
    right: 3%;
    border-radius: 50%;
    overflow: hidden;
    z-index: 999;
    width: 35px;
    height: 35px;
    border: none;
    text-indent: 100%;
    background: url(../images/move-top.png) no-repeat 0px 0px;
}

#toTopHover {
    width: 32px;
    height: 32px;
    display: block;
    overflow: hidden;
    float: right;
    opacity: 0;
    -moz-opacity: 0;
    filter: alpha(opacity=0);
}

/* //bottom-to-top */
/* header */
/* logo */
a.navbar-brand {
    font-size: 36px;
    letter-spacing: 1px;
    color: #1583e9;
    text-shadow: 2px 5px 3px rgba(0, 0, 0, 0.06);
}

.navbar-light .navbar-brand,
.navbar-light .navbar-brand:hover,
.navbar-light .navbar-brand:focus {
    color: #1583e9;
}

/* //logo */
/* navigation */
.navbar-light .navbar-nav .nav-link {
    padding: 0;
    color: #4c4c4c;
    font-size: 16px;
    letter-spacing: 2px;
    font-weight: 500;
}

.navbar-expand-lg .navbar-nav .dropdown-menu {
    margin-top: 10px;
    left: -37px;
}

.navbar-light .navbar-nav .show>.nav-link,
.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
    color: #1583e9;
}

.dropdown-item.active,
.dropdown-item:active {
    background-color: #000;
}

/* fixed nav */
nav.fixed-navi ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav.fixed-navi ul li {
    float: left;
}

nav.navbar.navbar-expand-lg.navbar-light.fixed-navi {
    box-shadow: 1px 3px 8px 3px rgba(8, 8, 8, 0.08);
}

/*helper*/
.isFixed {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 99;
    background: #fff;
    transition: all 1.5s ease;
}

/* //fixed nav */

/* search */
li.search {
    margin-left: 17em;
}

.search i {
    color: #8c8b8b;
    font-size: 20px;
}

a.reqe-button {
    background: #1583e9;
    color: #fff;
    padding: 15px 18px;
    border-radius: 5px;
    font-size: 15px;
    letter-spacing: 2px;
}

/* //search */
/* //navigation */
/* //header */
/* banner */

.banner-img {
    background: url(https://snapinsight.net/images/aboutus.jpeg) no-repeat bottom;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 44vw;
    border-radius: 203px 0 0 400px;
}

.style-banner {
    padding: 12em 6em 0 6em;
}

.style-banner h1 {
    font-size: 48px;
    line-height: 1.3;
    position: relative;
}

.style-banner h1:after,
h2.middle-title-w3:after {
    content: "";
    background: #1583e9;
    width: 100px;
    height: 2px;
    position: absolute;
    bottom: -25px;
    left: 0;
}

.style-banner h1 span {
    color: #1583e9;
}

.button-style {
    padding: 12px 25px;
    border: none;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: 2px solid #1583e9;
    background: #1583e9;
}

.button-style:hover {
    opacity: .9;
    color: #fff;
}

/* //banner text */
h3.title-w3 {
    font-size: 38px;
    position: relative;
    letter-spacing: 1px;
}

h3.title-w3:before {
    content: "";
    background: #1583e9;
    width: 100px;
    height: 2px;
    position: absolute;
    bottom: -18px;
    left: 503px;
    right: 0;
}

ul.list-unstyled.brands li {
    display: inline-block;
    width: 19%;
}

ul.list-unstyled.brands li i {
    color: #e8e8e8;
    font-size: 70px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

ul.list-unstyled.brands li i.active,
ul.list-unstyled.brands li i:hover {
    color: #1583e9;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

/* //brands */
/* services */
.about-in .card {
    padding: 2.5em .5em;
    border: 1px solid transparent;
    -webkit-transition: box-shadow 0.3s ease-in-out;
    -moz-transition: box-shadow 0.3s ease-in-out;
    -ms-transition: box-shadow 0.3s ease-in-out;
    -o-transition: box-shadow 0.3s ease-in-out;
    transition: box-shadow 0.3s ease-in-out;
    background: transparent;
}

.about-in .card:hover,
.about-in .card.active {
    background: #fff;
    -webkit-box-shadow: 0px 0px 18.69px 2.31px rgba(204, 204, 223, 0.5);
    -moz-box-shadow: 0px 0px 18.69px 2.31px rgba(204, 204, 223, 0.5);
    box-shadow: 0px 0px 18.69px 2.31px rgba(204, 204, 223, 0.5);
    border-radius: 15px;
}

.about-in .card i {
    font-size: 34px;
    color: #fff;
    width: 75px;
    height: 75px;
    background: #1583e9;
    border-radius: 50%;
    line-height: 2.2;
}

.about-in .card h5.card-title {
    font-size: 25px;
    letter-spacing: 1px;
    font-weight: 600;
}

p.title-para {
    max-width: 800px;
}

/* //services */
/* middle section */

.right-side-img-w3 {
    background: url(https://snapinsight.net/images/aboutus.jpeg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 40vw;
    float: right;
    width: 55%;
    border-radius: 250px 0 0 250px;
}

.left-build-wthree {
    float: left;
    width: 40%;
    padding: 3em 3.5em;
}

h2.middle-title-w3 {
    letter-spacing: 1px;
    font-size: 35px;
    position: relative;
    line-height: 1.4;
}

.left-build-wthree h6 {
    font-size: 20px;
    letter-spacing: 1px;
    color: #525252;
    line-height: 1.6;
}

ul.list-beach li p {
    font-size: 15px;
}

.left-build-wthree ul li i {
    color: #1583e9;
    font-size: 22px;
}

/* //middle section */
.some-another {
    background: url(https://snapinsight.net/images/aboutus.jpeg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    min-height: 42vw;
    position: relative;
    border-radius: 0 230px 230px 0;
    margin-right: 6em;
    margin-bottom: 15em;
}

.grid-single {
    position: absolute;
    bottom: -40%;
    max-width: 700px;
    margin: 0 auto;
    right: -101px;
    left: 0;
    box-shadow: 0px 0px 15.69px 3.31px rgba(204, 204, 223, 0.44);
}

h3.title-w3-2:before {
    left: 254px;
}

.grid-single p {
    font-size: 18px;
}

/* // */
.steps-reach-w3l span {
    color: #fff;
    font-size: 28px;
    width: 110px;
    height: 110px;
    border: 2px solid #fff;
    line-height: 3.8;
    border-radius: 50%;
}

.steps-reach-w3l span.fa.fa-check-square-o {
    background: #ff4f81;
}

.steps-reach-w3l span.fa.fa-volume-control-phone {
    background: #3b9fec;
}

.steps-reach-w3l span.fa.fa-calendar {
    background: #2dde98;
}

.steps-reach-w3l span.fa.fa-smile-o {
    background: #ffc168;
}

.steps-reach-w3l p {
    color: #000;
    font-size: 17px;
}

.steps-reach-w3l {
    position: relative;
}

.style-agile-border {
    position: absolute;
    top: 43px;
    right: -49px;
}


h3.title-w3-3 {
    max-width: 500px;
    margin: 0 auto;
}

h3.title-w3-3:before {
    left: 198px;
}

/* testimonials */
.testimonials {
    background: url() no-repeat center fixed;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
}

.w3_testimonials_grid h5 {
    color: #1583e9;
    letter-spacing: 1px;
    font-size: 23px;
}

.w3_testimonials_grid h4 {
    max-width: 700px;
    font-size: 17px;
    margin: 0 auto;
    letter-spacing: 1px;
    line-height: 1.4;
    color: #d4d4d4 !important;
}

.carousel-indicators li {
    width: 12px;
    height: 12px;
    background-color: #8a8a8a;
    border-radius: 50%;
    cursor: pointer;
    margin: 0 5px;
}

.carousel-indicators .active {
    background-color: #1583e9;
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: -12px;
}

/* //testimonials */
/* blog */
.blogs-bottom {
    box-shadow: 0px 2px 10px 1px rgba(0, 0, 0, 0.13);
}

.blog-w3 {
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    -ms-transition: all 0.5s;
    transition: all 0.5s;
}

.blog-w3:hover {
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
}

.blogs-bottom.p-4 h3 {
    font-size: 18px;
    color: #525050;
}

.blogs-bottom h4 {
    font-size: 23px;
    line-height: 1.4;
    letter-spacing: 1px;
}

.blogs-bottom i {
    color: #1583e9;
}

.blogs-bottom a {
    color: #999;
    letter-spacing: 1px;
    font-size: 15px;
}

.blogs-bottom a:Hover {
    color: #000;
}

/* //blog */

/* footer */
/* copyright */
p.copy-right-grids {
    font-size: 15px;
    letter-spacing: 2px;
}

p.copy-right-grids a {
    color: #1583e9;
}

/* //copyright */
/* social-icons */
.w3social-icons ul li {
    display: inline-block;
}

.w3social-icons ul li a {
    color: #000;
    font-size: 16px;
    display: block;
    -webkit-box-shadow: 0px 0px 1px 0px #fff;
    -moz-box-shadow: 0px 0px 1px 0px #fff;
    box-shadow: 0px 0px 1px 0px rgba(19, 18, 18, 0.33);
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 2.5;
}

.w3social-icons ul li a:hover {
    color: #1583e9;
    -webkit-box-shadow: 0px 0px 13px 2px #1583e9;
    -moz-box-shadow: 0px 0px 13px 2px #1583e9;
    box-shadow: 0px 0px 13px 2px #1583e9;
}

/* //social-icons */
/* footer nav */
ul.footer-nav-wthree li {
    display: inline-block;
}

ul.footer-nav-wthree li a {
    color: #000;
    letter-spacing: 1px;
    font-size: 16px;
}

/* //footer nav */
/* //footer */

/* inner pages */
.banner-w3ls-2 {
    background: url(https://snapinsight.net/images/aboutus.jpeg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 300px;
}

/* page details */
.breadcrumb li a {
    color: #1583e9;
    font-weight: bold;
}

.breadcrumb li {
    letter-spacing: 1px;
    color: #000;
}

/* //page details */

/* about page */
h1.tittle {
    text-shadow: 2px 2px 2px rgba(41, 41, 41, 0.15);
    font-size: 3em;
    color: #333338;
}

h2.sub-tittle {
    font-size: 16px;
    color: #1583e9;
    letter-spacing: 1px;
}

/* team */
.box16 {
    text-align: center;
    color: #fff;
    position: relative
}

.box16 .box-content,
.box16:after {
    width: 100%;
    position: absolute;
    left: 0
}

.box16:after {
    content: "";
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .08) 69%, rgba(0, 0, 0, .76) 100%);
    top: 0;
    transition: all .5s ease 0s
}

.box16 .post,
.box16 .title {
    transform: translateY(145px);
    transition: all .4s cubic-bezier(.13, .62, .81, .91) 0s
}

.box16:hover:after {
    background: linear-gradient(to bottom, rgba(0, 0, 0, .01) 0, rgba(0, 0, 0, .09) 11%, rgba(0, 0, 0, .12) 13%, rgba(0, 0, 0, .19) 20%, rgba(0, 0, 0, .29) 28%, rgba(0, 0, 0, .29) 29%, rgba(0, 0, 0, .42) 38%, rgba(0, 0, 0, .46) 43%, rgba(0, 0, 0, .53) 47%, rgba(0, 0, 0, .75) 69%, rgba(0, 0, 0, .87) 84%, rgba(0, 0, 0, .98) 99%, rgba(0, 0, 0, .94) 100%)
}

.box16 img {
    width: 100%;
    height: auto
}

.box16 .box-content {
    padding: 20px;
    margin-bottom: 20px;
    bottom: 0;
    z-index: 1
}

.box16 .title {
    font-size: 22px;
    font-weight: 700;
    margin: 0 0 10px
}

.box16 .post {
    display: block;
    padding: 8px 0;
    font-size: 15px
}

.box16 .social li a,
.box17 .icon li a {
    border-radius: 50%;
    font-size: 20px;
    color: #fff
}

.box16:hover .post,
.box16:hover .title {
    transform: translateY(0)
}

.box16 .social {
    list-style: none;
    padding: 0 0 5px;
    margin: 40px 0 25px;
    opacity: 0;
    position: relative;
    transform: perspective(500px) rotateX(-90deg) rotateY(0) rotateZ(0);
    transition: all .6s cubic-bezier(0, 0, .58, 1) 0s
}

.box16:hover .social {
    opacity: 1;
    transform: perspective(500px) rotateX(0) rotateY(0) rotateZ(0)
}

.box16 .social:before {
    content: "";
    width: 50px;
    height: 2px;
    background: #fff;
    margin: 0 auto;
    position: absolute;
    top: -23px;
    left: 0;
    right: 0
}

.box16 .social li {
    display: inline-block
}

.box16 .social li a {
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background: #1583e9;
    margin-right: 10px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.box17 .icon li,
.box17 .icon li a {
    display: inline-block
}

.box16 .social li a:hover {
    background: #fff;
    color: #1583e9;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.box16 .social li:last-child a {
    margin-right: 0
}

@media only screen and (max-width:990px) {
    .box16 {
        margin-bottom: 30px
    }
}

/* //team */
/* //about page */

/* gallery page */
.agile_gallery_grids {
    padding: 0 2em;
}

.demo>li {
    list-style-type: none;
    margin: 6px;
    display: inline-block;
    max-width: 355px;
}

/*jquery.picEyes*/
.picshade {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100% !important;
    background-color: #000;
    opacity: 0.91;
    filter: alpha(opacity=91);
    z-index: 99;
    display: none;
}

.pictures_eyes_close {
    position: fixed;
    top: 30px;
    right: 30px;
    display: inline-block;
    width: 30px;
    height: 30px;
    background: url(../images/close.png) no-repeat;
    z-index: 100;
    display: none;
}

.pictures_eyes {
    position: fixed;
    width: 100%;
    left: 0;
    top: 0;
    z-index: 199;
    display: none;
}

.pictures_eyes_in {
    position: relative;
    text-align: center;
}

.pictures_eyes_in img {
    max-height: 500px;
    max-width: 640px;
}

.pictures_eyes_in .prev,
.pictures_eyes_in .next {
    position: absolute;
    top: 50%;
    width: 51px;
    height: 51px;
    cursor: pointer;
}

.pictures_eyes_in .prev {
    left: 35px;
    background: url(../images/left1.png) no-repeat;
}

.pictures_eyes_in .next {
    right: 35px;
    background: url(../images/right1.png) no-repeat;
}

.pictures_eyes_indicators {
    position: fixed;
    left: 0;
    bottom: 15px;
    width: 100%;
    text-align: center;
    z-index: 299;
}

.pictures_eyes_indicators a {
    display: inline-block;
    width: 50px;
    height: 50px;
    margin: 6px 3px 0 3px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 2px #000;
    filter: alpha(opacity=50);
    opacity: 0.5;
    overflow: hidden;
}

.pictures_eyes_indicators img {
    height: 50px;
}

.pictures_eyes_indicators .current {
    filter: alpha(opacity=100);
    opacity: 1;
}

.gallery-grid1 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.gallery-grid1 .p-mask,
.row .product .vm-product-media-container .p-mask {
    opacity: 0;
    visibility: hidden;
    background: rgba(25, 24, 24, 0.8);
    bottom: 0%;
    position: absolute;
    padding: 1em 1em;
    width: 100%;
    -webkit-transform: translate3d(0px, 100%, 0px);
    -moz-transform: translate3d(0px, 100%, 0px);
    -ms-transform: translate3d(0px, 100%, 0px);
    -o-transform: translate3d(0px, 100%, 0px);
    transform: translate3d(0px, 100%, 0px);
    -webkit-transition: all .5s ease 0s;
    -moz-transition: all .5s ease 0s;
    transition: all .5s ease 0s;
    text-align: center;
    border-bottom: 5px solid #1583e9;
}

.gallery-grid1 .p-mask .p-desc {
    color: #a3a3a3;
    position: relative;
    display: block;
    margin-bottom: 10px;
    padding-bottom: 10px;
    font-size: 1em;
}

.gallery-grid1:hover .p-mask,
.row .product:hover .p-mask {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translate3d(0px, 0px, 0px);
    -moz-transform: translate3d(0px, 0px, 0px);
    -ms-transform: translate3d(0px, 0px, 0px);
    -o-transform: translate3d(0px, 0px, 0px);
    transform: translate3d(0px, 0px, 0px);
}

.p-mask h4, .p-mask h2,.p-mask h1 {
    color: #fff;
    font-size: 26px;
    font-weight: 600;
    letter-spacing: 1px;
}

.p-mask p {
    color: #f5f5f5;
    font-size: 13px;
    margin-top: 5px;
}

.pictures_eyes_in {
    position: relative;
    text-align: center;
}

.pictures_eyes_in img {
    width: 100%;
}

/* //gallery page */

/* contact page */
/* contact form */
.contact-top1 h1 {
    font-size: 28px;
    letter-spacing: 1px;
}

form.contact-wthree .form-control {
    border-radius: 0;
    background: #eee;
    border: none;
    font-size: 15px;
    letter-spacing: 1px;
}

form.contact-wthree label {
    width: 45px;
    height: 45px;
    text-align: center;
    background: #1583e9;
    line-height: 45px;
    color: #eee;
    margin-bottom: 0;
}

.contact-top1 button {
    background: #1583e9;
    letter-spacing: 1px;
    border-radius: 0px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
.contact-top1 button:hover{
    opacity: .8;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
/* //contact form */
/* contact details */
.contact-right-w3ls span {
    background: #fff;
    width: 40px;
    height: 40px;
    line-height: 40px;
}

.fv3-contact span {
    color: #fff;
    background: #1583e9;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
}

.fv3-contact p, .fv3-contact h2 {
    display: inline-block;
    vertical-align: middle;
    color: #333;
}
.fv3-contact h2 {
    font-size:16px;
    letter-spacing: 1px;
}

/* //contact details */
.map iframe {
    width: 100%;
    border: none;
    height: 400px;
    ;
}

/* //contact page */

/* responsive */

@media(max-width: 1680px) {}

@media(max-width: 1600px) {}

@media(max-width: 1440px) {
    .style-banner h1 {
        font-size: 44px;
    }

    .style-banner {
        padding: 9em 5em 0 5em;
    }

    .banner-img {
        border-radius: 160px 0 0 319px;
    }
    .left-build-wthree {
        width: 45%;
    }
}

@media(max-width: 1366px) {
    li.search {
        margin-left: 12em;
    }

    .style-banner h1 {
        font-size: 43px;
    }
    .left-build-wthree h6 {
        font-size: 18px;
    }
    h2.middle-title-w3 {
        font-size: 32px;
    }    
    ul.list-beach li p {
        font-size: 14px;
    }
    .some-another {
        margin-bottom: 13em;
    }
}

@media(max-width: 1280px) {
    li.search {
        margin-left: 9em;
    }

    .style-banner {
        padding: 6.5em 3em 0 4em;
    }

    .style-banner h1 {
        font-size: 40px;
    }

    p {
        font-size: 15px;
    }

    .banner-img {
        border-radius: 150px 0 0 300px;
    }
    ul.list-unstyled.brands li i {
        font-size: 60px;
    }
    .right-side-img-w3 {
        min-height: 45vw;
    }
    .grid-single p {
        font-size: 16px;
    }
    .some-another {
        margin-bottom: 12em;
    }
    .banner-w3ls-2 {
        min-height: 220px;
    }
    h1.tittle {
        font-size: 2.8em;
    }
}

@media(max-width: 1080px) {
    .navbar-light .navbar-nav .nav-link {
        font-size: 15px;
    }

    a.navbar-brand {
        font-size: 34px;
    }

    a.reqe-button {
        font-size: 14px;
    }

    .style-banner {
        padding: 5em 2em 0 2em;
    }

    .style-banner h1 {
        font-size: 38px;
    }

    .banner-img {
        border-radius: 130px 0 0 250px;
    }
    h3.title-w3:before {
        left: 410px;
    }
    .about-in .card {
        padding: 1em .5em;
    }
    .left-build-wthree {
        width: 100%;
        float: none;
        padding: 0 3.5em;
    }
    .right-side-img-w3 {
        min-height: 520px;
        width: 90%;
        border-radius: 200px 0 0 200px;
        margin-top:2em;
    }
    h3.title-w3-2:before {
        left: 254px;
    }
    .some-another {
        min-height: 44vw;
        margin-right: 2em;
        border-radius: 0 200px 200px 0;
    }
    .grid-single {
        right: -61px;
    }
    h3.title-w3-3:before {
        left: 198px;
    }
    .blogs-bottom h4 {
        font-size: 19px;
    }
    .blogs-bottom.p-4 h3 {
        font-size: 16px;
    }
    .blogs-bottom a {
        font-size: 14px;
    }
    h1.tittle {
        font-size: 2.5em;
    }
    .demo>li {
        max-width: 295px;
    }
    .map iframe {
        height: 320px;
    }
    .contact-bottom {
        padding: 0;
    }
}

@media(max-width: 1050px) {
    
}

@media(max-width: 1024px) {
    .style-banner h1 {
        font-size: 36px;
    }
}

@media(max-width: 991px) {
    li.search {
        margin-left: 0;
    }

    .style-banner {
        padding: 5em 5em 4em;
    }

    .banner-img {
        border-radius: 154px 0 0 300px;
        min-height: 56vw;
        margin-left: 12em;
    }

    .style-banner {
        padding: 4em 5em 2em;
    }
    h3.title-w3:before {
        left: 296px;
    }
    ul.list-unstyled.brands li i {
        font-size: 52px;
    }
    .blogs-bottom h4 {
        font-size: 20px;
    }
    .about-in .card {
        max-width: 500px;
        margin: 0 auto;
    }
    p.title-para {
        font-size: 13px;
        margin-top: 3em;
    }
    h3.title-w3-3, h3.title-w3-2 {
        font-size: 34px;
    }
    h3.title-w3-2:before{
        left: 248px;
    }
    h3.title-w3-3:before {
        left: 198px;
    }
    .style-agile-border img {
        width: 60%;
    }
    .steps-reach-w3l span {
        width: 100px;
        height: 100px;
        line-height: 3.5
    }
    .steps-reach-w3l p {
        font-size: 15px;
    }
    ul.footer-nav-wthree li a {
        font-size: 15px;
    }
    p.copy-right-grids {
        font-size: 14px;
    }
    .box16 {
        max-width: 400px;
        margin: 0 auto;
    }
    .demo>li {
        max-width: 215px;
    }
}

@media(max-width: 900px) {
    .right-side-img-w3 {
        min-height: 470px;
    }
    .some-another {
        min-height: 480px;
    }
    .grid-single {
        right: -24px;
    }
}

@media(max-width: 800px) {
    .style-banner h1 {
        font-size: 34px;
    }

    .button-style {
        font-size: 13px;
    }

    .banner-img {
        border-radius: 140px 0 0 240px;
        min-height: 56vw;
        margin-left: 10em;
    }
    .right-side-img-w3 {
        min-height: 410px;
        border-radius: 150px 0 0 150px;
    }
    .banner-w3ls-2 {
        min-height: 200px;
    }
}

@media(max-width: 768px) {
    .some-another {
        margin-right: 1em;
    }   
    .w3_testimonials_grid h4 {
        font-size: 15px;
    } 
}

@media(max-width: 736px) {
    .style-banner {
        padding: 4em 4em 2em;
    }
    h3.title-w3 {
        font-size: 36px;
    }
    h3.title-w3:before {
        left: 202px;
    }
    ul.list-unstyled.brands li i {
        font-size: 48px;
    }
    h2.middle-title-w3 {
        font-size: 30px;
    }
    .grid-single {
        right: -17px;
        max-width: 500px;
    }
    .grid-single p {
        font-size: 14px;
    }
    .some-another {
        min-height: 420px;
        border-radius: 0 120px 120px 0;
    }
    h3.title-w3-2:before {
        left: 149px;
    }
    .style-agile-border {
        display: none;
    }
    h3.title-w3-3, h3.title-w3-2 {
        font-size: 32px;
    }
    h1.tittle {
        font-size: 2em;
    }  
    .demo>li {
        max-width: 241px;
    }  
}

@media(max-width: 667px) {
    .style-banner {
        padding: 4em 3em 2em;
    }

    .banner-img {
        border-radius: 125px 0 0 240px;
        min-height: 62vw;
        margin-left: 7em;
    }
    .left-build-wthree {
        padding: 0 2em;
    }
    h2.middle-title-w3 {
        font-size: 28px;
    }
    .right-side-img-w3 {
        min-height: 360px;
        border-radius: 120px 0 0 120px;
        width: 94%;
    }
    .w3_testimonials_grid h5 {
        font-size: 21px;
    }
}

@media(max-width: 640px) {}

@media(max-width: 600px) {
    .style-banner h1 {
        font-size: 32px;
    }

    p {
        font-size: 14px;
    }

    .banner-img {
        border-radius: 100px 0 0 240px;
    }
    .blog-w3:hover {
        transform: scale(1);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
    }
    .banner-w3ls-2 {
        min-height: 160px;
    }
}

@media(max-width: 568px) {
    a.navbar-brand {
        font-size: 32px;
    }

    .style-banner {
        padding: 3em 2em 2em;
    }

    .banner-img {
        border-radius: 100px 0 0 220px;
        min-height: 64vw;
        margin-left: 4em;
    }
    .right-side-img-w3 {
        min-height: 320px;
    }
}

@media(max-width: 480px) {
    .style-banner h1 {
        font-size: 30px;
    }
    h3.title-w3 {
        font-size: 32px;
    }
    h3.title-w3:before {
        left: 167px;
    }
    ul.list-unstyled.brands li i {
        font-size: 42px;
    }
    h2.middle-title-w3 {
        font-size: 26px;
    }
    .left-build-wthree h6 {
        font-size: 16px;
    }
    .grid-single {
        max-width: 400px;
    }
    .some-another {
        min-height: 350px;
    }
    .grid-single {
        bottom: -60%;
    }
    h3.title-w3-3, h3.title-w3-2 {
        font-size: 28px;
    }
    .grid-single {
        bottom: -52%;
    }
    h1.tittle {
        font-size: 1.8em;
    }  
    .demo>li {
        max-width: 422px;
    }
    .map iframe {
        height: 280px;
    }
    .fv3-contact h2 {
        font-size: 15px;
    }
}

@media(max-width: 440px) {
    .banner-img {
        border-radius: 85px 0 0 170px;
        min-height: 70vw;
        margin-left: 2em;
    }
    h3.title-w3:before {
        left: 160px;
        width: 80px;
    }
    .w3_testimonials_grid h4 {
        font-size: 14px;
    }
    p.copy-right-grids {
        font-size: 13px;
    }
}

@media(max-width: 414px) {
    .style-banner h1 {
        font-size: 28px;
    }

    p {
        font-size: 13px;
    }

    .navbar {
        padding: .2rem 1rem;
    }

    .style-banner {
        padding: 2em 2em 2em;
    }
    h3.title-w3 {
        font-size: 30px;
    }
    h3.title-w3:before {
        left: 146px;
    }
    .right-side-img-w3 {
        min-height: 300px;
        border-radius: 100px 0 0 100px;
        width: 96%;
    }
    .grid-single {
        max-width: 340px;
    }
    .grid-single p {
        font-size: 13px;
    }
    h3.title-w3-3, h3.title-w3-2 {
        font-size: 24px;
    }
    .banner-w3ls-2 {
        min-height: 120px;
    }

}

@media(max-width: 384px) {
    .style-banner h1 {
        font-size: 26px;
    }

    .button-style {
        font-size: 12px;
    }
    .navbar-light .navbar-nav .nav-link {
        font-size: 14px;
        letter-spacing: 1px;
    }
    h3.title-w3:before {
        left: 128px;
    }
    ul.list-unstyled.brands li i {
        font-size: 34px;
    }
    h2.middle-title-w3 {
        font-size: 24px;
    }
    ul.footer-nav-wthree li a {
        font-size: 14px;
    }
    h1.tittle {
        font-size: 1.5em;
    }
    h2.sub-tittle {
        font-size: 14px;
    }
    .fv3-contact h2 {
        font-size: 13px;
    }
}

@media(max-width: 375px) {
    .map iframe {
        height: 250px;
    }
    .fv3-contact h2 {
        font-size: 12px;
        letter-spacing: 0px;
    }
    .contact-top1 button {
        font-size: 15px;
    }
}

@media(max-width: 320px) {
    .banner-img {
        border-radius: 71px 0 0 139px;
    }
    .style-banner h1 {
        font-size: 25px;
    }
    a.navbar-brand {
        font-size: 30px;
    }
    h3.title-w3 {
        font-size: 28px;
    }
    h3.title-w3:before {
        left: 104px;
        width: 70px;
    }
    ul.list-unstyled.brands li {
        width: 18%;
    }
    ul.list-unstyled.brands li i {
        font-size: 32px;
    }
    p.title-para {
        font-size: 12px;
        margin-top: 2.5em;
    }
    h2.middle-title-w3 {
        font-size: 22px;
    }
    .left-build-wthree h6 {
        font-size: 14px;
    }
    ul.list-beach li p {
        font-size: 12px;
    }
    .right-side-img-w3 {
        min-height: 230px;
        border-radius: 80px 0 0 80px;
    }
    .grid-single {
        max-width: 280px;
    }
    h3.title-w3-3, h3.title-w3-2 {
        font-size: 22px;
    }
    .w3_testimonials_grid h5 {
        font-size: 17px;
    }
    .w3_testimonials_grid h4 {
        font-size: 13px;
    }
    ul.footer-nav-wthree li a {
        font-size: 13px;
    }
    .contact-top1 button {
        width: 36% !important;
    }
}

/* //responsive */
</style>
<body>
	
<br><br><br><br><br><br>
	<!-- banner -->
	 
	<div class="main-w3pvt">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 style-banner">
					<h1 class="text-dark font-weight-bold">We Design <span>Beautiful</span> Interiors & Look Awesome </h1>
					<p class="mt-5">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.</p>
						 <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
               
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post" style="width:400px;">
                            <input type="email" name="nl-email" value="" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
					<a href="blog.html" class="btn button-style mt-sm-5 mt-4">Read More</a>
				</div>
				<div class="col-lg-6 banner-img">

				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->

	<!-- brands -->
	<div class="bottom-w3pvt pb-lg-5 py-lg-0 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Our Brands</h3>
			<ul class="list-unstyled brands text-center pt-5">
				<li><i class="fa fa-gg" aria-hidden="true"></i></li>
				<li><i class="fa fa-houzz active" aria-hidden="true"></i></li>
				<li><i class="fa fa-yoast" aria-hidden="true"></i></li>
				<li><i class="fa fa-skyatlas" aria-hidden="true"></i></li>
				<li><i class="fa fa-pied-piper active" aria-hidden="true"></i></li>
			</ul>
		</div>
	</div>
	<!-- //brands -->
	
	<!-- about bottom -->
	<div class="blog-w3ls py-5 bg-light border-bottom" id="what">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Our Focus</h3>
			
			<div class="row package-grids">
				<div class="col-md-4 blog-w3">
					<div class="blogs-top">
						<img src="images/w1.jpg" alt="" class="img-fluid" />
					</div>
					<div class="blogs-bottom p-4 bg-white">
						<h4 class="text-dark font-weight-bold mb-3">Solutions</h4>
						<a href="about.html">
							<i class="fa fa-line-chart mr-2"></i>Learn More</a>
					</div>
				</div>
				<div class="col-md-4 blog-w3 my-md-0 my-5">
					<div class="blogs-top">
						<img src="images/w2.jpg" alt="" class="img-fluid" />
					</div>
					<div class="blogs-bottom p-4 bg-white">
						<h4 class="text-dark font-weight-bold mb-3">Games</h4>
						<a href="about.html">
							<i class="fa fa-paint-brush mr-2"></i>Learn More</a>
					</div>
				</div>
				<div class="col-md-4 blog-w3">
					<div class="blogs-top">
						<img src="images/w3.jpg" alt="" class="img-fluid" />
					</div>
					<div class="blogs-bottom p-4 bg-white">
						<h4 class="text-dark font-weight-bold mb-3">Insights </h4>
						<a href="about.html">
							<i class="fa fa-gavel mr-2"></i>Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about bottom -->
	
	<!-- ways -->
	<div class="join-w3l1 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 title-w3-3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">We Do Great Design For Creative
				Folks.</h3>
				<p class="title-para text-center mx-auto mb-sm-5 mb-4">Empowering people with our innovative products. </p>
			<div class="row join-agile2 text-center pt-md-5 pt-4">
				<div class="col-md-3 steps-reach-w3l">
					<span class="fa fa-check-square-o" aria-hidden="true"></span>
					<p class="mt-3">Dream Design</p>
					<div class="style-agile-border">
						<img src="images/sty1.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 steps-reach-w3l my-md-0 my-4">
					<span class="fa fa-volume-control-phone" aria-hidden="true"></span>
					<p class="mt-3">Contact Us</p>
					<div class="style-agile-border second-border">
						<img src="images/sty2.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 steps-reach-w3l">
					<span class="fa fa-calendar" aria-hidden="true"></span>
					<p class="mt-3">Choose the Date</p>
					<div class="style-agile-border">
						<img src="images/sty1.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 steps-reach-w3l mt-md-0 mt-4">
					<span class="fa fa-smile-o" aria-hidden="true"></span>
					<p class="mt-3">Design Ready</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //ways -->
	

	<!-- services -->
	<section class="banner-bottom-w3layouts py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Our Solutions</h3>
			<p class="title-para text-center mx-auto mb-sm-5 mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco
				laboris nisi ut aliquip ex ea commodo consequat, dolor sit amet consectetur elit.</p>
			<div class="row pt-sm-4">
				<div class="col-lg-4 about-in text-center">
					<div class="card active">
						<div class="card-body">
							<i class="fa fa-gavel mb-4" aria-hidden="true"></i>
							<h5 class="card-title mb-3">Heading Here</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 about-in text-center my-lg-0 my-4">
					<div class="card active">
						<div class="card-body">
							<i class="fa fa-paint-brush mb-4" aria-hidden="true"></i>
							<h5 class="card-title mb-3">Heading Here</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 about-in text-center">
					<div class="card active">
						<div class="card-body">
							<i class="fa fa-magic mb-4" aria-hidden="true"></i>
							<h5 class="card-title mb-3">Heading Here</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-lg-4">
				<div class="col-lg-4 about-in mt-lg-4 text-center">
					<div class="card active">
						<div class="card-body">
							<i class="fa fa-wrench mb-4" aria-hidden="true"></i>
							<h5 class="card-title mb-3">Heading Here</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 about-in mt-lg-4 text-center">
					<div class="card active">
						<div class="card-body">
							<i class="fa fa-cogs mb-4" aria-hidden="true"></i>
							<h5 class="card-title mb-3">Heading Here</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 about-in mt-lg-4 text-center">
					<div class="card active">
						<div class="card-body">
							<i class="fa fa-line-chart mb-4" aria-hidden="true"></i>
							<h5 class="card-title mb-3">Heading Here</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //services -->

	<!-- middle section -->
	<div class="middle-w3l pb-5" id="some">
		<div class=" pb-xl-5 pb-lg-3">
			<div class="">
				<div class="left-build-wthree">
					<h2 class="middle-title-w3 text-dark font-weight-bold">Why choose us?</h2>
					<h6 class="mt-5">All purchases and free pick-up in store same-day.And get the Coupan of free shopping!
						sale up to 20% of all product.</h6>
					<div class="row">
						<div class="col-sm-6">
							<ul class="list-beach list-unstyled mt-lg-5 mt-4">
								<li>
									<div class="row">
										<div class="col-2 text-center pr-sm-0">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
										<div class="col-10">
											<p>Totam rem apeet quasi.</p>
										</div>
									</div>
								</li>
								<li class="my-3">
									<div class="row">
										<div class="col-2 text-center pr-sm-0">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
										<div class="col-10">
											<p>A rchcto beatae Totam.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-2 text-center pr-sm-0">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
										<div class="col-10">
											<p>Dicta sunt explicabo tecto beatae Totam.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul class="list-beach list-unstyled mt-lg-5 mt-sm-4 mt-3">
								<li>
									<div class="row">
										<div class="col-2 text-center pr-sm-0">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
										<div class="col-10">
											<p>Totam rem apeet quasi.</p>
										</div>
									</div>
								</li>
								<li class="my-3">
									<div class="row">
										<div class="col-2 text-center pr-sm-0">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
										<div class="col-10">
											<p>A rchcto beae Totam.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-2 text-center pr-sm-0">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
										<div class="col-10">
											<p>Dicta sunt expo excabo.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<a href="blog.html" class="btn button-style mt-sm-5 mt-4">Read More</a>
				</div>
				<div class="right-side-img-w3">

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

	<!-- middle section 2 -->
	<div class="some-another text-center py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="grid-single bg-white p-sm-5 p-3">
				<h3 class="title-w3 title-w3-2 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Heading Here</h3>
				<p class="mb-4 mt-2">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
					minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
				<a href="blog.html" class="btn button-style mt-sm-4 mt-3">Read More</a>
			</div>
		</div>
	</div>
	<!-- //middle section 2 -->

	

	<!-- blog -->
	<div class="blog-w3ls py-5 bg-light" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Our Blog</h3>
			<p class="title-para text-center mx-auto mb-sm-5 mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco
				laboris nisi ut aliquip ex ea commodo consequat, dolor sit amet consectetur elit.</p>
			<div class="row package-grids">
				<div class="col-md-4 blog-w3">
					<div class="blogs-top">
						<a href="single.html">
							<img src="images/blog1.jpg" alt="" class="img-fluid" />
						</a>
					</div>
					<div class="blogs-bottom p-4 bg-white">
						<h4 class="text-dark mb-3">Sit voluptatem accusantium doloremque</h4>
						<h3 class="my-3">18 Sep 2018</h3>
						<a href="single.html">
							<i class="fa fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-4 blog-w3 my-md-0 my-5">
					<div class="blogs-top">
						<a href="single.html">
							<img src="images/blog2.jpg" alt="" class="img-fluid" />
						</a>
					</div>
					<div class="blogs-bottom p-4 bg-white">
						<h4 class="text-dark mb-3">Sit voluptatem accusantium doloremque</h4>
						<h3 class="my-3">21 Sep 2018</h3>
						<a href="single.html">
							<i class="fa fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-4 blog-w3">
					<div class="blogs-top">
						<a href="single.html">
							<img src="images/blog3.jpg" alt="" class="img-fluid" />
						</a>
					</div>
					<div class="blogs-bottom p-4 bg-white">
						<h4 class="text-dark">Sit voluptatem accusantium doloremque</h4>
						<h3 class="my-3">30 Sep 2018</h3>
						<a href="single.html">
							<i class="fa fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="blog.html" class="btn button-style mt-sm-5 mt-4">Read More</a>
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- testimonials -->
	<div class="testimonials text-center py-5" id="testi">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-5 text-white text-center font-weight-bold">Testimonials</h3>
			<div id="carouselExampleIndicators" class="carousel slide pb-5" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="w3_testimonials_grid">
							<img src="images/te1.jpg" alt=" " class="img-fluid rounded-circle" />
							<h5 class="mt-3 text-white">Thomas Carl - Sed do eiusmod</h5>
							<h4 class="mx-auto mt-4 text-light">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
								quo minus
								id quod possimus,
								omnis voluptas.
							</h4>
						</div>
					</div>
					<div class="carousel-item">
						<div class="w3_testimonials_grid">
							<img src="images/te2.jpg" alt=" " class="img-fluid rounded-circle" />
							<h5 class="mt-3 text-white">Petey Cruiser - Sed do eiusmod</h5>
							<h4 class="mx-auto mt-4 text-light">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
								quo minus
								id quod possimus,
								omnis voluptas.
							</h4>
						</div>
					</div>
					<div class="carousel-item">
						<div class="w3_testimonials_grid">
							<img src="images/te3.jpg" alt=" " class="img-fluid rounded-circle" />
							<h5 class="mt-3 text-white">Speed Wagon - Sed do eiusmod</h5>
							<h4 class="mx-auto mt-4 text-light">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
								quo minus
								id quod possimus,
								omnis voluptas.
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

    
	
	 <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Footer Content -->
                        <div class="footer-content mb-15">
                            <p>Mumbai, India <br> <a href="mailto:snapinsight0@gmail.com">snapinsight0@gmail.com</a></p>
                        </div>
                         <div class="footer-content mb-15">
                            <p><a href="mailto:snapinsight0@gmail.com">jobs@snapinsight.net</a></p>
                        </div>
                        <p class="mb-0"> Available 24/7</p>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Quick Link</h4>

                    
                            <ul class="our-link">
                                <li><a href="https://snapinsight.net/index.php">Home</a></li>
                                <li><a href="https://snapinsight.net/contacts.php">Contact Us</a></li>
                                <li><a href="https://snapinsight.net/Job.php">Jobs</a></li>
                                <li><a href="https://snapinsight.net/faq.php">FAQs</a></li>
                            </ul>
                  
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Resources</h4>

                       
                            <ul class="our-link">
                                <li><a href="https://snapinsight.net/Privacypolicy.php">Privacy Policy</a></li>
                                <li><a href="https://snapinsight.net/termsandconditions.php">Terms & Conditions</a></li>
                            </ul>
                        
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Us</h4>
                        <p>Inventions and Easy life is what we focus on. </p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text mb-30">
                            <p>&copy; Copyright 2020 <a href="#">Snapinsight</a>.</p>
                        </div>

                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="https://Facebook.com/snapinsight" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://Twitter.com/Snapinsight0" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://Instagram.com/snapinsight" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/snapinsight/?viewAsMember=true" class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

 <div class="row" style="margin-bottom: 30px;">
                

            </div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->
<script>
 						function myFunction() {
window.alert("Thank you for your interest. We are launcing soon. Subscribe to our mailing list to be notified about our solutions.");
}
</script>
    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="https://snapinsight.net/snap/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="https://snapinsight.net/snap/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://snapinsight.net/snap/js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="https://snapinsight.net/snap/js/snap.bundle.js"></script>
    <!-- Active js -->
    <script src="https://snapinsight.net/snap/js/default-assets/active.js"></script>
 


    
 
</body>

</html>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="https://snapinsight/web/js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="https://snapinsight/web/js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- fixed navigation -->
	<script src="https://snapinsight/web/js/fixed-nav.js"></script>
	<!-- //fixed navigation -->
	<!-- dropdown smooth -->
	<script>
		$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
	<!-- //dropdown smooth -->

	<!-- search plugin -->
	<!-- pop-up-box -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js"></script>
	<!-- //pop-up-box -->
	<!-- search script -->
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //search script -->
	<!-- //search plugin -->
 

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/inside.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->


</body>

</html>