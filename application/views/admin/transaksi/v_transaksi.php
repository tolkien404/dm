<?php
$this->load->view('template/head');
?>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url().'#'?>">Home</a></li>
</ol>
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Data Transaksi</h5>
    </div>
    <br>
    <div class="col-md-12">
        <a href="<?php echo base_url().'admin/transaksi/pdf' ?>" class="btn btn-success">Cetak </a>
    </div>
    <table id="dynamic-table-transaksi" class="table table-striped table-hover table-sm dt-responsive nowrap data">
        <thead>
            <tr>
                <th>No. Referensi</th>
                <th>Kasir</th>
                <th>Tanggal Order</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
           <?php $no = 1; foreach($data as $o) { ?>
           <tr>
            <td><?php echo $o['no_referensi']?></td>
            <td class="font-w600"><?php echo $o['nama'] ?></td>
            <td><?php echo $o['tanggal'] ?></td>                
            <td><?php echo "Rp. ".number_format($o['total']) ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<?php
$this->load->view('template/menu');
?>
<script type="text/javascript">
    $("#transaksi").addClass('active');
</script>