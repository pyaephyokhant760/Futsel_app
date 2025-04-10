@extends('admin.layout.header')

@section('contact') 
    <div class='container'>
        @can('coach-create')
            <a href="{{ route('coachs.create')}}" class="btn btn-dark text-white mb-3">{{__('message.coach-create')}}</a>
        @endcan
        <table id="myTable" class="display table table-striped align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th style="width: 100px;">{{__('message.no')}}</th>
                    <th style="width: 200px;">{{ __('message.name') }}</th>
                    <th style="width: 200px;">{{__('message.start-date')}}</th>
                    <th style="width: 200px;">{{__('message.country')}}</th>
                    <th>{{ __('message.action') }}</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            @if (session('success'))
                Swal.fire({
                    title: "{{ session('success') }}",
                    icon: "success"
                });
            @endif
            $('#myTable').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('coachs.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'start_date',
                        name: 'start_date',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'country',
                        name: 'country',
                        orderable: false,
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    },
                ]
            });
            $(document).on('click', '.delete-btn', function() {
                let id = $(this).data('id'); // Get ID

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });

                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // AJAX call
                        $.ajax({
                            type: "POST",
                            url: "{{ route('coach.delete') }}", // ← Set your route here
                            data: {
                                id: id,
                            },
                            dataType: 'json',
                            success: function(response) {
                                swalWithBootstrapButtons.fire(
                                    "Deleted!",
                                    "Your file has been deleted.",
                                    "success"
                                );

                                let table = $('#myTable').DataTable();
                                table.ajax.reload(null, false); // Reload datatable
                            },
                            error: function(xhr) {
                                swalWithBootstrapButtons.fire(
                                    "Error!",
                                    "Something went wrong.",
                                    "error"
                                );
                            }
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire(
                            "Cancelled",
                            "Your file is safe :)",
                            "error"
                        );
                    }
                });
            });


        });
    </script>
@endsection
