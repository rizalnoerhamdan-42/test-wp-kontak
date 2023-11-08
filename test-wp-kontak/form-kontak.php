 

<!DOCTYPE html>
<html lang="en">
  <head>

 

    <title>Kontak Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="css/hierarchy-select.min.css">



    </head>


  <body >



    <div class="container-fluid">


     
      <div class="row">
        <div class="col-md-12">
        
          <form  class="well form-horizontal" method="post"  id="kontak_form" action="function_insert_kontak.php" enctype="multipart/form-data">

            <input  name="id_kontak" id="id_kontak" class="form-control"  type="text" value="" style="display:none;">
        
            <fieldset>


                <div class="form-group">
                  <label class="col-md-4 control-label" >Nama</label> 
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">


                      <input name="nama"  id="nama"   placeholder="nama" class="form-control"  type="text"  >



                    </div>
                  </div>
                </div>




                <div class="form-group">
                  <label class="col-md-4 control-label" >email</label> 
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">


                      <input name="email"  id="email"   placeholder="email" class="form-control"  type="text"  >



                    </div>
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-md-4 control-label" >pesan</label> 
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">


                      <textarea name="pesan"  id="pesan"  placeholder="pesan" ></textarea>



                    </div>
                  </div>
                </div>               
 
             
                  <!-- Button -->
                <div class="form-group">
                      <label class="col-md-4 control-label"></label>
                      <div class="col-md-4"><br>
                          <button type="submit" class="btn btn-info" name="submit" value="Submit">Submit </button>

                          

                      </div>
                </div>
                

            </fieldset>
          </form>


 

        </div>
      </div>


 
 

     

 



  </body>

</html>
