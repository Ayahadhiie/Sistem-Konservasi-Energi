	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"><?php echo strtoupper($mod); ?></li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Selamat Datang</h1>
			</div>

		</div><!--/.row-->
		<div class="alert bg-primary" role="alert">
					<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg> Hai <?php echo $_SESSION['name'] ?> <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>
