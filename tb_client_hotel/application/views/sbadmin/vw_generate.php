<!-- <?php echo($apikey) ?> -->
<html>
	<head>
		<title>Generate API Key</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container pt-5">
		<div class="card">
			<div class="card-header">
				Halaman Generate API Key
			</div>
			<div class="card-body">
			<center><h1> <?php echo $this->session->userdata('username'); ?></h1></center>

				<hr/>
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
					echo '</div>';
				}
				?>
				<form method="post" action="<?= base_url('auth/generatekey')?>" class="">
					<div class="form-group mb-3">
						<label class="mb-2" for="key">Generate API Key</label>
						<input type="text" class="form-control" name="key" id="key" placeholder="menampilkan Api Key">
					</div>
					<button type="button" id="Generate" class="btn btn-success mb-3">Generate</button>
					<div class="">
						<button type="submit" class="btn btn-primary btn-md pl-4 pr-4">Login</button>
					</div>
				</form>
			
			</div>
		</div>
	</div>
	</body>
</html>

<script>
	let Generate = document.getElementById('Generate');
	Generate.addEventListener('click', () => {
		var key = makeid(7);
		document.querySelector('input[name="key"]').value = key;
	})

	function makeid(length) {
		var result           = '';
		var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		var charactersLength = characters.length;
		for ( var i = 0; i < length; i++ ) {
			result += characters.charAt(Math.floor(Math.random() * charactersLength));
		}
		return result;
	}

</script>
