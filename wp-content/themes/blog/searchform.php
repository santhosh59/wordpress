




<!--
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s"></label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>

-->

<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
   <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
	
	<label class="screen-reader-text" for="s"></label>
        <input type="text" value="" name="s" id="s" />
		 <button type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>

  </div>
</div>


		
<div class="nav_search">
    <button  class="openBtn fa fa-search " onclick="openSearch()"></button>
</div>
