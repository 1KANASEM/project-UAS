
<!--home-->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home')?>">Home</a></li>
								<li>Gallery Fasilitas</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

<div class="contact">
    <div class="contact_info_container">
        <div class="container"><br><br><hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Gallery Fasilitas</h2><hr><br>
                </div>
                <hr>

                <?php foreach ($gallery_fasilitas as $key => $value) { ?>
                    <!-- Team Item -->
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img src="<?= base_url('sampul_fasilitas/' .$value->sampul) ?> "style="width: 100%; height: 100%; margin: auto;"></div>
                            <div class="team_body">
                                <div class="team_title"><a href="<?= base_url('home/fasilitas/' .$value->id_gallery) ?>"><?= $value->nama ?></a></div>
                                <div class="team_title">Jumlah : <?= $value->jml?></div>
                                <div class="social_list">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <hr>
        </div>
    </div>
</div>

<div class="home">
</div>