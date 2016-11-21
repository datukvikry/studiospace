
<div class="col-xs-12 col-md-8">
    <div class="table-responsive">
        <h3><span class="odd wow fadeInUp" data-wow-delay="1s">Pengaturan Profil Studio</span></h3>
        <hr>
        <form action="<?php echo base_url(). 'studio/pengaturan_input'; ?>" method="post">
            <h4>Detil Studio</h4>
            <table class="table odd wow fadeInUp">
            <tr>
                <td>Nama Studio</td>
                <td> <input type="text" class="form-control" name="nama"  required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea class="form-control" name="deskripsi" rows="5" required ></textarea></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td> <input type="text" class="form-control" name="telepon" required></td>
            </tr>
             <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" rows="5" name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>
                    <input type="text" class="form-control" name="" id="txtautocomplete"  placeholder="" required>
                    <input type="hidden" class="form-control" name="lokasi" id="lokasi" readonly>
                    <input type="hidden" class="form-control" name="lat" id="lat" readonly>
                    <input type="hidden" class="form-control" name="lng" id="lng" readonly>
                </td>
            </tr>
          
            <tr>
                <td colspan="2"><div id="gmap" style="width:700px;height:300px;"></div></td>
            </tr>
            <!--  
            <tr>
                <td>Upload Foto Studio</td>
                <td>   
                    <input name="file_name" id="file_name" type="file" class="form-control required"/> 
                    <input name="file_name" id="file_name" type="file" class="form-control required"/> 
                    <input name="file_name" id="file_name" type="file" class="form-control required"/> 
                    <input name="file_name" id="file_name" type="file" class="form-control required"/> 
                    <input name="file_name" id="file_name" type="file" class="form-control required"/> 
                </td>
            </tr>
             -->

            </table>
         <hr>
            <h4>Informasi Rekening</h4>
            <table class="table odd wow fadeInUp">
            <tr>
                <td>Nama Pemilik Rekening</td>
                <td> <input type="text" name="p_rek" class="form-control" id="" placeholder="" required></td>
            </tr>
            <tr>
                <td>No. Rekening</td>
                <td> <input type="text" name="no_rek" class="form-control" id="" placeholder="" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan">  </td>
            </tr>
              </table>           
        </form>
         
    </div>
</div>               
</div>

  
   



         