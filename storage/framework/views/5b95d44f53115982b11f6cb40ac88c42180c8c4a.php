<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> <?php echo trans('slider::slider.name'); ?> <small> <?php echo trans('app.manage'); ?> <?php echo trans('slider::slider.names'); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo guard_url('/'); ?>"><i class="fa fa-dashboard"></i> <?php echo trans('app.home'); ?> </a></li>
            <li class="active"><?php echo trans('slider::slider.names'); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='slider-slider-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="<?php echo (request('status') == '')?'active':'';; ?>"><a href="<?php echo guard_url('slider/slider'); ?>"><?php echo trans('slider::slider.names'); ?></a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="<?php echo guard_url('slider/slider/reports'); ?>"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    <?php echo $__env->make('slider::admin.slider.partial.actions', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    -->
                    <?php echo $__env->make('slider::admin.slider.partial.filter', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('slider::admin.slider.partial.column', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="slider-slider-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="slider-slider-check-all"></th>
                        <th data-field="name"><?php echo trans('slider::slider.label.name'); ?></th>
                    <th data-field="title1"><?php echo trans('slider::slider.label.heading'); ?></th>
                    <th data-field="status"><?php echo trans('slider::slider.label.status'); ?></th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    app.load('#slider-slider-entry', '<?php echo guard_url('slider/slider/0'); ?>');
    oTable = $('#slider-slider-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + data.id + '">';
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '<?php echo guard_url('slider/slider'); ?>',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'id'},
            {data :'name'},
            {data :'heading'},
            {data :'status'},
        ],
        "pageLength": 25
    });

    $('#slider-slider-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#slider-slider-list').DataTable().row( this ).data();
        $('#slider-slider-entry').load('<?php echo guard_url('slider/slider'); ?>' + '/' + d.id);
    });

    $('#slider-slider-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#slider-slider-check-all").on( 'change', function (e) {
        e.preventDefault();
        aIds = [];
        if ($(this).prop('checked')) {
            $("input[name^='id[]']").each(function(){
                $(this).prop('checked',true);
                aIds.push($(this).val());
            });

            return;
        }else{
            $("input[name^='id[]']").prop('checked',false);
        }
        
    });


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#slider-slider-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#slider-slider-list tbody').on('click', 'td.details-control', function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });

});
</script>