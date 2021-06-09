@extends('Admin.layouts.master')

@section('title','Staff leave list')

@section('css')


    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/css/fixedHeader.dataTables.min.css')}}">


@endsection
@section('content')

                <!-- Individual column searching (text inputs) table -->
                    <section id="text-inputs">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Staff leave list</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                        
                                       
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered add-rows text-inputs-searching yajra-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Name</th>
                                                            <th>From Date</th>
                                                            <th>To Date</th>
                                                            <th>Reason</th>
                                                            <th>Status</th>    
                                                            <th>Action</th>
                                                        </tr>
                                                       
                                                    <tbody>
                                                 
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                  
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- Individual column searching (text inputs) table -->
                
   

@endsection
@section('js')
   <!-- BEGIN: Vendor JS-->
   <script src="{{asset('web/admin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

          <!-- BEGIN: Theme JS-->
        <script src="{{asset('web/admin/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
        <script src="{{asset('web/admin/app-assets/js/core/app.js')}}" type="text/javascript"></script>
        <!-- END: Theme JS-->

        <script src="{{asset('web/admin/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('web/admin/js/dataTables.fixedHeader.min.js')}}"></script>
<script>
    $(document).ready(function () {
     
        var table = $('.yajra-datatable').DataTable({
            dom: 'lBrtip',
            // buttons: [
            // 'copy','csv', 'excel', 'pdf', 'print'
            // ]
            // "lengthChange": true,
            processing: true,
            serverSide: true,
            ajax: "{!! route('hodLeaveMagement') !!}",

            //tfoot search bar
            orderCellsTop: true,
            fixedHeader: true,

            "columns": [
                {data: 'DT_RowIndex',orderable: false,searchable: false},
                {data: 'name'},
                {data: 'leave_from_date'},
                {data: 'leave_to_date'},
                {data: 'reason'},
                {data: 'status'},
                {data: 'edit_delete',orderable: false},
                
            ],
           

            buttons: [{
                extend: 'collection',
                text: 'Export',
                buttons: [{
                        extend: 'pdf',
                        exportOptions: {
                            columns: [0,1,2,3]
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [0,1,2,3]
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: [0,1,2,3]
                        }
                    },
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: [0,1,2,3]
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [0,1,2,3]
                        }
                    }
                ]
            }]
        });

        window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);

    });
</script>
@endsection