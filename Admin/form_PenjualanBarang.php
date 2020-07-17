<?php require_once "koneksi.php";
?>
   


    <div class="jumbotron text-center">
         <h1>Form Penjualan Barang</h1>
    </div>
        <form action="Proses1form.php" method="post">
            NamaBarang: <select name="NamaBarang" class="custom-select" style="width:300px">
                    <option value="Minyak">Minyak Sayur</option>
                    <option value="Gula">Gula pasir</option>
                    <option value="Beras">Beras</option>
                    <option value="Tepung">Tepung Terigu</option>
                    <option value="Mentega">Mentega</option>
            </select><hr>
            HargaBarang : <input type="number" name="HargaBarang" min="0" style="width:300px" ><hr>
            JumlahBarang: <input type="number" name="JumlahBarang" min="0"  style="width:300px"><hr>
                          <input type="submit" value="Hitung">
        </form>    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
