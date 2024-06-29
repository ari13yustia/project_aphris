<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>

<script type="text/javascript" src='{{asset("assets/plugins/topbar/topbar.js")}}'></script>

<script>

    $( document ).ready(function() {
        // getList(1);
        $('.overlay').hide();
    });


    function generateMenus() {
        $.ajax({
            url: `/generate_menus?url=`+window.location.pathname,
            type: "GET",
            cache: false,
            success:function(result){
                $('#sidebar_menu').html(result);
                activeSidebar();
            }
        });
    }

    function activeSidebar() {
        // Clickable Menu
        if(document.getElementById("navigation")){
            var elements = document.getElementById("navigation").getElementsByTagName("a");
            for(var i = 0, len = elements.length; i < len; i++) {
                elements[i].onclick = function (elem) {
                    if(elem.target.getAttribute("href") === "javascript:void(0)") {
                        var submenu = elem.target.nextElementSibling.nextElementSibling;
                        submenu.classList.toggle('open');
                    }
                }
            }
        }

        if(document.getElementById("sidebar")){
            var elements = document.getElementById("sidebar").getElementsByTagName("a");
            for(var i = 0, len = elements.length; i < len; i++) {
                elements[i].onclick = function (elem) {
                    if(elem.target !== document.querySelectorAll("li.sidebar-dropdown.active > a")[0]){
                        document.querySelectorAll("li.sidebar-dropdown.active")[0]?.classList?.toggle("active");
                        document.querySelectorAll("div.sidebar-submenu.d-block")[0]?.classList?.toggle("d-block");
                    }
                    if(elem.target.getAttribute("href") === "javascript:void(0)") {
                        elem.target.parentElement.classList.toggle("active");
                        elem.target.nextElementSibling.classList.toggle("d-block");
                    }
                }
            }
        }

    }


    function reset_content(){
        $('.menu_content').hide();
    }

    function to_content(content){
        reset_content();
        $('#'+content).show();
    }

    function load_show() {
        topbar.config({
        autoRun      : true,
        barThickness : 3,
        barColors    : {
            '0'      : 'rgba(26,  188, 156, .9)',
            '.25'    : 'rgba(52,  152, 219, .9)',
            '.50'    : 'rgba(241, 196, 15,  .9)',
            '.75'    : 'rgba(230, 126, 34,  .9)',
            '1.0'    : 'rgba(211, 84,  0,   .9)'
        },
        shadowBlur   : 10,
        shadowColor  : 'rgba(0,   0,   0,   .6)'
        });
        topbar.show()
    }

    function load_hide() {
        topbar.hide();
    }
</script>
