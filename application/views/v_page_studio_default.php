 <div class="container">
    <div class="col-md-8 col-md-offset-2 ">                   
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo base_url(); ?>assets/img/slider-image-3.jpg" alt="">
            </div>
            <div class="item ">
              <img src="<?php echo base_url(); ?>assets/img/slider-image-2.jpg" alt="">
            </div><div class="item ">
              <img src="<?php echo base_url(); ?>assets/img/slider-image-3.jpg" alt="">
            </div><div class="item ">
              <img src="<?php echo base_url(); ?>assets/img/slider-image-2.jpg" alt="">
            </div><div class="item ">
              <img src="<?php echo base_url(); ?>assets/img/slider-image-3.jpg" alt="">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>

    <div class="col-md-4 col-md-offset-2 ">
        <h2><strong>Studio A</strong></h2> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p>
    </div>
    <div class="col-md-4 ">
         <h3>Lokasi</h3> 
         <p>
             Address: Jl. Diponegoro No.54, Bandung, Jawa Barat<br>
            Phone:(022) 7210543<br>
            Hours: Open today · 10AM–11PM

         </p>
    </div>

</div>


          <!-- TESTIMONIAL -->
    <div class="container"  >
        <div class="row page-title text-center  wow bounce"  data-wow-delay=".7s">
            <h5>TESTIMONIALS</h5>
            <h2>WHAT PEOPLES ARE SAYING</h2>
        </div>

        <div class="row testimonial" >
            <div class="col-md-12">
                <div id="testimonial-slider">
                    <div class="item">
                        <div class="client-text">                                
                            <p>Jobify offer an amazing service and I couldn’t be happier! They 
                            are dedicated to helping recruiters find great candidates, wonderful service!</p>
                            <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                        </div>
                        <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                            <img src="<?php echo base_url(); ?>assets/img/client-face1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-text ">                                
                            <p>Jobify offer an amazing service and I couldn’t be happier! They 
                            are dedicated to helping recruiters find great candidates, wonderful service!</p>
                            <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                        </div>
                        <div class="client-face">
                            <img src="<?php echo base_url(); ?>assets/img/how-work3.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-text">                                
                            <p>Jobify offer an amazing service and I couldn’t be happier! They 
                            are dedicated to helping recruiters find great candidates, wonderful service!</p>
                            <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                        </div>
                        <div class="client-face wow fadeInRight" data-wow-delay=".9s">
                            <img src="<?php echo base_url(); ?>assets/img/client-face1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-text">                                
                            <p>Jobify offer an amazing service and I couldn’t be happier! They 
                            are dedicated to helping recruiters find great candidates, wonderful service!</p>
                            <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                        </div>
                        <div class="client-face wow fadeInRight" data-wow-delay=".9s">
                            <img src="<?php echo base_url(); ?>assets/img/client-face2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            

    <!-- JENIS PAKET -->
    <div class="container">

        <div class="col-md-8 col-md-offset-2">
            <div class="row page-title text-center wow bounce" data-wow-delay="1s">
             <hr>
                <h5>Pilih Jenis Paket Fotografi</h5>
                <h2><span>34</span> Jenis Paket Fotografi tersedia</h2>

            </div>

            <div class=" job-posts table-responsive">
             <hr>
                <table class="table">
                    <tr  class="odd wow fadeInUp" data-wow-delay="1s">
                        <td></td>
                        <td><h5 align="center">Jenis Paket</h5></td>
                        <td><h5 align="left">Harga</h5></td>
                        <td></td>
                    </tr>
         
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                        <td style="width:140px;height:140; padding:0;"><img style="padding:0;width:140px;height:140px;" src="<?php echo base_url(); ?>assets/img/job-add.png" alt=""></td>
                        <td style="width: 200px;"><h4>Paket Foto A <br><span class="job-type"  data-toggle="collapse" data-target="#1">info Detil Paket</span></h4></td>
                        <td><p>Rp. 800.000,-</p></td>
                        <td style="width: 135px;"><a href="<?php echo base_url(); ?>show/s_studio_jadwal">Lihat Jadwal</a></td>
                    </tr>
                                               
                    <tr class="collapse out" id="1">
                        <td colspan="4">
                        <div class="col-md-4 " ><h4>Rincian Paket</h4><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        <div class="col-md-4 " ><h4>Informasi Penting</h4><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        <div class="col-md-4 " ><h4>Informasi Tambahan</h4><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        </td>   
                    </tr>   

                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                        <td style="width:140px;height:140; padding:0;" ><img style="padding:0;width:140px;height:140px;" src="<?php echo base_url(); ?>assets/img/job-add.png" alt=""></td>
                        <td style="width: 200px;" ><h4>Paket Foto B <br><span class="job-type"  data-toggle="collapse" data-target="#2">info Detil Paket</span></h4></td>
                        <td ><p>dribbble community</p></td>
                        <td style="width: 135px;"><a href="#">Lihat Jadwal</a></td>
                    </tr>
                                               
                    <tr class="collapse out" id="2">
                        <td colspan="4">
                        <div class="col-md-4 " ><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        <div class="col-md-4 " ><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        <div class="col-md-4 " ><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        </td>   
                    </tr>  

                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                        <td style="width:140px;height:140; padding:0;" ><img style="padding:0;width:140px;height:140px;" src="<?php echo base_url(); ?>assets/img/job-add.png" alt=""></td>
                        <td style="width: 200px;"><h4>Paket Foto C<br><span class="job-type"  data-toggle="collapse" data-target="#3">info Detil Paket</span></h4></td>
                        <td ><p>dribbble community</p></td>
                        <td style="width: 135px;"><a href="#">Lihat Jadwal</a></td>
                    </tr>
                                             
                    <tr class="collapse out" id="3">
                        <td colspan="4">
                        <div class="col-md-4 " ><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        <div class="col-md-4 " ><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        <div class="col-md-4 " ><p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p></div>
                        </td>   
                    </tr>  


                </table>
            </div>
        </div>        
    </div> 

