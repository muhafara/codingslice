<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=”robots” content=”index, follow”>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Coding slice</title>

<!-- Add meta Description and Keywords -->
<!--------------------------Need to add more keywords--------------------------->
  <meta name="description" content="Easy coding Easy Life">
  <meta name="keywords" content="C, C language, c tutorial, basic c lanaguage, coding, C++, C++ language, c++ tutorial, basic c++ lanaguage">
  <meta name="author" content="Faran Muhammad">
  
  <!-- Add meta Description and Keywords -->
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	
	<!----these two lines---->
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118957448-1"></script>
    <!--------------------------------Google Analytic Embeded Code End------------------------------------------------------------------------------------>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118957448-1');
</script>
</head> 
<style>
.margin_top{
margin-top:30px;
}
.background_colour{
background-color:blue;
}
.header_style{
font-family: "Times New Roman", Times, serif;
background-color: #8B8989;
font-size:50px;
}
    
/* For Core page*/

.
{
font-family: "Times New Roman", Times, serif;
background-color: #dcdcdc;
font-size:50px;
}
.margin_top{
margin-top:30px;
}
.header_style{
font-family: "Times New Roman", Times, serif;
background-color: #8B8989;
font-size:50px;
}
.list-group{
    max-height: 1000px;
    overflow-y:auto; 
}
.div-scrollable{
	max-height: 1000px;
    overflow-y:auto; 
}
    
    /*Added By Majid*/
    
    nav.navbar.navbar-inverse {
    background: #002577;
}

nav.navbar.navbar-inverse a {
    color:aliceblue;
}

.jumbotron {
    background:#515984;
}

.header_style {
    background:#cccccc0f;
}
.header_style h1 {
    color:#fff;
}

.jumbotron p {
    color:#fff;
    font-size:50px;
    font-family:revert;
    background:#b9641c;
}

footer.footer-distributed {
    background:#002577;
    color:#fff;
}

.footer-distributed .footer-company-name {
    color:white;
}

.footer-distributed .footer-icons a {
    background:aliceblue;
        color: #002577;
}

.footer-distributed form input, .footer-distributed form textarea {
    background:aliceblue;
}

.footer-distributed form button {
    background:aliceblue;
    color:#002577
}
    
.col-md-12.copyright {
    margin-top:30px;
    position:relative;
}
    
    /*For Responsive*/
@media screen and (min-width: 767px) {
  .mobileSideBar{
      display:none;
  }
}

@media screen and (max-width: 768px) {
  .mobileSideBar{
      display:block;
  }
    
    .mobileSideBar img{
    width:50px;
    
}

.header_style h1 {
    color:#fff;
    font-size:50px;
}

.jumbotron p {
    color:#fff;
    font-size:20px;
    font-family:revert;
    background:#b9641c;
    text-align:center;
}
    
}
    
    /*HOME PAGE*/
    
    .col-md-4.homeSidebar {
    background:#6194d4;
}

.homeSidebar h2 {
    padding:5px;
    background:#b9641c;
    color:#fff;
    margin: 0px;
    text-align: center;
    text-transform: uppercase;
}

.homeMain img {
    width:100%;
    height: 180px;
    padding: 10px;
   
}
    
 .homeMain img:hover {
     cursor:pointer;
     border: 3px solid #002577;
     transform:scale(0.9);
   
}
    
    /*Home page SideBar*/
    
    p#aboutSite {
    padding:5px;
    color:aliceblue;
    font-size:20px;
}
    
    .adsSec {
        color:aliceblue;
        
    }

    ul#SidebarUseful li {
    list-style-type:none;
}

ul#SidebarUseful li a{
    color:aliceblue;
    font-weight:bold;
}
a.list-group-item:hover{
	cursor:pointer;
}
</style>
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Coding Slice</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Home</a></li>
				<li class=""><a href="c.php">C</a></li>
				<li class=""><a href="c++.php">C++</a></li>
				<li class=""><a href="javabasic.php">Java</a></li>
				<!-------------Menu Bar to add later---------------------->
				<!-----<li class=""><a href="#">Java Server Faces</a></li>
				<li class=""><a href="#">Android Programming</a></li>
				<li class=""><a href="#">C Programming</a></li>
				<li class=""><a href="#">C++ Programming</a></li>
				<li class=""><a href="#">Database Tutorial</a></li>
				---->
            </ul>
				<!--first drop down-->
				
    </div>
    </div>
</nav>
