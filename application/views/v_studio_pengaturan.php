 <?php foreach($studio as $u){ ?> 
<div class="col-xs-12 col-md-8 odd wow fadeInUp">
    <div class="table-responsive">
        <h3>
            <span class="odd wow fadeInUp" data-wow-delay="1s">Pengaturan Studio</span>
            <a class=" btn btn-info" role="button" data-wow-delay="1s"href="<?php echo base_url().'studio/pengaturan_edit/'.$u->id_studio ?>">Edit</a>
        </h3>
        <hr>  
                        
            <h4 class="odd wow fadeInUp" data-wow-delay="1s">Informasi Studio</h4>    
            <table class="table odd wow fadeInUp">
            <tr>
                <td>Nama Studio</td>
                <td> <input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>" readonly></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea class="form-control" name="deskripsi" rows="5" readonly ><?php echo $u->deskripsi ?></textarea></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td> <input type="text" class="form-control" name="telepon" value="<?php echo $u->telepon ?>" readonly></td>
            </tr>
             <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat" rows="5" readonly ><?php echo $u->alamat ?></textarea></td>               
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>
                    <input type="text" class="form-control" name="" id="txtautocomplete" value="<?php echo $u->lokasi ?>" readonly>
                    <input type="hidden" class="form-control" name="lokasi" value="<?php echo $u->lokasi ?>"  id="lokasi" readonly>
                    <input type="hidden" class="form-control" name="lat" value="<?php echo $u->lat ?>"  id="lat" readonly>
                    <input type="hidden" class="form-control" name="lng" value="<?php echo $u->lng ?>" id="lng" readonly>
                </td>
            </tr>         
        
            </table>

             <hr>
            <h4>Informasi Akun</h4>
            <table class="table odd wow fadeInUp">
            <tr>
                <td>Email</td>
                <td></td>
            </tr>
            <tr>
                <td>Password</td>
                <td></td>
            </tr>
            
            </table>  

         <hr>
            <h4>Informasi Ruangan Studio</h4>
            <table class="table odd wow fadeInUp">
            <tr>
                <td>Jumlah Ruangan Studio Fotografi</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            
            </table>  

             <hr>
            <h4>Informasi Rekening</h4>
            <table class="table odd wow fadeInUp">
            <tr>
                <td>Nama Pemilik Rekening</td>
                <td></td>
            </tr>
            <tr>
                <td>No. Rekening</td>
                <td></td>
            </tr>
            
            </table>           
             <?php } ?>

          
      
        
    </div>
</div>               
</div>

  
   



         