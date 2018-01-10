@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <div class="panel panel-default">
                    <div class="panel-heading">Leaders</div>

                    <div class="panel-body">
                        <table class="table table-bordered table-striped" id="leaders-table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
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
                { data: 'last_name', name: 'first_name' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' }
            ]
        });
    });
</script>
@endpush