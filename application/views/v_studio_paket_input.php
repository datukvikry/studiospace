
<div class="col-xs-12 col-md-8 odd wow fadeInUp" data-wow-delay="1s">
    <div class="table-responsive">
        <h3>
            <span>Paket Fotografi Studio</span>
        </h3>
        <hr>
        

         <form action="<?php echo base_url(). 'studio/paket_input_aksi'; ?>" method="post">
            <h4>Informasi Paket Fotografi</h4>
            <table class="table odd wow fadeInUp">
             
            <!-- <tr>
                <td>Gambar Paket</td>
                <td>   
                    <input name="file_name" id="file_name" type="file" class="form-control"/>                     
                </td>
            </tr>
             -->

            <tr>
                <td>Nama Paket</td>
                <td> <input type="text" class="form-control" name="nama" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td> <input type="text" class="form-control" name="harga" required></td>
            </tr>
            <tr>
                <td>Rincian</td>
                <td><textarea class="form-control" rows="5" name="rincian" required></textarea></td>
            </tr>
             <tr>
                <td>Informasi Tambahan</td>
                <td><textarea class="form-control" rows="5" name="info" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        
            </table>           
        </form>


    </div>
</div>               
</div>

  
   



         