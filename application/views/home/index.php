<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('partials/head'); ?>
</head>
<body>
	<div class="container">
	<img src="<?= base_url('assets/img/logo.jpeg');?>" alt="Ini namanya logo">
	<h1 class='title'>Daftar Artikel Saya</h1>
		<?php
			if(count($artikel_data) > 0){
				foreach($artikel_data as $key => $artikel){
					?>
					<div>
						<h2><?php echo $artikel['judul_artikel']; ?></h2>
						<p><?php echo $artikel['tanggal_artikel']; ?></p>

						<p>
							<?php echo word_limiter($artikel['isi_artikel'], 25); ?>
							<a href="<?php echo site_url('home/detail/'.$artikel['id_artikel']); ?>">Read more</a>
						</p>
						<hr>
					</div>
					<?php
				}
			}else{
				?>
				<em>Tidak ada artikel.</em>
				<?php
			}
		?>
	</div>

	<?php $this->load->view('partials/foot'); ?>
</body>
</html>