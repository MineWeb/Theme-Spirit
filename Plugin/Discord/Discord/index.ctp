<section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle">
                        <p>Accueil<span> / </span><?= $title_for_layout ?></p>
                        <h2><?= $title_for_layout ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<blockquote>
				<h1 style="font-size:18px;">
					<?= $Lang->get("INDEX_TITRE"); ?>
				</h1>
			</blockquote>
			<?php foreach ($datas as $data): ?>
				<div class="center-block">
					<div class="box">
						<center>
							<br></br>
							<iframe src="https://discordapp.com/widget?id=<?= $data['Discord']['api_discord']; ?>" width="100%" height="500" allowtransparency="true" frameborder="0"></iframe>
							<br></br>
						</center>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

