@extends('admin.layout.header')

@section('contact') 
    <div class='container'>
        @can('player-create')
            <a href="{{ route('players.create')}}" class="btn btn-dark text-white mb-3">{{__('message.player-create')}}</a>
        @endcan
        <table id="myTable" class="display table table-striped align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th style="width: 100px;">{{__('message.no')}}</th>
                    <th style="width: 300px;">{{ __('message.name') }}</th>
                    <th style="width: 100px;">{{__('message.age')}}</th>
                    <th style="width: 100px;">{{__('message.position')}}</th>
                    <th style="width: 100px;">{{ __('message.action') }}</th>
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
                ajax: "{{ route('players.index') }}",
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
                        data: 'birth',
                        name: 'birth',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'position',
                        name: 'position',
                        orderable: false,
                        searchable: false
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
                            url: "{{ route('player.delete') }}", // ← Set your route here
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
