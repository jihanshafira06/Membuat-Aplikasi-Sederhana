<?php require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class= "container">
        <div class="row">
          <!-- <div class= "col-12 bg-primary text-light" style="height: 100px" >Header</div> -->
          <div class="container-fluid"></div>
          <img src="../assets/coffe.jpg"  class="img-fluid img-thumbnail" alt="..." style="width:100%; height:400px"> 

          <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="#">Navigation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="LatihanBoostrap3.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Facilities</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" href="#">Guest Book</a>
                </li>    
              </ul>
              <form class="form-inline my-2 my-lg-0 ">
                  <input class = "form-control mr-sm-2" type="text" name="q" placeholder="search"> 
                  <button class = "btn btn-success my-2 my-sm-0" type="submit" >search</button>
              </form>
            </div>  
          </nav>
          
          <div class="col-12 col-md-8 col-lg-10 bg-light text-dark" style="min-height:650px" >
            <div class="container-fluid text-center text-dark"><h2><b>INPUT DATA USER</b></h2>
                <form action="prosesInsertUser.php" method="POST">
                  <div class="form-group text-left">
                    <label for="namaUser">Nama User:</label>
                    <input type="text" class="form-control" name="namaUser" placeholder="user name"  style="width: 100%;" required>
                  </div>
                  <div class="form-group text-left">
                    <label for="emaiUser">Email User:</label>
                    <input type="email" class="form-control mr-sm-2" name="emailUser" placeholder="@" style="width: 100%;" required> 
                  </div>
                  <div class="form-group text-left">
                    <label for="passwordUser">Password User:</label>
                    <input type="password" class="form-control mr-sm-2" name="passwordUser" placeholder="password" style="width: 100%;" required> 
                  </div>
                <button type="submit" class="btn btn-info mr-auto"style="width: 100%;">Submit</button>
              </form>  
              <br>
              <!-- Tabel data  -->
                <table class ="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // jika $_GET['q'] ada isinya
                        if (isset ($_GET['q'])){
                            // yang dijalankan jika ada isinya
                            $q = $_GET['q'];
                            $sql = "SELECT * FROM tb_users WHERE nama_user LIKE '%$q%'";
                        }else{
                            // jika $_GET['q'] tidak ada isinya
                            $sql = "SELECT*FROM tb_users";
                        }
                            $result = $conn->query($sql);

                        if($result->num_rows > 0){
                                // Akan dijalankan jika recordnya da
                            while($row = $result->fetch_assoc()){ ?>
                                <tr>
                                    <td><?=$row['id_barang']?></td>
                                    <td><?=$row['nama_barang']?></td>
                                    <td><?=$row['satuan_barang']?></td>
                                    <td><?=$row['harga_barang']?></td>
                                    <td>
                                   
                                        <a onclick="return-confirm('Anda yakin akan menghapus record ini ?')"class="btn btn-danger" href="prosesDeleteUser.php?id=<?=$row ['id_user']?>">
                                        Delete
                                        </a>

                                        
                                        <a class="btn btn-primary" href="" onclick="showUpdateForm ('<?=$row['id_user']?>', '<?=$row['nama_user']?>', '<?=$row['email_user']?>') "data-toggle="modal" data-target="#exampleModal">Update
                                         </a>
                                    </td>
                                </tr>
                            <?php
                                }
                            }else{
                                // Akan dijalankan jika recordnya kosong
                                echo "<tr><td colspan='3'>Recordnya masih kosong</td></tr>";
                            }
                        ?>

                    </tbody>
                </table>
                      
            </div>
        </div>
          <div class="col-12 col-md-4 col-lg-2 bg-secondary text-light">Banner</div>
          <div class="col-12 bg-info text-light">Footer</div>
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form UPDATE DATA USER</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="prosesUpdateUser.php" method="POST">
                  <div class="form-group text-left">
                    <label for="idUser">id barang:</label>
                    <input type="text" class="form-control" name="idUser" id="modal-id-user" placeholder="id name"  style="width: 100%;" readonly>
                  </div>
                  <div class="form-group text-left">
                    <label for="namaUser">Nama barang:</label>
                    <input type="text" class="form-control" name="namaUser" id="modal-nama-user" placeholder="user name"  style="width: 100%;" required>
                  </div>
                  <div class="form-group text-left">
                    <label for="emaiUser">satuan barang:</label>
                    <input type="email" class="form-control mr-sm-2" name="emailUser" id="modal-email-user" placeholder="@" style="width: 100%;" required> 
                  </div>
                <button type="submit" class="btn btn-info mr-auto"style="width: 100%;" value="Update">Update</button>
                
              </form> 
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>                       
      // fungsi untuk menampilkan nilai pada from update -->
      function showUpdateForm(id,nama,email){
        // document.getElemtById adalah cara pada js DOM untuk mengambil elemen pada hal -->
        document.getElementById('modal-id-user').value = id;
        document.getElementById('modal-nama-user').value = nama;
        document.getElementById('modal-email-user').value = email;
      
      }
    </script>
</body>
</html>