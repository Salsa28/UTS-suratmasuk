<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">

        <style type="text/css">
	body {background: #000000 url('image/bg.jpg') no-repeat center top;
    font-family: sans-serif;
	
    }
	</style>

        <title>Aplikasi Surat</title>
    </head>
   
    <body >
  
        <div class ="container">
        <h1 class = "text-center" >Aplikasi Surat</h1>
        <hr />
        <div class="card mt-4">
        <div class="card-header bg-warning text-white">
        <h5>Berikut Daftar Surat Masuk</h5>
        </div>

        <div class="card-body" >
        <table class = "table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th class = "text-center">No Surat</th>
                    <th class = "text-center">Tanggal Surat</th>
                    <th class = "text-center">Pengirim</th>
                    <th class = "text-center">Penerima</th>
                    <th class = "text-center">Judul Surat</th>
                    <th class = "text-center">Isi Surat</th>
                    <th class = "text-center">Opsi</th>
                </tr>
            </thead>
            <?php 
		    include 'koneksi.php';
		    $no = 1;
		    $data = mysqli_query($koneksi,"select * from surat");
		    while($d = mysqli_fetch_array($data)){
		    	?>
		    	<tr>
		    		<td><?php echo $no++; ?></td>
		    		<td><?php echo $d['tanggal']; ?></td>
		    		<td><?php echo $d['pengirim']; ?></td>
		    		<td><?php echo $d['penerima']; ?></td>
                    <td><?php echo $d['judulsurat']; ?></td>
		    		<td><?php echo $d['isisurat']; ?></td>
		    		<td>
                        <a href="edit.php?id=<?php echo $d ["id"]; ?>" class= "btn-warning">EDIT</a>
		    			<a href="hapus.php?id=<?php echo $d['id']; ?>" class= "btn-danger">HAPUS</a>
		    		</td>
			    </tr>
			<?php 
		}
		?>
        </table>
        <p>Buat Surat Baru?</p>
        <a href="tambah.php"><button id="tambah" class ="btn btn-warning" name="bsimpan">Buat Surat</button></a>
    <br>
    <br>
    <hr />
    <h6 class ="text-center">&copy Salsa Dwi Nur Hidayah-20090118</h6>
    <hr />
    </body>
</html>