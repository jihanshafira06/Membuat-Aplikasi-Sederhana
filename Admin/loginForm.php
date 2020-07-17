<?php require_once "koneksi.php";
?>
  
            <div class="container text-center text-dark"><h2><b>FORM LOGIN</b></h2>
                <form action="prosesLogin.php" method="POST">
                  <div class="form-group text-left">
                    <label for="namaUser">Nama User:</label>
                    <input type="text" class="form-control" name="namaUser" placeholder="user name"  style="width: 100%;" required>
                  </div>
                  <div class="form-group text-left">
                    <label for="password">Password User:</label>
                    <input type="password" class="form-control mr-sm-2" name="passwordUser" placeholder="password" style="width: 100%;" required> 
                  </div>
                <button type="submit" class="btn btn-info mr-auto"style="width: 100%;">Login</button>
              </form>  


                      
              
              

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

