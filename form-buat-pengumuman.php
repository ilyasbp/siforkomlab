<?php
	include 'header.php';
	include 'navbar.php';
 ?>

	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Buat Pengumuman</h1>
                </div>
            </div>
            <hr>
            <form>
                    Judul:
                </h3>
                <input type="text" name="judul">
                <br>
                <br>
                <br>
								<h3>
                    Isi pengumuman:
                </h3>
                <input type="textarea" name="isi" style="height: 12rem; overflow-y: scroll; width: 100%">
                <br>
                <br>
                <br>
								<h3>
                    Gambar:
                </h3>
                <input type="file" name="gbr">
                <br>
                <br>
                <br>

                <a class="btn btn-default" href="">Submit</a>
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
	include('footer.php');
 ?>
