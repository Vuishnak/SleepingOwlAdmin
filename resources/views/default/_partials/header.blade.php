<a href="{{ url(config('sleeping_owl.url_prefix')) }}" class="logo">
	<span class="logo-lg">{!! $template->getLogo() !!}</span>
	<span class="logo-mini">{!! $template->getLogoMini() !!}</span>
</a>

<nav class="navbar navbar-static-top" role="navigation">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>
	<div class="navbar-custom-menu">	
		<ul class="nav navbar-nav">
			@yield('navbar')
		</ul>

		<ul class="nav navbar-nav navbar-right">
			@yield('navbar.right')
		</ul>
	</div>
</nav>
