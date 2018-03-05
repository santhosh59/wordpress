
<?php


get_header(); ?> 

<div class="container">

<div class="project_page">
<h1>our <span class="project_gallery" >gallery</span></h1>
</div>



<div id="filters" class="button-group">
  <button class="btn btn-primary" data-filter="*">ALL</button>
  <button class="btn btn-primary" data-filter=".web">LOGO DESIGN</button>
  <button class="btn btn-primary" data-filter=".web">WEB DESIGN</button>
  <button class="btn btn-primary" data-filter=".design">BRANDING</button>
</div>
  
<div class="container-fluid no-gutter">

    <div id="posts" class="row">
        <div id="1" class="item web col-sm-4">
            <div class="item-wrap">
			                                <a data-lightbox="cat2" href="http://localhost/wordpress/wp-content/themes/blog/img/small/port-3.jpg">

                 <img class="grid-item-img" src="http://localhost/wordpress/wp-content/themes/blog/img/small/port-3.jpg" alt="Photo">
				 </a>
            </div>
        </div>
        <div id="2" class="item web col-sm-4">
            <div class="item-wrap">			                                <a data-lightbox="cat2" href="http://localhost/wordpress/wp-content/themes/blog/img/small/port-4.png">

                 <img class="grid-item-img" src="http://localhost/wordpress/wp-content/themes/blog/img/small/port-4.png" alt="Photo">
            
			</a></div>
        </div>
        <div id="3" class="item design col-sm-4">
            <div class="item-wrap">
                 <img class="grid-item-img" src="http://localhost/wordpress/wp-content/themes/blog/img/small/port-5.jpg" alt="Photo">
            </div>
        </div>
        <div id="4" class="item design col-sm-4">
            <div class="item-wrap">
                 <img class="grid-item-img" src="http://localhost/wordpress/wp-content/themes/blog/img/small/port-7.jpg" alt="Photo">
            </div>
        </div>
        <div id="5" class="item web col-sm-4">
            <div class="item-wrap">
                 <img class="grid-item-img" src="http://localhost/wordpress/wp-content/themes/blog/img/small/port-8.jpg" alt="Photo">
            </div>
        </div>
        <div id="6" class="item design col-sm-4">
            <div class="item-wrap">
                 <img class="grid-item-img" src="http://localhost/wordpress/wp-content/themes/blog/img/small/port-9.jpg" alt="Photo">
            </div>
        </div>
        <div id="7" class="item web col-sm-4">
            <div class="item-wrap">
                 <img class="grid-item-img" src="http://localhost/wordpress/wp-content/themes/blog/img/small/port-12.jpg" alt="Photo">
            </div>
        </div>
        <div id="8" class="item design col-sm-4">
            <div class="item-wrap">
                 <img class="grid-item-img" src="http://localhost/wordpress/wp-content/themes/blog/img/small/port-13.jpg" alt="Photo">
            </div>
        </div>
    </div>
</div>

</div>


<?php get_footer(); ?>