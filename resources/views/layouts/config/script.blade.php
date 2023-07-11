<!-- Core  -->
<script src="{{ asset('template/global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
<script src="{{ asset('template/global/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('template/global/vendor/popper-js/umd/popper.min.js') }}"></script>
<script src="{{ asset('template/global/vendor/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('template/global/vendor/animsition/animsition.js') }}"></script>
<script src="{{ asset('template/global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('template/global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
<script src="{{ asset('template/global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
<script src="{{ asset('template/global/vendor/waves/waves.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('template/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js') }}"></script>
<script src="{{ asset('template/global/vendor/switchery/switchery.js') }}"></script>
<script src="{{ asset('template/global/vendor/intro-js/intro.js') }}"></script>
<script src="{{ asset('template/global/vendor/screenfull/screenfull.js') }}"></script>
<script src="{{ asset('template/global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
<script src="{{ asset('template/global/vendor/matchheight/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('template/global/vendor/peity/jquery.peity.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('template/global/vendor/bootbox/bootbox.js') }}"></script>
<script src="{{ asset('template/global/vendor/bootstrap-sweetalert/sweetalert.js') }}"></script>
<script src="{{ asset('template/global/vendor/toastr/toastr.js') }}"></script>

{{-- select2 --}}
<script src="{{ asset('template/global/vendor/select2/select2.full.min.js') }}"></script>

{{-- Datatable --}}
<script src="{{ asset('template/global/vendor/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-scroller/dataTables.scroller.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-responsive/dataTables.responsive.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-buttons/dataTables.buttons.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-buttons/buttons.html5.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-buttons/buttons.flash.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-buttons/buttons.print.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-buttons/buttons.colVis.js') }}"></script>
<script src="{{ asset('template/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js') }}"></script>

<!-- Scripts -->
<script src="{{ asset('template/global/js/Component.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin.js') }}"></script>
<script src="{{ asset('template/global/js/Base.js') }}"></script>
<script src="{{ asset('template/global/js/Config.js') }}"></script>

<script src="{{ asset('template/assets/js/Section/Menubar.js') }}"></script>
<script src="{{ asset('template/assets/js/Section/Sidebar.js') }}"></script>
<script src="{{ asset('template/assets/js/Section/PageAside.js') }}"></script>
<script src="{{ asset('template/assets/js/Section/GridMenu.js') }}"></script>
<script>
    Config.set('assets', "{{ asset('template/assets') }}");
</script>

<!-- Config -->
<script src="{{ asset('template/global/js/config/colors.js') }}"></script>
<script src="{{ asset('template/assets/js/config/tour.js') }}"></script>

<!-- Page -->
<script src="{{ asset('template/assets/js/Site.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/asscrollable.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/slidepanel.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/switchery.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/datatables.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/matchheight.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/peity.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/webui-popover.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/toolbar.js') }}"></script>
<script src="{{ asset('template/global/js/Plugin/bootbox.js') }}"></script>
{{-- <script src="{{ asset('template/global/js/Plugin/bootstrap-sweetalert.js') }}"></script>> --}}
<script src="{{ asset('template/global/js/Plugin/toastr.js') }}"></script>

<script src="{{ asset('template/assets/examples/js/dashboard/v1.js') }}"></script>

{{-- Daterangepicker --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
