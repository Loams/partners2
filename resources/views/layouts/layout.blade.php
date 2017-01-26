<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
	<!--<![endif]-->
	@include('layouts.head')

	<body   @yield('bodyclass', 'class="page-header-fixed page-sidebar-closed-hide-logo"')>
		<div class="page-wrapper">
			<!-- BEGIN HEADER -->
			@include('layouts.header')
			<!-- BEGIN HEADER & CONTENT DIVIDER -->
			<div class="clearfix"></div>
			<!-- END HEADER & CONTENT DIVIDER -->
			<!-- BEGIN CONTAINER -->
			<div class="page-container">
			@include('layouts.sidebar')
				<!-- BEGIN CONTENT -->
				<div class="page-content-wrapper">
					<!-- BEGIN CONTENT BODY -->
					<div class="page-content" style="overflow:visible">
						{!! Breadcrumbs::renderIfExists() !!}
						@include('layouts.success')
						@include('layouts.errors')
						@yield('content')
					</div>
			<!-- END CONTAINER -->
			
			@include('layouts.footer')
		</div>
		
		@include('layouts.script')
	</body>

</html>