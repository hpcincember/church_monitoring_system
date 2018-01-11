@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12" >
                <div class="panel panel-default table-responsive">
                    <div class="panel-heading">Leaders</div>

                    <div class="panel-body">
                        <table class="table table-bordered table-striped" id="leaders-table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Suffix</th>
                                <th>Gender</th>
                                <th>School</th>
                                <th>Work</th>
                                <th>Contact Number</th>
                                <th>Facebook Account</th>
                                <th>Email Address</th>
                                <th>Level</th>
                                <th>Network</th>
                                <th>Cell Group</th>
                                <th>Birth Date</th>
                                <th>First Attend</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')
<script>
    $(function() {
        $('#leaders-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('leaders/data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'first_name', name: 'first_name' },
                { data: 'middle_name', name: 'middle_name' },
                { data: 'last_name', name: 'first_name' },
                { data: 'suffix', name: 'suffix' },
                { data: 'gender', name: 'gender' },
                { data: 'school', name: 'school' },
                { data: 'work_place', name: 'work_place' },
                { data: 'contact_number', name: 'contact_number' },
                { data: 'fb_account', name: 'fb_account' },
                { data: 'email_address', name: 'email_address' },
                { data: 'level', name: 'level' },
                { data: 'network', name: 'network' },
                { data: 'cell_group', name: 'cell_group' },
                { data: 'birth_date', name: 'birth_date' },
                { data: 'first_attend', name: 'first_attend' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endpush