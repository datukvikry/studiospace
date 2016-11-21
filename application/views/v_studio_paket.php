
<div class="col-xs-12 col-md-8 odd wow fadeInUp" data-wow-delay="1s">
    <div class="table-responsive">
        <h3>
            <span>Paket Fotografi Studio</span>
            <a class=" btn btn-info" role="button" data-wow-delay="1s"href="<?php echo base_url().'studio/paket_input'?>">Tambah</a>
        </h3>
        <hr>
         <table class="table" >
             <tr  class="odd wow fadeInUp" data-wow-delay="1s">
                <td></td>
                <td><h5 align="center">Jenis Paket</h5></td>
                <td><h5 align="left">Harga</h5></td>
                <td></td>
            </tr>   

             <?php foreach($paket as $u){ ?> 

            <tr class="odd wow fadeInUp" data-wow-delay="1s">
                <td style="width:140px;height:140; padding:0;">
                    <img style="padding:0;width:140px;height:140px;" src="<?php echo base_url(); ?>assets/img/job-add.png" alt="">
                </td>
                <td style="max-width: 200px;">
                    <h4>
                        <?php echo $u->nama ?><br>
                        <span class="job-type"  data-toggle="collapse" data-target="#<?php echo $u->id_paket ?>">info Detil Paket</span>
                    </h4>
                </td>
                <td><p>Rp. <?php echo $u->harga ?>,-</p></td>
                <td >
                    <a href="<?php echo base_url(). 'studio/paket_edit/' .$u->id_paket; ?>">Ubah</a>
                    <a href="<?php echo base_url(). 'studio/paket_hapus/' .$u->id_paket; ?>">hapus</a>
                </td>
            </tr>                                               
            <tr class="collapse out" id="<?php echo $u->id_paket ?>">
                <td colspan="4">
                <div class="col-md-6 " ><h4>Rincian Paket</h4><p><?php echo $u->rincian ?></p></div>
                <div class="col-md-6 " ><h4>Informasi Penting</h4><p><?php echo $u->info ?></p></div>
                </td>   
            </tr>   

            <?php } ?>


        </table>
    </div>
</div>               
</div>

  
   



         