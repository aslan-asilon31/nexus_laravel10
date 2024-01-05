@extends('adminlte::page')

@section('title', 'Opening Balance')

@section('content_header')
    <h1>Accounting - Saldo Awal / Opening Balance</h1>
@stop

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>

  <div class="card-body">
    <div class="form-group">
        <label class="control-label col-xs-3">Akun</label>
        <div class="col-xs-9">
            <select name="open_balance" id="open_balance" class="form-control">
                <option value="" disabled selected>Select an open balance</option>
                @foreach ($open_balances as $opb)
                    <option value="{{ $opb->COA_ID }}">{{ $opb->COA_ACCNAME }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-3 control-label">Nominal Rekening</label>
        <div class="col-sm-10">
            <div class="input-group" >
                <span class="input-group-addon">Rp</span>&nbsp;
                <input type="number" class="form-control " name="sal_accdebetsum" placeholder="Debit"> &nbsp; &nbsp; &nbsp;
                <span class="input-group-addon">Rp</span>&nbsp;
                <input type="number" class="form-control " name="sal_acccreditsum" placeholder="Kredit">
            </div>
        </div>
    </div>

  </div>
</div>

<div class="card">

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Akun</th>
                    <th>Saldo Awal Debet</th>
                    <th>Saldo Awal Kredit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $index = 1;
                ?>
                @foreach ($open_balances as $item)
                <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $item->COA_ACCNAME }}</td>
                    <td>{{ $item->COA_DEBIT }}</td>
                    <td>{{ $item->COA_CREDIT }}</td>
                </tr>
                @endforeach
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </tfoot> --}}
        </table>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@stop