@extends('layout_master.master')

@section('content')
<div class="page-header position-relative">
                        <h1>
                            Pengelolaan Umum
                            <small>
                                <i class="icon-double-angle-right"></i>
                                Master Anggaran 
                            </small>
                        </h1>
    </div><!--/.page-header-->
    <h1><a href="{{ route('master-anggaran-add') }}" class="btn btn-primary pull-right btn-sm">Add New</a></h1>
    <div class="table-header">
                                   Jenis-Jenis Anggaran
    </div>
    <table id="tabelsaku" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nama Anggaran</th><th>Keterangan</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($anggarans as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="#">{{ $item->nama_anggaran }}</a></td><td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('master-anggaran-edit', $item->id_anggaran) }}" class="btn btn-app btn-info btn-mini">
                            <i class="icon-edit"></i>
                        </a> 
                        <a href="{{ route('master-anggaran-destroy', $item->id_anggaran) }}" onclick="return confirm('Are you sure?');" class="btn btn-app btn-danger btn-mini">
                             <i class="icon-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
 <!--page specific plugin scripts-->

        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.dataTables.bootstrap.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabelsaku').DataTable( {
                    dom: 'T<"clear">lfrtip'
                } );
            } );
        </script>
@endsection
