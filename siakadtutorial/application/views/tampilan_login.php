<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/materialize/css/materialize.min.css"  media="screen,projection">
     
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
     
    </body>
  </html>

  <body>
     <script type="text/javascript" src="assets/materialize/js/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url() ?>assets/materialize/js/materialize.min.js"></script>

    
  <br><br><br>


  <div class="container">
    <div class="row center">
      
        <h2 class="header">TULIS JUDUL DISINI</h2>
        <div class="card horizontal">
          
          <div class="card-stacked">
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>

                  <form class="list-block inputs-list" method="POST" action="<?php echo base_url();?>index.php/login/getlogin" onsubmit="return cekform();">
                    <ul>
                      <li>
                            
                            <div class="row">
                              <div class="col s4"></div>
                              <div class="col s8 center">
                              <input type="text" placeholder="Username" name="username" id="username" />
                              <input type="password" placeholder="Password" name="password" id="password" />


                              <p style="color: red"><?php 
                                    $info = $this->session->flashdata('info');
                                    if(!empty($info))
                                    {
                                        echo $info; 
                                    }
                              ?></p>            


                              </div>
                            </div>
                        
                      </li>
    
                    </ul>
        

                        <button type="submit" class="btn btn-default right">Login</button>
                    
                  </form>
                  


            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </div>  
    
          

    
      
  
<script type="text/javascript">
        
        function cekform()
        {
          
            if(!$("#username").val())
            {
                
                Materialize.toast('Maaf username tidak boleh kosong', 4000)
                $("#username").focus()
                return false;
            }

            if(!$("#password").val())
            {
                Materialize.toast('Maaf password tidak boleh kosong', 4000)
                $("#password").focus()
                return false;
            }

            
            
        }
    </script>


  </body>
  
</html>