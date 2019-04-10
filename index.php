<?php

function enkripsi( $string )
{
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = '';
    $secret_iv = '';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($output);

    return $output;
}

function dekripsi( $string )
{
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = '';
    $secret_iv = '';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	
    return $output;
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=devide-width, initial-scale=0.8, user-scalabale=no">
	<link rel="stylesheet" href="kryp.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Kryptografi</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
				<div class="row logo">
					<div class="col-md-8">
						<p><h1>PROGRAM KRYPTOGRAFI</h1></p>
						<p><h1>(ENKRIPSI - DEKRIPSI)</h1></p>
					</div>
					<div class="col-md-4">
						<nav class="navbar navbar-light">
    					<img src="image/logo.jpg" class="img-fluid" alt="Responsive image">
						</nav>
					</div>
				</div><!--navbar selesai	-->
			
			
				<form method="post" action="">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<fieldset class="form-group scheduler-border">
								<legend class="form-group scheduler-border">Enkripsi</legend>

									<div class="table-responsive">
  										<table class="table">
    										<table class="table table-borderless">
    											<tbody>
    												<tr>
      												<th width="30%" scope="row">Masukkan Data Dekripsi :</th>
      												<td width="70%"><input type="text" name="enkrip" class="enkrip"></td>
    												</tr>
    												<tr>
      												<th width="30%" scope="row"> Hasil Data Enkripsi :</th>
      												<td width="70%">
		  											<textarea class="form-group">
														<?php
														if ( isset( $_POST['enkrip'] ) ) {echo enkripsi($_POST['enkrip']);}
														?>
													</textarea>
													</td>
    												</tr>
  												</tbody>
											</table>
  										</table>
									
									</div>
			  					<input type="submit" value="Enkripsi" class="submit">
								<input type="reset" value="Reset" class="text-reset" >
							</fieldset>
						</div>
					</div>
				</div>
			</form>
		
			<form method="post" action="">
				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
							<fieldset class="form-group scheduler-border">
							<legend class="scheduler-border">Dekripsi</legend>
								<div class="table-responsive">
  									<table class="table">
    								<table class="table table-borderless">
    									<tbody>
    										<tr>
      										<th width="30%" scope="row">Masukkan Data Enkripsi :</th>
      										<td width="70%"><input type="text" name="dekrip" class="dekrip"></td>
    										</tr>
    										<tr>
      										<th width="30%" scope="row"> Hasil Data Dekripsi :</th>
      										<td width="70%">
		  									<textarea class="form-group">
 											<?php
											if ( isset( $_POST['dekrip'] ) ) {echo dekripsi($_POST['dekrip']);}
											?>
											</textarea>
											</td>
    										</tr>
  										</tbody>
									</table>
  									</table>
								</div>
			  				<input type="submit" value="Dekripsi" class="submit">	
							<input type="reset" value="Reset" class="text-reset" >	
						</fieldset>
					</div>
				</div>
			</div>
		</form>
		
		<div class="form-group">
			<div class="row">
				<div class="col-md-12">
					<fieldset class="form-group scheduler-border">
					<legend class="form-group scheduler-border">DataDiri</legend>
						<table class="table table-borderless">
  							<tbody>
    							<tr>
      							<th scope="row">Nama :</th>
      							<td>Dhion angga</td>
    							</tr>
    							<tr>
      							<th scope="row">NIM :</th>
      							<td>170101007</td>
    							</tr>
    							<tr>
      							<th scope="row">Jurusan :</th>
      							<td>Teknik Informasi</td>
    							</tr>
  							</tbody>
						</table>
					</fieldset>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
