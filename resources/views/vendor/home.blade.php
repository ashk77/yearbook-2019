<!DOCTYPE html>
<html lang="en">
  <head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fluffs - Ultimate Bootstrap Social Network UI Kit</title>
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />		
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
		<link rel="icon" href="http://themashabrand.com/templates/Fluffs/assets/img/logo.jpg">
		<link rel="apple-touch-icon" href="http://themashabrand.com/templates/Fluffs/img/favicons/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="http://themashabrand.com/templates/Fluffs/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="http://themashabrand.com/templates/Fluffs/img/favicons/apple-touch-icon-114x114.png">
		
	    <!-- ==============================================
		CSS
		=============================================== -->
        <link type="text/css" href="css/photo.css" rel="stylesheet" />
				
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="http://themashabrand.com/templates/Fluffs/assets/js/modernizr-custom.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->	
		
		<style>

.tablink {
    background-color: #fff;
    color: #000;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 50%;
}

.tablink:hover {
    background-color: #777;
    color:white;
}

.tablink:active {
    color:white;
}

.tabcontent {
    
    display: none;
    padding: 100px 20px;
    height: 100%;
}

.cover-img{
	background-image: url('assets/img/bg/1.jpeg');
	height:30vw;
}

</style>
  </head>

<body>

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
     <header class="tr-header">
      <nav class="navbar navbar-default">
       <div class="container-fluid">
	    <div class="navbar-header">
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand" href="index.html"><img src="assets/img/navbar/SACLogo.png" width="150px" height="75px" style="margin-top:-23px;" /></a>
		</div><!-- /.navbar-header -->
		<div class="navbar-left">
		 <div class="collapse navbar-collapse" id="navbar-collapse">
		  <ul class="nav navbar-nav">
		  </ul>
		 </div>
		</div><!-- /.navbar-left -->
		<div class="navbar-right">                          
		 <ul class="nav navbar-nav">
		   <li>
		   <div class="search-dashboard">
               <form>
                    <input placeholder="Search here" type="text">
                    <button type="submit"><i class="fa fa-search"></i></button>
               </form>
          </div>							
		   </li>

		   <li class="active">
            <a class="text-uppercase text-expanded" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="">
            <a class="text-uppercase text-expanded" href="#"  data-step="5" data-intro="<center> See the most popular photos of Kgpians </center> ">Trending</a>
          </li>



		   <li class="dropdown notification-list">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="photo_profile.html#" role="button" aria-haspopup="false" aria-expanded="false">
			 <i class="fa fa-bell noti-icon"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-lg">
             
			 <div class="dropdown-item noti-title">
			  <h6 class="m-0">
			   <span class="pull-right">
			    <a href="photo_profile.html" class="text-dark"><small>Clear All</small></a> 
			   </span>Notification
			  </h6>
			 </div>

			 <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
			  <div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
			   <div id="Slim">
			    <a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-comment"></i></div>
				 <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-user-plus"></i></div>
				 <p class="notify-details">Grace Flake followed you.<small class="text-muted">5 hours ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-heart"></i></div>
				 <p class="notify-details">Carlos Crouch liked your photo.<small class="text-muted">3 days ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-comment"></i></div>
				 <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-user-plus"></i></div>
				 <p class="notify-details">Maureen Hilda followed you.<small class="text-muted">7 days ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-heart"></i></div>
				 <p class="notify-details">Carlos Crouch liked your photo.<small class="text-muted">13 days ago</small></p>
				</a><!--/ dropdown-item-->
			   </div><!--/ .Slim-->
			   <div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
			   <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
			  </div><!--/ .slimscroll-->
			 </div><!--/ .slimScrollDiv-->
			 <a href="photo_notifications.html" class="dropdown-item text-center notify-all">
			  View all <i class="fa fa-arrow-right"></i>
			 </a><!-- All-->
            </div><!--/ dropdown-menu-->
		   </li>

          <li class="dropdown notification-list">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="photo_profile.html#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="fa fa-cog"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-lg" style="width: 100px; height:100.983px; left:-160px;">
             
				<div class="dropdown-item noti-title">
				  <h6 class="m-0">
				   <span class="pull-right">
				    <a href="photo_profile.html" class="text-dark"></a> 
				   </span>Settings
				  </h6>
				 </div>

				<div >
		   	    	<a class="dropdown-item " href="/details"><p style="font-family: 'Abhaya Libre', serif;">Edit Details</p></a>
			    </div>
			    <div >
                	<a class="dropdown-item " href="/logout"><p <p style="font-family: 'Abhaya Libre', serif;">Logout</p> </a>
			    </div>

            </div><!--/ dropdown-menu-->
		   </li>
		  
		 <li class="dropdown mega-avatar">
		  <a href="photo_profile.html#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		   <span class="avatar w-32"><img src="assets/img/users/2.jpg" class="img-resonsive img-circle" width="25" height="25" alt="..."></span>
		   <!-- hidden-xs hides the username on small devices so only the image appears. -->
		   <span class="hidden-xs">
			Alex Grantte
		   </span>
		  </a>
		  <div class="dropdown-menu w dropdown-menu-scale pull-right">
		   <a class="dropdown-item" href="photo_profile.html#"><span>New Story</span></a> 
		   <a class="dropdown-item" href="photo_profile.html#"><span>Become a Member</span></a> 
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="photo_profile.html#"><span>Profile</span></a> 
		   <a class="dropdown-item" href="photo_profile.html#"><span>Settings</span></a> 
		   <a class="dropdown-item" href="photo_profile.html#">Need help?</a> 
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="photo_profile.html#">Sign out</a>
		  </div>
		 </li><!-- /navbar-item -->	
		 
		 </ul><!-- /.sign-in -->   
		</div><!-- /.nav-right -->
       </div><!-- /.container -->
      </nav><!-- /.navbar -->
     </header><!-- Page Header --> 
  
	 <!-- ==============================================
	 Navbar Second Section
	 =============================================== -->
<!-- 	<section class="nav-sec">
	  <div class="d-flex justify-content-between">
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="photo_home.html"><em class="fa fa-home"></em>
		<span>Home</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="photo_explore.html"><em class="fa fa-crosshairs"></em>
		<span>Explore</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="photo_upload.html"><em class="fab fa-instagram"></em>
		<span>Upload</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="photo_stories.html"><em class="fa fa-align-left"></em>
		<span>Stories</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg mint-green">
	   <a class="nav-icon" href="photo_profile.html"><em class="fa fa-user"></em>
		<span>Profile</span>
	   </a>
	   </div>
	  </div>
	</section>	 -->
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="profile">
	  <div class="container-fluid cover-img">

	  </div><!--/ container -->
	 </section><!--/ profile -->
	 <!-- ==============================================
	 User Profile Section
	 =============================================== --> 
	 <section class="user-profile">
	  <div class="container-fluid">
	   <div class="row">
	   
	    <div class="col-lg-12">
		   <div class="post-content">
		    <div class="author-post text-center">
		     <a href="photo_profile.html#"><img class="img-fluid img-circle" src="assets/img/users/13.jpeg" alt="Image"></a>
		    </div><!-- /author -->
		   </div><!-- /.post-content -->		
		</div><!-- /col-sm-12 -->
		
       </div><!--/ row-->	
	  </div><!--/ container -->
	 </section><!--/ profile -->
  
	 <!-- ==============================================
	 User Profile Section
	 =============================================== --> 
	 <section class="details">
	  <div class="container">
	   <div class="row">
	    <div class="col-lg-12">
		 
          <div class="details-box row">
		   <div class="col-lg-9">
           <div class="content-box">
		     <h4>Anna Morgan <i class="fa fa-check"></i></h4>
             <p>Welcome to the offical account of Anna Morgan. Success is in the PIXELS, <span class="hashtag">#pixels</span></p>
			 <small><span>www.themashabrand.com</span></small>
           </div><!--/ media -->
		   </div> 
		   <div class="col-lg-3">
           <div class="follow-box">
		    <a href="photo_profile.html" class="kafe-btn kafe-btn-mint"><i class="fa fa-check"></i> Following</a>
           </div><!--/ dropdown -->
		   </div>
          </div><!--/ details-box -->
		  
		</div>
	   </div>
	  </div><!--/ container -->
	 </section><!--/ profile -->

	
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="newsfeed">
	  
		    <div class="tab_bar" style="margin-left: 26%;align-items: center;
		    	margin-right: 26%">
		  	<button class="tablink kafe-btn" onclick="openPage('Home', this, '#0fc19e','white')">Articles</button>
			<button class="tablink kafe-btn" onclick="openPage('News', this, '#0fc19e','white')" id="defaultOpen">Photos</button>
			</div>
		<div class="container">
			<div id="Home" class="tabcontent">
			<div class="row">
			    <div class="col-lg-12">  
				
			     <div class="box">
				  <form>
				   <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>
				  </form>
				  <div class="box-footer clearfix">
				   <button class="kafe-btn kafe-btn-mint-small pull-right btn-sm">Upload</button>
				  </div>
				 </div>	
		 
				</div>
			   </div>
  			<h3>Articles</h3>
  			<p>Home is where the heart is..</p>
			</div>
		<div id="News" class="tabcontent">
		
			<div class="row">
	    <div class="col-lg-12">  
		
	     <div class="box">
		  <form>
		   <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>
		  </form>
		  <div class="box-footer clearfix">
		   <button class="kafe-btn kafe-btn-mint-small pull-right btn-sm">Upload</button>
		   <ul class="nav nav-pills nav-sm">
			<li class="nav-item"><a class="nav-link" href="photo_upload.html"><i class="fa fa-camera text-muted"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="photo_upload.html"><i class="fa fa-video text-muted"></i></a></li>
		   </ul>
		  </div>
		 </div>	
		 
		</div>
	   </div>

	   <div class="row">
	   
	    <div class="col-lg-4">
		 <a href="photo_profile.html#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/14.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>14,100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
	   
	    <div class="col-lg-4">
		 <a href="photo_profile.html#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/18.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>100,100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>			  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
	   
	    <div class="col-lg-4">
		 <a href="photo_profile.html#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/15.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
		
	   </div><!--/ row -->
	   
	   <div class="row">
	   
	    <div class="col-lg-4">
		 <a href="photo_profile.html#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/25.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>324</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
	   
	    <div class="col-lg-4">
		 <a href="photo_profile.html#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/36.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>1023</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>			  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
	   
	    <div class="col-lg-4">
		 <a href="photo_profile.html#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/26.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>40</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
		
	   </div><!--/ row -->
	   
	  </div><!--/ container -->
	 
	 </section><!--/ newsfeed -->
  
	 <!-- ==============================================
	 Modal Section
	 =============================================== -->
     <div id="myModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-body">
		
         <div class="row">
		 
          <div class="col-md-8 modal-image">
           <img class="img-responsive" src="assets/img/posts/15.jpg" alt="Image"/>
          </div><!--/ col-md-8 -->
          <div class="col-md-4 modal-meta">
           <div class="modal-meta-top">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			 <span aria-hidden="true">×</span><span class="sr-only">Close</span>
			</button><!--/ button -->
            <div class="img-poster clearfix">
             <a href="photo_profile.html"><img class="img-responsive img-circle" src="assets/img/users/18.jpg" alt="Image"/></a>
             <strong><a href="photo_profile.html">Benjamin</a></strong>
             <span>12 minutes ago</span><br/>
		     <a href="photo_profile.html" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Following</a>
            </div><!--/ img-poster -->
			  
            <ul class="img-comment-list">
             <li>
              <div class="comment-img">
               <img src="assets/img/users/17.jpeg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="photo_profile.html">Anthony McCartney</a></strong>
               <p>Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/15.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="photo_profile.html">Vanessa Wells</a></strong>
               <p>Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span>on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/14.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="photo_profile.html">Sean Coleman</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/13.jpeg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="photo_profile.html">Anna Morgan</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="photo_profile.html">Allison Fowler</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
            </ul><!--/ comment-list -->
			  
            <div class="modal-meta-bottom">
			 <ul>
			  <li><a class="modal-like" href="photo_profile.html#"><i class="fa fa-heart"></i></a><span class="modal-one"> 786,286</span> | 
			      <a class="modal-comment" href="photo_profile.html#"><i class="fa fa-comments"></i></a><span> 786,286</span> </li>
			  <li>
			   <span class="thumb-xs">
				<img class="img-responsive img-circle" src="assets/img/users/13.jpeg" alt="...">
			   </span>
			   <div class="comment-body">
				 <input class="form-control input-sm" type="text" placeholder="Write your comment...">
			   </div><!--/ comment-body -->	
              </li>				
             </ul>				
            </div><!--/ modal-meta-bottom -->
			  
           </div><!--/ modal-meta-top -->
          </div><!--/ col-md-4 -->
		  
         </div><!--/ row -->
        </div><!--/ modal-body -->
		
       </div><!--/ modal-content -->
      </div><!--/ modal-dialog -->
     </div><!--/ modal -->	 
	   
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
document.getElementById("defaultOpen").click();
</script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/base.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.js"></script>
	<script>
	$('#Slim,#Slim2').slimScroll({
	        height:"auto",
			position: 'right',
			railVisible: true,
			alwaysVisible: true,
			size:"8px",
		});		
	</script>

  </body>
</html>
