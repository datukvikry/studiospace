
<div class="col-xs-12 col-md-8">
    <div class="table-responsive">
        <h3><span class="odd wow fadeInUp" data-wow-delay="1s">Pengaturan Profil Studio</span></h3>
        <hr> 
        <form action="<?php echo base_url(). 'studio/pengaturan_update'; ?>" method="post">
            <?php foreach($studio as $u){ ?>     
            <h4 class="odd wow fadeInUp" data-wow-delay="1s">Detil Studio</h4>
             
            
              <table class="table odd wow fadeInUp">
            <tr>
                <td>Nama Studio</td>
                <td>
                    <input type="hidden" class="form-control" name="id_studio" value="<?php echo $u->id_studio ?>"  required> 
                    <input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>"  required>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea class="form-control" name="deskripsi" rows="5" required ><?php echo $u->deskripsi ?></textarea></td>

            </tr>
            <tr>
                <td>Telepon</td>
                <td> <input type="text" class="form-control" name="telepon" value="<?php echo $u->telepon ?>"  required></td>
            </tr>
             <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat" rows="5" required ><?php echo $u->alamat ?></textarea></td>

            </tr>
            <tr>
                <td>Lokasi</td>
                <td>
                    <input type="text" class="form-control" name="" id="txtautocomplete" value="<?php echo $u->lokasi ?>" required>
                    <input type="hidden" class="form-control" name="lokasi" value="<?php echo $u->lokasi ?>"  id="lokasi" >
                    <input type="hidden" class="form-control" name="lat" value="<?php echo $u->lat ?>"  id="lat" >
                    <input type="hidden" class="form-control" name="lng" value="<?php echo $u->lng ?>" id="lng" >
                </td>
            </tr>         
            <tr>
                <td colspan="2"><div id="gmap" style="width:700px;height:300px;"></div></td>
            </tr>
          

            </table>
         <hr>
            <h4>Informasi Rekening</h4>
            <table class="table odd wow fadeInUp">
            <tr>
                <td>Nama Pemilik Rekening</td>
                <td> <input type="text" name="p_rek" class="form-control" value="<?php echo $u->p_rek ?>"  required></td>
            </tr>
            <tr>
                <td>No. Rekening</td>
                <td> <input type="text" name="no_rek" class="form-control" value="<?php echo $u->no_rek ?>"  required></td>
            </tr>
             <tr>
                <td></td>
                <td><input type="submit" value="Simpan">  </td>
            </tr>
            
            </table>           
             <?php } ?>

        </form>
      
        
    </div>
</div>               
</div>

  
   



         