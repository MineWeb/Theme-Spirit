<section class="breadcrumb breadcrumb_bg">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb_iner text-center">
<div class="breadcrumb_iner_item">
<h2><?= $title_for_layout ?></h2>
<p>Accueil<span> / </span><?= $title_for_layout ?></p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Blog Area Start -->
<section class="confer-blog-details-area section-padding-100-100"><section class="blog_area single-post-area section_padding">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1><?= before_display($news['News']['title']) ?></h1>
            <p class="lead">
                <?= $Lang->get('GLOBAL__BY') ?> <a href="#"><?= $news['News']['author'] ?></a>
            </p>

            <hr>
            <p><span class="glyphicon glyphicon-time"></span><span style="color: black;"> <?= $Lang->get('NEWS__POSTED_ON') . ' ' . $Lang->date($news['News']['created']); ?></span></p>

            <hr>
            <p class="lead"><?= $news['News']['content'] ?></p>
        <!--
            <button id="<?= $news['News']['id'] ?>" type="button" class="btn btn-primary pull-right like<?= ($news['News']['liked']) ? ' active' : '' ?>"<?= (!$Permissions->can('LIKE_NEWS')) ? ' disabled' : '' ?>><?= $news['News']['count_likes'] ?></i></button><br>
        -->
        </div>
        
    </div>
</div>
</section>
<?= $Module->loadModules('news') ?>
<script>
    function addcomment(data) {
        var d = new Date();
        var comment = '<div class="media"><a class="pull-left" href="#"><img class="media-object" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin/')) ?>/<?= $user['pseudo'] ?>/64" alt=""></a><div class="media-body"><h4 class="media-heading"><?= $user['pseudo'] ?> <small>'+d.getHours()+'h'+d.getMinutes()+'</small></h4>'+data['content']+'</div></div>';
        $('.add-comment').hide().html(comment).fadeIn(1500);
        $('#form-comment-fade-out').slideUp(1500);
    }
     $(".comment-delete").click(function() {
        comment_delete(this);
    });

    function comment_delete(e) {
        var inputs = {};
        var id = $(e).attr("id");
        inputs["id"] = id;
        inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
        $.post("<?= $this->Html->url(array('controller' => 'news', 'action' => 'ajax_comment_delete')) ?>", inputs, function(data) {
          if(data == 'true') {
            $('#comment-'+id).slideUp(500);
          } else {
            console.log(data);
          }
        });
    }
</script>
