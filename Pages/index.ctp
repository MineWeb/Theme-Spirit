
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
<section class="blog_area single-post-area section_padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 posts-list">
				<?= $page['content'] ?>
			</div>
		</div>
	</div>
</section>

<style>
/*Coter new page*/
.posts-list {
    background-color: rgb(207, 207, 207));
    background-color: rgba(207, 207, 207, 0.5);
    }
</style>


