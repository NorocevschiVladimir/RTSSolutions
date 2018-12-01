@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .message{
            margin: 0 0 10px;
            width: 100%;
            max-width: 320px;
        }
        .download-custom{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-group-sm>.btn i, .btn-sm i{
            display: flex;
            margin-right: 5px;
            font-size: 18px;
        }
        .download-custom span{
            font-size: 13px;
        }
        table.dataTable tbody td, table.dataTable tbody th{
            padding: 8px 18px;
        }
        #bread-actions{

        }
    </style>
@stop

@section('content')
<div class="page-content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                                        <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nr.</th>
                                            <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Name</th>
                                            <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Email</th>
                                            <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Created at</th>
                                            <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Message</th>
                                            <th class="actions text-right sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 61px;">Actions</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $item)
                                            <tr>
                                                <td>
                                                    <div class="readmore" style="max-height: none;">{{$item->id}}.</div>
                                                </td>
                                                <td>
                                                    <div class="readmore" style="max-height: none;">{{$item->name}}</div>
                                                </td>

                                                <td>
                                                    <div class="readmore" style="max-height: none;">{{$item->email}}</div>
                                                </td>

                                                <td>
                                                    {{$item->created_at}}
                                                </td>

                                                <td>
                                                    <p class="message">{{$item->message}}</p>
                                                </td>
                                                <td class="no-sort no-click" id="bread-actions">
                                                    <a href="{{asset('/storage/' . $item->path)}}" download="{{$item->name}}" title="Download" class="btn btn-sm btn-primary pull-right download-custom">
                                                        <i class="voyager-cloud-download"></i> <span class="hidden-xs hidden-sm">Download CV</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                        Total: {{count($list)}} CV's.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@stop
