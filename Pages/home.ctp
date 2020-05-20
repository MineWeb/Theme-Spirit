    <!-- banner part start-->
    <section class="banner_part">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 offset-lg-1">
            <div class="banner_text">
              <div class="banner_text_iner">
                <h1><?= $theme_config['title_slider'] ?></h1>
                <h5><?= $theme_config['text_slider'] ?></h5>
                <?php if($theme_config['mod1'] == "Non") { ?>
                <?php } else { ?>
                    <?php if($theme_config['mod1_type'] == "IP") { ?>
                        <div style="margin: 30px 0px;" class="">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div style="padding: 5px"></div>
                                    <button onclick="copyStringToClipboard('<?= $theme_config['value_mod1']; ?>');" class="btn_1">Copier l'IP</button>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div style="margin: 30px 0px;" class="">
                            <div class="panel-body">
                                <div class="form-group">
                                    <a href="<?= $theme_config['value_mod1']; ?>"><button id="copy" style="margin-bottom: -10px;" class="btn_1">Télécharger le launcher</button></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- banner part start-->

    <!-- about part start-->
    <section class="about_part section_padding">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6">
            <div class="about_part_text">
              <h2><?= $theme_config['home_accueil'] ?></h2>
              <p>
              <?= $theme_config['home_accueil_text'] ?>
              </p>
              <a href="<?= $theme_config['home_accueil_button_lien'] ?>" class="btn_1"><?= $theme_config['home_accueil_button_text'] ?></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_part_img">
              <img src="<?= $theme_config['home_accueil_img'] ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about part end-->

    <!-- our_service start-->
    <section class="our_service">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Nouveautés</p>
                        <h2>Posts récents</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if(!empty($search_news)) {
                $i=1;
                foreach ($search_news as $k => $v) {?>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-body">
							<span>Par <?= $v['News']['author'] ?>, le <?= $v['News']['created'] ?></span>
                            <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>">
                                    <h5 class="card-title"><?= cut($v['News']['title'], 20) ?></h5>
                                </a>
                                <p><?= $this->Text->truncate($v['News']['content'], 110, array('ellipsis' => '...', 'html' => true)) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($i++ == 3) break;}} else { ?>
                    <div class="col-12 text-center"><p style="color:#b70000">Aucun article n'a encore été posté pour le moment !</p></div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- our_service part end-->
    <br>
    <!--::cta_part start::-->
    <div class="cta_part">
      <div class="container">
        <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="single_member_counter">
                        <span class="counter"><?= $server_infos['GET_PLAYER_COUNT'] ?></span>
                        <h4>CONNECTÉS</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="single_member_counter">
                        <span class="counter"><?= $users_count ?></span>
                        <h4>MEMBRES INSCRITS</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="single_member_counter">
                        <span class="counter"><?= $visits_count ?></span>
                        <h4>VISITES UNIQUES</h4>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <!--::cta_part end::-->

	<script type="text/javascript">
    
    </script>
    <SCRIPT>
        function copyStringToClipboard (str) {
       // Create new element
       var el = document.createElement('textarea');
       // Set value (string to be copied)
       el.value = str;
       // Set non-editable to avoid focus and move outside of view
       el.setAttribute('readonly', '');
       el.style = {position: 'absolute', left: '-9999px'};
       document.body.appendChild(el);
       // Select text inside element
       el.select();
       // Copy text to clipboard
       document.execCommand('copy');
       // Remove temporary element
       document.body.removeChild(el);
    }
    </SCRIPT>
