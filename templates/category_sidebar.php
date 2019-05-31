
<?php  
	if (isset($_GET['cat']) || isset($_GET['level'])) {
		
		$cat 	= (isset($_GET['cat'])) ? $_GET['cat'] : '';
		// $level 	= (isset($_GET['level'])) ? $_GET['level'] : '';

	}


?>

	<div class="col-lg-3">
		<div class="bg_white">
			<div class="left-sidebar">
				<h4>Category</h4> <hr>	
				<div class="panel-group category-products cat_panel" id="accordian"><!--category-productsr-->
					<!-- <div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
									<span class="badge pull-right"><i class="fa fa-plus"></i></span>
									WordPress
								</a>
							</h4>
						</div>
						<div id="sportswear" class="panel-collapse collapse">
							<div class="panel-body">
								<ul>
									<li><a href="">Theme Installation </a></li>
									<li><a href="">Bug fixing </a></li>
									<li><a href="">Yoast SEO </a></li>
									<li><a href="">Redesign</a></li>
								</ul>
							</div>
						</div>
					</div> -->
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="?cat=Web Design">Web Design</a></h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="?cat=WordPress">WordPress</a></h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="?cat=Logo Design">Logo Design</a></h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="?cat=iOS App">iOS App</a></h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="?cat=Android App">Android App</a></h4>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="?cat=Content Writter">Content Writter</a></h4>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="?cat=Web Design">Web Researcher</a></h4>
						</div>
					</div>

									
				</div><!--/category-productsr-->
			
				<div class="brands_products"><!--brands_products-->
					<h4>Seller</h4> <hr>
					<div class="brands-name">
						<ul class="nav nav-pills nav-stacked">
							<li><a href=""> <span class="pull-right">(50)</span>0 Level</a></li>
							<li><a href=""> <span class="pull-right">(56)</span>Level 1</a></li>
							<li><a href=""> <span class="pull-right">(27)</span>Level 2</a></li>
							<li><a href=""> <span class="pull-right">(32)</span>Top Rated</a></li>
							
						</ul>
					</div>
				</div><!--/brands_products-->
				
				<div class="price-range"><!--price-range-->
					<h4>Price Range</h4> <hr>
					<div class="well">
						 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
						 <b>$ 0</b> <b class="pull-right">$ 600</b>
					</div>
				</div><!--/price-range-->
				
				
				
			</div>
		</div>
	</div>