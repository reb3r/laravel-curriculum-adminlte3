@extends('layouts.master')
@section('title')
    {{ trans('global.certificate.title') }}
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/">{{ trans('global.home') }}</a></li>
    <li class="breadcrumb-item active">{{ trans('global.certificate.title') }}</li>
    <li class="breadcrumb-item "><a href="/documentation" class="text-black-50"><i class="fas fa-question-circle"></i></a></li>
@endsection
@section('content')
@can('user_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("certificates.create") }}" >
                {{ trans('global.certificate.create') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-body">
        <table id="certificates-datatable" class=" table table-bordered table-striped table-hover datatable">
            <thead>
                <tr>
                    <th width="10"></th>
                    <th>{{ trans('global.certificate.fields.title') }}</th>
                    <th>{{ trans('global.curriculum.title_singular') }}</th>
                    <th>{{ trans('global.organization.title_singular') }}</th>
                    <th>{{ trans('global.user.title_singular') }}</th>
                    <th>{{ trans('global.datatables.action') }}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>


@endsection
@section('scripts')
@parent

<script>
$(document).ready( function () {
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
    var table = $('#certificates-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('certificates/list') }}",
        columns: [
                 { data: 'check'},
                 { data: 'title' },
                 { data: 'curriculum' },
                 { data: 'organization' },
                 { data: 'owner' },
                 { data: 'action' }
                ],
        buttons: dtButtons
    });
    //align header/body
    $(".dataTables_scrollHeadInner").css({"width":"100%"});
    $(".table ").css({"width":"100%"});
 });
</script>

@endsection