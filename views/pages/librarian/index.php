<?php require '../../includes/librarian-header.php'; ?>

<!-- navbar-->
<header class="header sticky-top">
	<nav id="header-navbar" class="navbar">
		<div class="container-fluid">
			<div class="navbar-holder d-flex align-items-center justify-content-between">
				<div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i></a><a href="index.html" class="navbar-brand">
			</a></div>
			<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
				
				<!-- Log out-->
				<li class="nav-item"><a href="#" class="nav-link logout" data-toggle="modal" data-target="#logout-dialog" title="Logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
			</ul>
		</div>
	</div>
</nav>
</header>

<div id="librarian-content"></div>

<?php require '../../includes/librarian-footer.php'; ?>