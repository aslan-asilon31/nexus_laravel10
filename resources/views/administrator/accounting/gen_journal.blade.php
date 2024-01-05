@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Accounting - Jurnal Umum / General Journal</h1>
@stop

@section('content')

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Search Account</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
  

  
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
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
            Launch Default Modal
          </button>
        
          {{-- <button class="btn btn-primary"> <i class="fa fa-plus"></i> </button> --}}
          <div class="col-xs-9">
              <select name="open_balance" id="open_balance" class="form-control">
                  <option value="" disabled selected>-</option>
                  {{-- @foreach ($open_balances as $opb)
                      <option value="{{ $opb->COA_ID }}">{{ $opb->COA_ACCNAME }}</option>
                  @endforeach --}}
              </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-xs-3">Cabang</label>
          <button class="btn btn-primary"> <i class="fa fa-search"></i> </button>
          <div class="col-xs-9">
              <select name="open_balance" id="open_balance" class="form-control">
                  <option value="" disabled selected>-</option>
              </select>
          </div>
      </div>
      
      <div class="form-group">
          <label class="col-sm-3 control-label">Nomor Bukti</label>
          <input type="text" class="form-control " name="sal_accdebetsum" placeholder="Debit">
      </div>
      
      <div class="form-group">
          <label class="col-sm-3 control-label">Tanggal</label>
          <input type="date" class="form-control " name="sal_accdebetsum" placeholder="Debit">
      </div>
      
      <div class="form-group">
          <label class="col-sm-3 control-label">Keterangan</label>
          <textarea class="form-control " name="sal_accdebetsum" placeholder="Debit"></textarea>
      </div>
          
      <div class="form-group">
          <label class="col-sm-3 control-label">Nominal Rekening</label>
          <div class="col-sm-10">
              <div class="input-group" >
                  <span class="input-group-addon">Rp</span>&nbsp;
                  <input type="number" class="form-control " name="sal_accdebetsum" placeholder="No Bukti/Referensi"> &nbsp; &nbsp; &nbsp;
                  <span class="input-group-addon">Rp</span>&nbsp;
                  <input type="number" class="form-control " name="sal_acccreditsum" placeholder="Kredit">
              </div>
          </div>
      </div>
          
      <div class="form-group">
          <label class="col-sm-3 control-label">Nominal Rekening</label>
          <div class="col-sm-10">
              <div class="input-group" >
                  <span class="input-group-addon">
                   <a class="btn btn-primary"> <i class="fa fa-plus"> Tambah</i> </a>&nbsp;&nbsp;
                   <a class="btn btn-primary"> <i class="fa fa-plus-square"> Baru</i> </a>
                  </span>
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
                    <th>No Rek</th>
                    <th>Nama Rek</th>
                    <th>Keterangan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $index = 1;
                ?>
                @foreach ($general_journals as $item)
                <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $item->COA_ACC }}</td>
                    <td>{{ $item->COA_ACCNAME }}</td>
                    <td>{{ $item->JOU_INFO }}</td>
                    <td>{{ $item->JOUDET_DEBIT }}</td>
                    <td>{{ $item->JOUDET_CREDIT }}</td>
                    <td>
                        <a href="">edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop