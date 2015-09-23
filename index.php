<!doctype html>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" href = "CSS/bootstrap.css">
	<link rel = "stylesheet" href = "CSS/fonts.css">
	<link rel = "stylesheet" href = "CSS/styles.css">

	<script src = "Scripts/jquery.js"></script>
    <script src= "Scripts/bootstrap.js"></script>
	<script src = "Scripts/scripts.js"></script>
</head>
<body>
	<div class="wrapper">
        <header class="row col-xs-12">
            <div class = "col-xs-2">
                <img src = "Images/Icons/lines7.png" data-target = "navbar"/>
            </div>
            <div class = "col-xs-2">
                <img src = "Images/Icons/search104.png" data-target = "search-bar"/>
            </div>
            <div class = "col-xs-4">
                <h1 id = "site-name"><a href = "index.html">IIITA CART</a></h1>
            </div>
            <div class = "col-xs-2">
                <img src = "Images/Icons/auction1.png" />
            </div>
            <div class = "col-xs-2">
                <img src = "Images/Icons/login17.png" data-target = "login-container"/>
            </div>
        </header>
        <container class="row col-xs-10">
        	<slideshow class="row col-xs-12">
                <div id="slideshow" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                      <li data-target="#slideshow" data-slide-to="1"></li>
                      <li data-target="#slideshow" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="Images/bookbanner1.jpg">
                        </div>	
                        <div class="item">
                            <img src="Images/bookbanner2.jpg">
                        </div>	
                        <div class="item">
                            <img src="Images/bookbanner3.jpg">
                        </div>	
                    </div>
                </div>    
            </slideshow>
            <itemcategory id="ic-category-1" class="row col-xs-12">
            	<category class="col-xs-12">
                	<p class="left">Books</p>
                </category>
            	<items class="col-xs-12">
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World Hello World </p>
                            <p id="item-price"> Rs. 2000 </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                </items>
            </itemcategory>
            <itemcategory id="ic-category-2" class="row col-xs-12">
            	<category class="col-xs-12">
                	<p class="left">Sports Stuff</p>
                </category>
            	<items class="col-xs-12">
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World Hello World </p>
                            <p id="item-price"> Rs. 2000 </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                </items>
            </itemcategory>
            <itemcategory id="ic-category-3" class="row col-xs-12">
            	<category class="col-xs-12">
                	<p class="left">Electronics</p>
                </category>
            	<items class="col-xs-12">
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World Hello World </p>
                            <p id="item-price"> Rs. 2000 </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                </items>
            </itemcategory>
            <itemcategory id="ic-category-4" class="row col-xs-12">
            	<category class="col-xs-12">
                	<p class="left">Basic Hostel Needs</p>
                </category>
            	<items class="col-xs-12">
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World Hello World </p>
                            <p id="item-price"> Rs. 2000 </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                </items>
            </itemcategory>
            <itemcategory id="ic-category-5" class="row col-xs-12">
            	<category class="col-xs-12">
                	<p class="left">Others</p>
                </category>
            	<items class="col-xs-12">
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World Hello World </p>
                            <p id="item-price"> Rs. 2000 </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                    <div class = "ic-item col-sm-3">
                        <div class = "ic-items col-xs-12">
                            <img src="Images/bookbanner2.jpg" id="dp"/>
                            <p id="item-name"> Hello World </p>
                            <img src="Images/Icons/cart7.png" id="interested">
                        </div>
                    </div>
                </items>
            </itemcategory>
        </container>
        <footer class="row col-xs-12">
        	<p>Fuck u</p>
        </footer>
    </div>
    <div id = "search-bar" class = "row col-xs-9">
        <span id = "search-bar-close"></span>
        <form>
            <input type = "input" placeholder = "What you looking for ? ">
        </form>
    </div>
    <div id = "modal-container">
        <div class = "ic-navbar col-xs-3">
            <span id = "ic-navbar-close"></span>
            <ul id = "ic-nav">
                <li><a href = "javascript:void(0)">Books</a></li>
                <li><a href = "javascript:void(0)">Sports stuff</a></li>
                <li><a href = "javascript:void(0)">Electronics</a></li>
                <li><a href = "javascript:void(0)">Basic hostel needs</a></li>
                <li><a href = "javascript:void(0)">Others</a></li>
            </ul>
        </div>
		<div class="ic-login col-xs-3">
	        <span id = "ic-login-close"></span>
            <div id = "ic-login-wrapper">
                <h2>LOGIN</h2>
                <form >
                    <input type = "text" placeholder = "Enroll Id" name = "roll"/>
                    <input type = "password" placeholder  = "Password" name = "passwd"/>
                    <input type = "submit" value = "LOGIN">
                    <p><a href = "javascript:void(0)">FORGOT PASSWORD?</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>