<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<!-- BEGIN SIDEBAR -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
		<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
		<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
		<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
			<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<li class="sidebar-toggler-wrapper hide">
				<div class="sidebar-toggler">
					<span></span>
				</div>
			</li>
			<!-- END SIDEBAR TOGGLER BUTTON -->
			<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
			<!-- <li class="sidebar-search-wrapper">
				<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
				<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
				<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
				<!-- <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
				<!--	<a href="javascript:;" class="remove"> <i class="icon-close"></i> </a>
				<!--	<div class="input-group">
				<!--		<input type="text" class="form-control" placeholder="Search...">
				<!--		<span class="input-group-btn"> <a href="javascript:;" class="btn submit"> <i class="icon-magnifier"></i> </a> </span>
				<!--	</div>
				<!-- </form>
				<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- </li> -->
			<li class="nav-item active ">
				<a href="{{ url('/dashboard') }}" class="nav-link "> <i class="icon-home"></i> <span class="title">Dashboard</span>  </a>
			</li>
			
			<li class="heading">
				<h3 class="uppercase">Box</h3>
			</li>
			<li class="nav-item  ">
				<a href="{{ url('/vouchers') }}" class="nav-link "><i class="icon-user"></i><span class="title">Coupons</span></a>
			</li>
			@permission(('list-orders'))
			<li class="heading">
				<h3 class="uppercase">Orders</h3>
			</li>
			<li class="nav-item  ">
				<a href="{{ url('/orders') }}" class="nav-link"><i class="icon-shield"></i><span class="title">Orders</span></a>
			</li>
			@endpermission
			@if(  $user_role  == 'super-admin')
			<li class="nav-item  ">
				<a href="{{ url('/order_status') }}" class="nav-link"><i class="icon-shield"></i><span class="title">Orders Status</span></a>
			</li>
			<li class="nav-item  ">
				<a href="{{ url('/order_payment_status') }}" class="nav-link"><i class="icon-shield"></i><span class="title">Orders Payment Status</span></a>
			</li>
			@endif
			@if(  $user_role  == 'super-admin')
			<li class="heading">
				<h3 class="uppercase">Administration</h3>
			</li>
			@endif
			@if(  $user_role  == 'group-admin')
			<li class="heading">
				<h3 class="uppercase">Administration</h3>
			</li>
			@endif
			@if(  $user_role  == 'store-admin')
			<li class="heading">
				<h3 class="uppercase">Administration</h3>
			</li>
			@endif
			@permission(('list-users'))
			<li class="nav-item  ">
				<a href="{{ url('/users') }}" class="nav-link "><i class="icon-user"></i><span class="title">Utilisateurs</span></a>
			</li>
			@endpermission
			@if(  $user_role  == 'super-admin')
			<li class="nav-item  ">
				<a href="{{ url('/groups') }}" class="nav-link "> <i class="icon-users"></i> <span class="title">Groupes</span></a>
			</li>
			@endif
			@permission(('edit-stores'))
			<li class="nav-item  ">
				<a href="{{ url('/stores') }}" class="nav-link "><i class="icon-user"></i><span class="title">Magasins</span></a>
			</li>
			@endpermission
			@if(  $user_role  == 'super-admin')
			<li class="nav-item  ">
				<a href="{{ url('/gestionpermission') }}" class="nav-link "><i class="icon-layers"></i><span class="title">Gestion Permission</span></a>
			</li>
			<li class="nav-item  ">
				<a href="{{ url('/roles') }}" class="nav-link "><i class="icon-layers"></i><span class="title">Roles</span></a>
			</li>
			<li class="nav-item  ">
				<a href="{{ url('/permissions') }}" class="nav-link"><i class="icon-shield"></i><span class="title">Permissions</span></a>
			</li>
			@endif
			
			
			
			
		</ul>
		<!-- END SIDEBAR MENU -->
		<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->