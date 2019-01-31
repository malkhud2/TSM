<style>


/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Poppins-Regular;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
}

@font-face {
  font-family: Poppins-SemiBold;
  src: url('../fonts/poppins/Poppins-SemiBold.ttf'); 
}




/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: Poppins-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #fff;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #fff;}
input:-moz-placeholder { color: #fff;}
input::-moz-placeholder { color: #fff;}
input:-ms-input-placeholder { color: #fff;}

textarea::-webkit-input-placeholder { color: #fff;}
textarea:-moz-placeholder { color: #fff;}
textarea::-moz-placeholder { color: #fff;}
textarea:-ms-input-placeholder { color: #fff;}

label {
  margin: 0;
  display: block;
}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: Poppins-Regular;
  font-size: 13px;
  color: #e5e5e5;
  line-height: 1.5;
}


/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;

  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 1;  
}

.container-login100::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(255,255,255,0.9);
}

.wrap-login100 {
  width: 500px;
  border-radius: 10px;
  overflow: hidden;
  padding: 55px 55px 37px 55px;

  background: #9152f8;
  background: -webkit-linear-gradient(top, #7579ff, #b224ef);
  background: -o-linear-gradient(top, #7579ff, #b224ef);
  background: -moz-linear-gradient(top, #7579ff, #b224ef);
  background: linear-gradient(top, #7579ff, #b224ef);
}


/*------------------------------------------------------------------
[ Form ]*/

.login100-form {
  width: 100%;
}

.login100-form-logo {
  font-size: 60px; 
  color: #333333;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background-color: #fff;
  margin: 0 auto;
}

.login100-form-title {
  font-family: Poppins-Medium;
  font-size: 30px;
  color: #fff;
  line-height: 1.2;
  text-align: center;
  text-transform: uppercase;

  display: block;
}


/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid rgba(255,255,255,0.24);
  margin-bottom: 30px;
}

.input100 {
  font-family: Poppins-Regular;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 45px;
  background: transparent;
  padding: 0 5px 0 38px;
}

/*---------------------------------------------*/ 
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  background: #fff;
}

.focus-input100::after {
  font-family: Material-Design-Iconic-Font;
  font-size: 22px;
  color: #fff;

  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 6px;
  left: 0px;
  padding-left: 5px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus {
  padding-left: 5px;
}

.input100:focus + .focus-input100::after {
  top: -22px;
  font-size: 18px;
}

.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::after {
  top: -22px;
  font-size: 18px;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

.has-val.input100 {
  padding-left: 5px;
}


/*==================================================================
[ Restyle Checkbox ]*/

.contact100-form-checkbox {
  padding-left: 5px;
  padding-top: 5px;
  padding-bottom: 35px;
}

.input-checkbox100 {
  display: none;
}

.label-checkbox100 {
  font-family: Poppins-Regular;
  font-size: 13px;
  color: #fff;
  line-height: 1.2;

  display: block;
  position: relative;
  padding-left: 26px;
  cursor: pointer;
}

.label-checkbox100::before {
  content: "\f26b";
  font-family: Material-Design-Iconic-Font;
  font-size: 13px;
  color: transparent;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 2px;
  background: #fff;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

.input-checkbox100:checked + .label-checkbox100::before {
  color: #555555;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #555555;
  line-height: 1.2;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 120px;
  height: 50px;
  border-radius: 25px;

  background: #9152f8;
  background: -webkit-linear-gradient(bottom, #7579ff, #b224ef);
  background: -o-linear-gradient(bottom, #7579ff, #b224ef);
  background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
  background: linear-gradient(bottom, #7579ff, #b224ef);
  position: relative;
  z-index: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 25px;
  background-color: #fff;
  top: 0;
  left: 0;
  opacity: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  color: #fff;
}

.login100-form-btn:hover:before {
  opacity: 0;
}


/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 576px) {
  .wrap-login100 {
    padding: 55px 15px 37px 15px;
  }
}



/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

html{overflow-x:hidden;}
body {

	font-family:POPPINS-REGULAR, Helvetica, sans-serif;
	overflow-x:hidden;

}
@font-face {
font-family: 'POPPINS-REGULAR';
src: url('../fonts/POPPINS-REGULAR.eot');
src: url('../fonts/POPPINS-REGULAR.eot?#iefix') format('embedded-opentype'), url('../fonts/POPPINS-REGULAR.svg#POPPINS-REGULAR') format('svg'), url('../fonts/POPPINS-REGULAR.woff') format('woff'), url('../fonts/POPPINS-REGULAR.TTF') format('truetype'), url('../fonts/POPPINS-REGULAR.otf') format('truetype');
font-weight: normal;
font-style: normal;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-smoothing: antialiased;
}
@font-face {
font-family: 'POPPINS-MEDIUM';
src: url('../fonts/POPPINS-MEDIUM.eot');
src: url('../fonts/POPPINS-MEDIUM.eot?#iefix') format('embedded-opentype'), url('../fonts/POPPINS-MEDIUM.svg#POPPINS-MEDIUM') format('svg'), url('../fonts/POPPINS-MEDIUM.woff') format('woff'), url('../fonts/POPPINS-MEDIUM.TTF') format('truetype'), url('../fonts/POPPINS-MEDIUM.otf') format('truetype');
font-weight: normal;
font-style: normal;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-smoothing: antialiased;
}

@font-face {
font-family: 'POPPINS-SEMIBOLD';
src: url('../fonts/POPPINS-SEMIBOLD.eot');
src: url('../fonts/POPPINS-SEMIBOLD.eot?#iefix') format('embedded-opentype'), url('../fonts/POPPINS-SEMIBOLD.svg#POPPINS-SEMIBOLD') format('svg'), url('../fonts/POPPINS-SEMIBOLD.woff') format('woff'), url('../fonts/POPPINS-SEMIBOLD.TTF') format('truetype'), url('../fonts/POPPINS-SEMIBOLD.otf') format('truetype');
font-weight: normal;
font-style: normal;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-smoothing: antialiased;
}

@font-face {
font-family: 'ROBOTO-CONDENSED';
src: url('../fonts/ROBOTO-CONDENSED.eot');
src: url('../fonts/ROBOTO-CONDENSED.eot?#iefix') format('embedded-opentype'), url('../fonts/ROBOTO-CONDENSED.svg#ROBOTO-CONDENSED') format('svg'), url('../fonts/ROBOTO-CONDENSED.woff') format('woff'), url('../fonts/ROBOTO-CONDENSED.TTF') format('truetype'), url('../fonts/ROBOTO-CONDENSED.otf') format('truetype');
font-weight: normal;
font-style: normal;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-smoothing: antialiased;
}

.header-top{float:left; width:100%; background:#566987; padding:8px 0px;}
.header-top-right{float:left; display:inline-block; font-size:12px; color:#fff;}
.header-top-nav{float:right; display:inline-block;}
.header-top-nav ul{padding:0px; margin:0px;}
.header-top-nav li{list-style:none; line-height:13px; border-right:solid 1px #fff; padding:0px 7px; float:left;}
.header-top-nav li:last-child{border:none; padding-right:0px;}
.header-top-nav li a{color:#fff; font-size:12px; text-transform:uppercase;}
.header-top-nav li a:hover{text-decoration:none; color:#94b1df;}

.header-bottom{float:left; width:100%; padding:25px 0px;}

#navbar{padding:0px; margin-top:0px;}
.navbar{margin:0px; padding:0px; border:none; min-height:inherit;}
.navbar-brand{padding:0px; height:auto;}
.navbar>.container .navbar-brand{margin-left:0px;}
.navbar-nav{margin-top:12px;}
.navbar-nav>li{padding:0px 0 0 22px;}
.navbar-nav>li>a{padding:0px; font-size:14px; text-transform:uppercase; text-shadow: 0 0 0; color:#1d1d1d; font-family:POPPINS-MEDIUM, Helvetica, sans-serif; letter-spacing:0.4px;}
.navbar-nav>li>a:hover, .navbar-nav>li>a:focus{color:#566987; background:none; outline:none;}

.banner{position:relative; float:left; width:100%; text-align:center;}
.banner-img, .banner-img img{width:100%;}
.banner-content{position:absolute; left:0px; top:40%; width:100%;}
.banner-content h1{color:#fff; font-size:38px; text-transform:uppercase; font-family:ROBOTO-CONDENSED, Helvetica, sans-serif; margin:0px;}
.banner-content h3{color:#fff; font-size:18px; text-transform:uppercase; font-family:ROBOTO-CONDENSED, Helvetica, sans-serif; margin:18px 0px;}

.bannerform{float:left; width:86%; margin:0px 7%; background:#fff;}
.bannerform input[type="text"], .bannerform select {
	width:320px;
	margin:8px 0 8px 8px;
	float:left;
	padding:0px 10px;
	height:42px;
	background: #fff;
	font-size:14px;
	outline:none;
	font-weight:400;
	border:1px solid #d5d5d5;
	color:#535151;
}
.zip{width:185px!important;}
.bannerform-btn-box{padding:8px; background:#cb2e1d; float:right; display:inline-block;}
.bannerform-btn {
	display: inline-block;
	border:solid 1px #fff;
	padding:0px 25px;
	height:42px;
	background:none;
	text-transform:uppercase;
	line-height:42px;
	font-family:ROBOTO-CONDENSED, Helvetica, sans-serif;
	font-size:18px;
	text-align:center;
	color:#fff;
	font-size:16px;
	cursor:pointer;
	 -moz-transition: all .3s ease-in-out;
 -webkit-transition: all .3s ease-in-out;
 transition: all .3s ease-in-out;
}
.bannerform-btn:hover{background:#fff; color:#cb2e1d;}

.testimonial-box{float:left; width:100%; margin-top:-102px; position:relative; z-index:9;}
.testimonial{width:515px; margin:0 auto; text-align:center;}
.testimonial img{width:167px; height:167px; border:solid 7px #fff; border-radius:50%;}
.testimonial h4{color:#cb2e1d; font-size:14px; text-transform:uppercase; font-family:POPPINS-MEDIUM, Helvetica, sans-serif;}
.testimonial h5{color:#1d1d1d; font-size:14px;}
.testimonial p{color:#666666; font-size:14px; line-height:23px;}


.texas-house-bg{padding-top:60px; float:left; width:100%;}

.texas-house-bg-content{width:640px; float:left; padding-top:40px;}
.texas-house-bg-links{margin-right:80px; float:left;}
.texas-house-bg-links h1{color:#cb2e1d; text-transform:uppercase; font-size:22px; font-family:POPPINS-SEMIBOLD, Helvetica, sans-serif; margin:0px; padding-bottom:10px; background:url(../images/heading-bg.png) no-repeat left bottom;}
.texas-house-bg-links ul{padding:0px; margin:12px 0 0 0px;}
.texas-house-bg-links li{background:url(../images/blue-dot.png) no-repeat left 4px; padding-left:18px; font-size:14px; margin:3px 0px; list-style:none;}
.texas-house-bg-links li a{color:#666666;}
.texas-house-bg-links li a:hover{color:#000; text-decoration:none;}

.texas-house-bg-img{width:485px; float:right; position:relative; padding:30px 0px;}
.texas-house-bg-img::after{background:#566987; position:absolute; right:-4580px; z-index:-9; top:-15px; content:""; height:100%; width:5000px;}
.texas-house-bg-img h2{font-size:19px; color:#fff; text-transform:uppercase; padding-left:80px; color:#fff; margin-bottom:0px;}

.access-mobile-bg{padding:60px 0px; float:left; width:100%;}

.access-mobile-bg-content{width:600px; float:right; padding-top:105px;}
.access-mobile-bg-content h1{color:#cb2e1d; text-transform:uppercase; font-size:22px; font-family:POPPINS-SEMIBOLD, Helvetica, sans-serif; margin:0 0 15px 0px; padding-bottom:10px; background:url(../images/heading-bg.png) no-repeat left bottom;}
.access-mobile-bg-content p{color:#666666; font-size:14px; line-height:23px;}
.access-mobile-bg-content a{color:#1a1a1a; font-size:14px;}
.access-mobile-bg-content a:hover{color:#666666; text-decoration:none;}

.access-mobile-bg-img{width:485px; float:left; position:relative; padding:30px 0px;}
.access-mobile-bg-img::after{background:#566987; position:absolute; left:-4580px; z-index:-9; top:-15px; content:""; height:100%; width:5000px;}
.access-mobile-bg-img h2{font-size:19px; color:#fff; text-transform:uppercase; color:#fff; margin-bottom:0px;}

.additional-searches{float:left; width:100%; background:#f5f5f5; padding:30px 0px;}
.additional-searches-bg{background:url(../images/additional-searches-bg.png) no-repeat left top #fff; padding:30px 25px; min-height:360px;}
.additional-searches-bg h1{color:#cb2e1d; text-transform:uppercase; font-size:22px; font-family:POPPINS-SEMIBOLD, Helvetica, sans-serif; margin:0px; padding-bottom:10px; background:url(../images/heading-bg.png) no-repeat left bottom;}
.additional-searches-bg ul{padding:0px; margin:12px 0 0 0px;}
.additional-searches-bg li{background:url(../images/blue-dot.png) no-repeat left 4px; padding-left:18px; font-size:14px; margin:3px 0px; list-style:none;}
.additional-searches-bg li a{color:#666666;}
.additional-searches-bg li a:hover{color:#000; text-decoration:none;}
.viewbtn{float:right; color:#1a1a1a; font-size:14px; margin-top:10px;}
.viewbtn:hover{text-decoration:none; color:#666666;}

.legislative-activity{float:left; width:100%; padding:55px 0px;}
.legislative-activity-img{float:right; width:420px;}
.legislative-activity-img img{width:100%;}
.legislative-activity-content{float:left; width:660px; padding-top:45px;}

.legislative-activity-links{margin-right:50px; float:left;}
.legislative-activity-links h1{color:#cb2e1d; text-transform:uppercase; font-size:22px; font-family:POPPINS-SEMIBOLD, Helvetica, sans-serif; margin:0px; padding-bottom:10px; background:url(../images/heading-bg.png) no-repeat left bottom;}
.legislative-activity-links ul{padding:0px; margin:12px 0 0 0px;}
.legislative-activity-links li{background:url(../images/blue-dot.png) no-repeat left 4px; padding-left:18px; font-size:14px; margin:3px 0px; list-style:none;}
.legislative-activity-links li a{color:#666666;}
.legislative-activity-links li a:hover{color:#000; text-decoration:none;}
.col-black{color:#333232!important;}

.searchform-bg{padding:45px 0px; float:left; width:100%; background:url(../images/search-form-bg.jpg) no-repeat; background-size:cover;}
.searchform-bg h1{margin:0px; font-size:38px; text-transform:uppercase; color:#fff; font-family:ROBOTO-CONDENSED, Helvetica, sans-serif; text-align:center;}
.searchform-bg p{font-family:ROBOTO-CONDENSED, Helvetica, sans-serif; font-size:18px; text-transform:uppercase; color:#fff; margin:0px; padding:20px 0px; text-align:center;}
.searchform-bg p span{padding:0px 5px;}
.searchform-bg p input[type="radio"]{margin:5px;}
.searchform{float:left; width:66%; margin:0px 17%; background:#fff;}

.footer{float:left; width:100%;}
.footer-top{padding:40px 0px; float:left; width:100%; background:#191919;}
.footer-top h2{font-family:POPPINS-SEMIBOLD, Helvetica, sans-serif; color:#fff; text-transform:uppercase; font-size:22px; padding-bottom:10px; margin:0 0 10px 0px;}
.footer-top-about{width:420px; float:left;}
.footer-top-about h1{margin:0px; font-size:24px; text-transform:uppercase; color:#fff; font-family:ROBOTO-CONDENSED, Helvetica, sans-serif;}
.footer-top-about h4{font-size:15px; color:#fff; text-transform:uppercase; margin:0px;}
.footer-top-about ul{padding:0px; margin:0px;}
.footer-top-about li{list-style:none; margin-top:12px;}
.footer-top-about li a{color:#b9b8b8; font-size:14px;}
.footer-top-about li a:hover{color:#fff; text-decoration:none;}

.related-links{float:left; display:inline-block;}
.related-links ul{padding:0px; margin:0px;}
.related-links li{background:url(../images/gray-dot.jpg) no-repeat left 4px; list-style:none; margin-top:9px; padding-left:18px;}
.related-links li a{color:#b9b8b8; font-size:14px;}
.related-links li a:hover{text-decoration:none; color:#fff;}

.capitol-info{float:right; display:inline-block;} 

.footer-bottom{padding:20px 0px; float:left; width:100%; background:#191919; text-align:center;}
.footer-bottom p{margin:0px; color:#b9b8b8; font-size:14px; padding-top:10px;}
.footer-bottom ul{padding:0px; margin:0px;}
.footer-bottom li{list-style:none; padding:0px 8px; line-height:14px; border-left:solid 1px #b9b8b8; display:inline-block;}
.footer-bottom li:first-child{border:none;}
.footer-bottom li a{color:#b9b8b8; font-size:14px;}
.footer-bottom li a:hover{color:#fff; text-decoration:none;}

.navbar-toggle{background:#566987;}
.navbar-toggle .icon-bar{background:#fff;}


/***RESPONSIVE***/


@media only screen and (min-width: 960px) and (max-width: 1140px) {
.legislative-activity-img{width:40%;}
.legislative-activity-content{width:60%; padding-top:0px;}
.access-mobile-bg-img{width:40%;}
.access-mobile-bg-img img{width:100%;}
.access-mobile-bg-content{width:55%; padding-top:25px;}
.navbar-nav > li > a{font-size:12px;}
.banner-content{top:20%;}
.bannerform input[type="text"], .bannerform select{width:235px;}
.texas-house-bg-img{width:40%;}
.texas-house-bg-img img{width:100%;}
.texas-house-bg-content{width:60%;}
.texas-house-bg-links{margin-right:40px;}
.access-mobile-bg-img::after{left:-4660px;}
.texas-house-bg-img::after{right:-4660px}
.searchform input[type="text"], .searchform select{width:255px;}
.footer-top-about{width:330px;}
}
@media only screen and (min-width: 768px) and (max-width: 959px) {
.navbar-nav > li{padding-left:12px;}
.navbar-nav > li > a{font-size:11px;}
.navbar-brand > img{width:200px;}
.navbar-nav{margin-top:3px;}
.banner-content{top:10%;}
.bannerform input[type="text"], .bannerform select{width:140px;}
.texas-house-bg-img{width:40%;}
.texas-house-bg-img img{width:100%;}
.texas-house-bg-img::after{right:-4760px;}
.texas-house-bg-content{width:60%;}
.texas-house-bg-links{margin-right:0px;}
.access-mobile-bg-img{width:40%;}
.access-mobile-bg-img img{width:100%;}
.access-mobile-bg-content{width:55%; padding-top:25px;}
.access-mobile-bg-img::after{left:-4740px;}
.access-mobile-bg-img h2{font-size:15px;}
.additional-searches-bg{margin:20px 0px;}
.legislative-activity-img{width:40%;}
.legislative-activity-content{width:60%; padding-top:0px;}
.searchform input[type="text"], .searchform select{width:180px;}
.footer-top-about{width:100%; margin-bottom:30px;}
.footer-bottom li{padding:0px 3px;}
}
@media only screen and (min-width: 600px) and (max-width: 767px) {
.header-top{text-align:center;}
.header-top-right{width:100%;}
.header-top-nav{width:100%;}
.header-top-nav li{float:none; padding:0px 7px!important; display:inline-block;}
.navbar-brand > img{width:230px; padding-left:15px; padding-top:10px;}
.header-bottom{padding:5px 0px;}
#navbar{width:100%; margin:0px;}
.navbar-nav > li{padding:10px 0px; border-bottom:solid 1px #ccc;}
.navbar-nav{margin:0px;}
.testimonial{width:100%;}
.testimonial-box{margin-top:0px;}
.banner-content h1{font-size:28px;}
.banner-content h3{font-size:13px; margin:0px; padding:8px 0px;}
.banner-content{top:5px;}
.bannerform input[type="text"], .bannerform select{width:100%; margin:7px 0px;}
.bannerform{width:100%; margin:0px; padding:15px;}
.zip{width:100%!important;}
.banner-img img{height:340px; width:auto;} 
.bannerform-btn-box{width:100%; text-align:center;}
.texas-house-bg-img, .texas-house-bg-img img{width:100%;}
.texas-house-bg-img h2{padding:0px;}
.texas-house-bg-content{width:100%; padding:0px;}
.access-mobile-bg-img, .access-mobile-bg-img img{width:100%;}
.access-mobile-bg-content{width:100%; padding:0px;}
.additional-searches-bg{margin:15px 0px;}
.legislative-activity-img{width:100%;}
.legislative-activity-content{width:100%;}
.footer-top-about{width:100%;}
.related-links{width:100%; margin:20px 0px;}
.capitol-info{margin:0px;}
.texas-house-bg-img::after{right:-4380px;}
.access-mobile-bg-img::after{left:-4330px;}
}
@media only screen and (min-width: 480px) and (max-width: 599px) {
.header-top{text-align:center;}
.header-top-right{width:100%;}
.header-top-nav{width:100%;}
.header-top-nav li{float:none; padding:0px 7px!important; display:inline-block;}
.navbar-brand > img{width:230px; padding-left:15px; padding-top:10px;}
.header-bottom{padding:5px 0px;}
#navbar{width:100%; margin:0px;}
.navbar-nav > li{padding:10px 0px; border-bottom:solid 1px #ccc;}
.navbar-nav{margin:0px;}
.testimonial{width:100%;}
.testimonial-box{margin-top:0px;}
.banner-content h1{font-size:18px;}
.banner-content h3{font-size:13px; margin:0px; padding:8px 0px;}
.banner-content{top:5px;}
.bannerform input[type="text"], .bannerform select{width:100%; margin:7px 0px;}
.bannerform{width:100%; margin:0px; padding:15px;}
.zip{width:100%!important;}
.banner-img img{height:340px; width:auto;} 
.bannerform-btn-box{width:100%; text-align:center;}
.texas-house-bg-img, .texas-house-bg-img img{width:100%;}
.texas-house-bg-img h2{padding:0px;}
.texas-house-bg-content{width:100%; padding:0px;}
.access-mobile-bg-img, .access-mobile-bg-img img{width:100%;}
.access-mobile-bg-content{width:100%; padding:0px;}
.additional-searches-bg{margin:15px 0px;}
.legislative-activity-img{width:100%;}
.legislative-activity-content{width:100%;}
.footer-top-about{width:100%;}
.related-links{width:100%; margin:20px 0px;}
.capitol-info{margin:0px;}
.texas-house-bg-img::after{right:-4510px;}
.access-mobile-bg-img::after{left:-4510px;}
}
@media only screen and (max-width: 479px) {
.header-top{text-align:center;}
.header-top-right{width:100%;}
.header-top-nav{width:100%;}
.header-top-nav li{float:none; padding:0px 7px!important; display:inline-block;}
.navbar-brand > img{width:230px; padding-left:15px; padding-top:10px;}
.header-bottom{padding:5px 0px;}
#navbar{width:100%; margin:0px;}
.navbar-nav > li{padding:10px 0px; border-bottom:solid 1px #ccc;}
.navbar-nav{margin:0px;}
.testimonial{width:100%;}
.testimonial-box{margin-top:0px;}
.banner-content h1{font-size:18px;}
.banner-content h3{font-size:13px; margin:0px; padding:8px 0px;}
.banner-content{top:5px;}
.bannerform input[type="text"], .bannerform select{width:100%; margin:7px 0px;}
.bannerform{width:100%; margin:0px; padding:15px;}
.zip{width:100%!important;}
.banner-img img{height:340px; width:auto;} 
.bannerform-btn-box{width:100%; text-align:center;}
.texas-house-bg-img, .texas-house-bg-img img{width:100%;}
.texas-house-bg-img h2{padding:0px;}
.texas-house-bg-content{width:100%; padding:0px;}
.access-mobile-bg-img, .access-mobile-bg-img img{width:100%;}
.access-mobile-bg-content{width:100%; padding:0px;}
.additional-searches-bg{margin:15px 0px;}
.legislative-activity-img{width:100%;}
.legislative-activity-content{width:100%;}
.footer-top-about{width:100%;}
.related-links{width:100%; margin:20px 0px;}
.capitol-info{margin:0px;}
}
 </style>