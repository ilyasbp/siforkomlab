<?php
//ikuti penomorannya buat instruksi
//1. cari <form>
	include 'header.php';
	include 'navbar.php';
 ?>
	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Saran untuk Laboratorium</h1>
                </div>
            </div>
            <hr>

						<!--2. isi methodnya ='post' action insert-data.php, perhatikan variabel "name = ", nantinya itu yang bakal di passing -->
            <form method="post" action="insert-data.php">
								<h3>
									Nama User:
								</h3>
								<input type="text" name="nama_user">
								<br>
								<br>
								<br>
								
								<h3>
                    Untuk Lab :
                </h3>
                <label for="lab">Pilih salah satu:</label>
                  <select class="form-control" name="lab">
                    <option value="1">LP</option>
                    <option value="2">LP2</option>
                    <option value="3">KCV</option>
                    <option value="4">AJK</option>
                  </select>
                <br>

                <h3>
                    Isi Saran :
                </h3>
                <div class="form-group" >
                    <label for="saran"></label>
                    <textarea class="form-control" rows="5" name="saran" style="height: 50%"></textarea>
                </div>
                <br>
                <br>
                <br>
								<!--3. ubah submitnya jadi kaya yang dibawah trus name isi bebas, yang penting ngga sama seperti halaman lain-->
                <input class="btn btn-default" type="Submit" name="srn"></input>
								<!-- 4. submit yang masih pake <a href dll> hapus aja -->
								<!-- 5. ganti ngerjakan halaman insert-data.php -->
            </form>

        </div>
    </main>

	<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>

<?php
	include 'footer.php';
 ?>
