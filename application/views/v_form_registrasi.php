        <!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Studiospace | Studio Photo Portal</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon">
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script type="text/javascript">
                $('.message a').click(function(){
             $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
          });
        </script>
        <style>
              @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
          width: 360px;
          padding: 8% 0 0;
          margin: auto;
        }
        .form {
          position: relative;
          z-index: 1;
          background: #FFFFFF;
          max-width: 360px;
          margin: 0 auto 100px;
          padding: 45px;
          text-align: center;
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input  {
          font-family: "Roboto", sans-serif;
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 15px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;
        }


        .form select{
		 	font-family: "Roboto", sans-serif;
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 15px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;

        }
        .form button {
          font-family: "Roboto", sans-serif;
          text-transform: uppercase;
          outline: 0;
          background: #4CAF50;
          width: 100%;
          border: 0;
          padding: 15px;
          color: #FFFFFF;
          font-size: 14px;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
          background: #43A047;
        }
        .form .message {
          margin: 15px 0;
          color: #b3b3b3;
          font-size: 12px;
        }
        .form .message a {
          color: #4CAF50;
          text-decoration: none;
        }
        .form .register-form {
          display: none;
        }
        .container {
          position: relative;
          z-index: 1;
          max-width: 300px;
          margin: 0 auto;
        }
        .container:before, .container:after {
          content: "";
          display: block;
          clear: both;
        }
        .container .info {
          margin: 50px auto;
          text-align: center;
        }
        .container .info h1 {
          margin: 0 0 15px;
          padding: 0;
          font-size: 36px;
          font-weight: 300;
          color: #1a1a1a;
        }
        .container .info span {
          color: #4d4d4d;
          font-size: 12px;
        }
        .container .info span a {
          color: #000000;
          text-decoration: none;
        }
        .container .info span .fa {
          color: #EF3B3A;
        }
        body {
          background: #c0c0c0; /* fallback for old browsers */
          background: -webkit-linear-gradient(right, #c0c0c0, #fff);
          background: -moz-linear-gradient(right, #c0c0c0, #fff);
          background: -o-linear-gradient(right, #c0c0c0, #fff);
          background: linear-gradient(to left, #c0c0c0, #fff);
          font-family: "Roboto", sans-serif;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;      
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="container">	
    <div class="login-page">
      <div class="form">  
        <h2>Pendaftaran User Baru</h2> 
        <p class="message">Sudah punya akun? <br> Silahkan masuk <a href="<?php echo base_url(); ?>login">disini</a></p>
        <br>
    		<form  action="<?php echo base_url(). 'register/tambah_aksi'; ?>" method="post">
            <input type="email"  name="email" class="form-control" placeholder="Email" required> 
            <input type="text"  name="fullname" class="form-control" placeholder="Fullname" required> 
    		    <input type="text"  name="phone" class="form-control" placeholder="Mobile Number" required> 
    		    <input type="password" name="password" class="form-control" placeholder="Password" required> 
            

             <p class="message">Gender</p>      
             <table>
             <tr>
             <td> <label for="input3">Male</label></td>
             <td><input type="radio" name="gender" value="male" required></td>
              
             <td>
            Male
            <input type="radio" name="gender" value="female" required>  </td>
            
             </tr>
               

             </table>
           

           
            
            <p class="message">Date of Birth</p>
           
                        
                     <select name="year" id="year" class="form-control" required>
                        <option value="--" selected>Year</option>                       
                        <?php
                            for($i=date('Y')-10; $i>1899; $i--) {
                                $birthdayYear = '';
                                $selected = '';
                                if ($birthdayYear == $i) $selected = ' selected="selected"';
                                print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
                            }
                        ?>                          
                    </select>     
                                      
                  
                    <select name="month" id="month" onchange="" class="form-control" size="1" required>
                        <option value="--" selected>Month</option>
                        <option value="01">Jan</option>
                        <option value='02'>Feb</option>
                        <option value='03'>Mar</option>
                        <option value='04'>Apr</option>
                        <option value='05'>Mei</option>
                        <option value='06'>June</option>
                        <option value='07'>July</option>
                        <option value='08'>Agust</option>
                        <option value='09'>Sep</option>
                        <option value='10'>Oct</option>
                        <option value='11'>Nov</option>
                        <option value="12">Dec</option>
                    </select>           
                                                         
                
                    <select name="day" id="day" onchange="" class="form-control" size="1" required>
                    <option value="--" selected>Day</option>
                    <option value="01">01</option>
                    <option value='02'>02</option>
                    <option value='03'>03</option>
                    <option value='04'>04</option>
                    <option value='05'>05</option>
                    <option value='06'>06</option>
                    <option value='07'>07</option>
                    <option value='08'>08</option>
                    <option value='09'>09</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                    <option value='13'>13</option>
                    <option value='14'>14</option>
                    <option value='15'>15</option>
                    <option value='16'>16</option>
                    <option value='17'>17</option>
                    <option value='18'>18</option>
                    <option value='19'>19</option>
                    <option value='20'>20</option>
                    <option value='21'>21</option>
                    <option value='22'>22</option>
                    <option value='23'>23</option>
                    <option value='24'>24</option>
                    <option value='25'>25</option>
                    <option value='26'>26</option>
                    <option value='27'>27</option>
                    <option value='28'>28</option>
                    <option value='29'>29</option>
                    <option value='30'>30</option>
                    <option value="31">31</option>
                  </select>
                                          
    		  	<p class="message">Pendaftaran user sebagai?</p> 
    		  	<select class="form-control" name="tipe_user">
    			    <option value="1">Customer</option>
    			    <option value="2">Studio Photo</option>
    			  </select>   
    		    <input  style="background: #c0c0c0;" class="btn btn-lg btn-success btn-block" type="submit" value="Daftar">
    			  
    	    </form>
	  </div> 
	     
    </div>
  </div>
  

 </body>
</html>

