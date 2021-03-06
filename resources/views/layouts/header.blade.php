<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner ">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="{{ url('/') }}"> Partners </a>
			<div class="menu-toggler sidebar-toggler">
				<span></span>
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> <span></span> </a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
				<!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
				<!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="icon-bell"></i> <span class="badge badge-default"> {{$user->unreadNotifications->count()}} </span> </a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3><span class="bold">{{ $user->unreadNotifications->count() }}</span> unread notifications</h3>
							<a href="{{ route('users.show', $user->id) }}">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
							    @foreach($user->unreadNotifications as $notification)
    							    @if( $loop->iteration <= 5)
        							    <li class="notification">
                                            <a href=""> <span class="time"> {{ \Carbon\Carbon::parse($notification->data['data']['time']['date'])->diffForHumans() }}</span> <span class="details"> <span class=" {{ $notification->data['data']['class'] }}"> <i class="{{ $notification->data['data']['icon'] }}"></i> </span>  {{ $notification->data['data']['message'] }} </span> </a><span data-id="{{ $notification->id }}" class="notification-close"></span>
                                        </li>
                                    @endif
							    @endforeach
							</ul>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte 
				<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="icon-envelope-open"></i> <span class="badge badge-default"> 4 </span> </a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3>You have <span class="bold">7 New</span> Messages</h3>
							<a href="app_inbox.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="#"> <span class="photo"> <img src="{{ url('/') }}/assets/admin/layout/img/avatar2.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Lisa Wong </span> <span class="time">Just Now </span> </span> <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span> </a>
								</li>
								<li>
									<a href="#"> <span class="photo"> <img src="{{ url('/') }}/assets/admin/layout/img/avatar3.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Richard Doe </span> <span class="time">16 mins </span> </span> <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span> </a>
								</li>
								<li>
									<a href="#"> <span class="photo"> <img src="{{ url('/') }}/assets/admin/layout/img/avatar1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Bob Nilson </span> <span class="time">2 hrs </span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span> </a>
								</li>
								<li>
									<a href="#"> <span class="photo"> <img src="{{ url('/') }}/assets/admin/layout/img/avatar2.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Lisa Wong </span> <span class="time">40 mins </span> </span> <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span> </a>
								</li>
								<li>
									<a href="#"> <span class="photo"> <img src="{{ url('/') }}/assets/admin/layout/img/avatar3.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Richard Doe </span> <span class="time">46 mins </span> </span> <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span> </a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte 
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="icon-calendar"></i> <span class="badge badge-default"> 3 </span> </a>
					<ul class="dropdown-menu extended tasks">
						<li class="external">
							<h3>You have <span class="bold">12 pending</span> tasks</h3>
							<a href="app_todo.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;"> <span class="task"> <span class="desc">New release v1.2 </span> <span class="percent">30%</span> </span> <span class="progress"> <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">40% Complete</span> </span> </span> </a>
								</li>
								<li>
									<a href="javascript:;"> <span class="task"> <span class="desc">Application deployment</span> <span class="percent">65%</span> </span> <span class="progress"> <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">65% Complete</span> </span> </span> </a>
								</li>
								<li>
									<a href="javascript:;"> <span class="task"> <span class="desc">Mobile app release</span> <span class="percent">98%</span> </span> <span class="progress"> <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">98% Complete</span> </span> </span> </a>
								</li>
								<li>
									<a href="javascript:;"> <span class="task"> <span class="desc">Database migration</span> <span class="percent">10%</span> </span> <span class="progress"> <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">10% Complete</span> </span> </span> </a>
								</li>
								<li>
									<a href="javascript:;"> <span class="task"> <span class="desc">Web server upgrade</span> <span class="percent">58%</span> </span> <span class="progress"> <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">58% Complete</span> </span> </span> </a>
								</li>
								<li>
									<a href="javascript:;"> <span class="task"> <span class="desc">Mobile development</span> <span class="percent">85%</span> </span> <span class="progress"> <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">85% Complete</span> </span> </span> </a>
								</li>
								<li>
									<a href="javascript:;"> <span class="task"> <span class="desc">New UI release</span> <span class="percent">38%</span> </span> <span class="progress progress-striped"> <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">38% Complete</span> </span> </span> </a>
								</li>
							</ul>
						</li>
					</ul>
				</li> -->
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <span class="username"> {{$user->firstname }} {{ $user->lastname }}  </span> <i class="fa fa-angle-down"></i> </a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="{{ url('/users/') }}/{{ Auth::user()->id }}"> <i class="icon-user"></i> My Profile </a>
						</li>
				
						<li class="divider"></li>
						
						<li>
							<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<i class="icon-key"></i>Logout
                            </a>
                            <form action="{{ url('/logout') }}" method="POST" style="display: none;" id="logout-form">
                            	{{ csrf_field() }}
                        	</form>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->