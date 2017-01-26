<!-- END QUICK NAV -->
		<!--[if lt IE 9]>
		<script src="{{ url('/') }}/global/plugins/respond.min.js"></script>
		<script src="{{ url('/') }}/global/plugins/excanvas.min.js"></script>
		<script src="{{ url('/') }}/global/plugins/ie8.fix.min.js"></script>
		<![endif]-->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ url('/') }}/assets/global/plugins/respond.min.js"></script>
<script src="{{ url('/') }}/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{ url('/') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ url('/') }}/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ url('/') }}/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@yield('script')
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar

   Index.init();   
   Index.initDashboardDaterange();

   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<script>
$(document).ready(function(){
    $(document).on('click', '.notification-close',function(){
       notification_id = $(this).attr('data-id');
       
       $.ajax({
            name : 'GET',
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="_token"]').attr('content')
            },
            url : 'http://localhost:8080/partners/public/changeNotificationStatus/' + notification_id,
            async : true,
            cache : false,
            dataType : "json",
           
        }).done(function(jsonData) {
            $('#header_notification_bar').html(jsonData.content);
        }).fail()
    });
})
</script>
<!-- END JAVASCRIPTS -->