<?php require '../../includes/admin-header.php'; ?>

<!-- navbar-->
<header class="header sticky-top">
	<nav id="header-navbar" class="navbar">
		<div class="container-fluid">
			<div class="navbar-holder d-flex align-items-center justify-content-between">
				<div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i></a><a href="index.html" class="navbar-brand">
			</a></div>
			<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
				<!-- Log out-->
				<li class="nav-item"><a href="#" class="nav-link" onclick="toggleFullScreen()"><span class="d-none d-sm-inline-block">Full Screen</span> <i class="fa fa-expand"></i></a></li>
				<!-- Log out-->
				<li class="nav-item"><a href="#" class="nav-link logout" data-toggle="modal" data-target="#logout-dialog" title="Logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
			</ul>
		</div>
	</div>
</nav>
</header>

<div id="admin-content"></div>

<?php require '../../includes/admin-footer.php'; ?>