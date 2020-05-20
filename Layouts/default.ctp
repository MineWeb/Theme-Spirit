<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta name="description" content="Serveur Minecraft">
    <meta name="author" content="Kr0ZiX, MineWeb">
    <title><?= $website_name ?> | <?= $title_for_layout ?></title>
    <link rel="icon" type="image/png" href="<?= $config['favicon_url'] ?>"/>

    <?= $this->Html->css('bootstrap.css') ?>

    <?= $this->Html->css('main.css') ?>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>

    <!-- Bootstrap CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <!-- animate CSS -->
    <?= $this->Html->css('animate.css') ?>
    <!-- owl carousel CSS -->
    <?= $this->Html->css('owl.carousel.min.css') ?>
    <!-- themify CSS -->
    <?= $this->Html->css('themify-icons.css') ?>
    <!-- flaticon CSS -->
    <?= $this->Html->css('flaticon.css') ?>
    <!-- swiper CSS -->
    <?= $this->Html->css('slick.css') ?>
    <!-- style CSS -->
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('jquery-1.12.1.min.js') ?>

</head>
<body>
<div id="wrapper">
    <?= $this->element('css') ?>
    <?= $this->element('navbar') ?>
    <?= $this->element('banner') ?>
    <?= $this->fetch('content'); ?>
    <?= $this->element('footer'); ?>
    <div id="backtotop"><a href="#"></a></div>

    <!-- Modal (connexion ...) -->
    <div class="modal modal-medium custom-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
		<h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__LOGIN') ?></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
      </div>
      <div class="modal-body">
        <form method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_login')) ?>" data-redirect-url="?">
          <div class="form-group">
			  <h5><?= $Lang->get('USER__USERNAME') ?></h5>
              <input type="text" class="form-control" name="pseudo" id="inputEmail3" placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>">
          </div>

          <div class="form-group">
		      <h5><?= $Lang->get('USER__PASSWORD') ?></h5>
              <input type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
          </div>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<div class="checkbox">
						<label style="line-height:15.4px;display:block;">
							<input type="checkbox" name="remember_me">
							<?= $Lang->get('USER__REMEMBER_ME') ?>
						</label>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="text-center"><p style="line-height: 1;"><a data-dismiss="modal" href="#" data-toggle="modal"
												data-target="#lostpasswd">Mot de passe oublié ?</a></p></div>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block"><?= $Lang->get('USER__LOGIN') ?></button>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="modal modal-medium custom-modal" id="lostpasswd" tabindex="-1" role="dialog" aria-labelledby="lostpasswdLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
		<h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__PASSWORD_FORGOT_LABEL') ?></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
      </div>
      <div class="modal-body">
        <form method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_lostpasswd')) ?>">
          <div class="form-group">
			  <h5><?= $Lang->get('USER__EMAIL') ?> </h5>
              <input type="text" class="form-control" name="email" placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block"><?= $Lang->get('USER__PASSWORD_FORGOT_SEND_MAIL') ?></button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php if(!empty($resetpsswd)) { ?>
  <div class="modal modal-medium custom-modal" id="lostpasswd2" tabindex="-1" role="dialog" aria-labelledby="lostpasswd2Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
		  <h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__PASSWORD_FORGOT_LABEL') ?></h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
        </div>
        <div class="modal-body">
		<form method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_resetpasswd')) ?>" data-redirect-url="?">
            <input type="hidden" name="key" value="<?= $resetpsswd['key'] ?>">
            <input type="hidden" name="email" value="<?= $resetpsswd['email'] ?>">
            <div class="form-group">
				<h5><?= $Lang->get('USER__PASSWORD') ?></h5>
                <input type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
            </div>
            <div class="form-group">
				<h5><?= $Lang->get('USER__PASSWORD_CONFIRM') ?></h5>
                <input type="password" class="form-control" name="password2" placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM_LABEL') ?>">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-block"><?= $Lang->get('GLOBAL__SAVE') ?></button>
		  </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<div class="modal modal-medium custom-modal" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__REGISTER') ?></h4>
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
      </div>
      <div class="modal-body">
        <form method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_register')) ?>" data-redirect-url="?">
          <div class="form-group">
		      <h5><?= $Lang->get('USER__USERNAME') ?></h5>
              <input type="text" class="form-control" name="pseudo" placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>">
          </div>
          <div class="form-group">
			  <h5><?= $Lang->get('USER__PASSWORD') ?></h5>
              <input type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
          </div>
          <div class="form-group">
			  <h5><?= $Lang->get('USER__PASSWORD_CONFIRM') ?></h5>
              <input type="password" class="form-control" name="password_confirmation" placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM_LABEL') ?>">
          </div>
          <div class="form-group">
		      <h5><?= $Lang->get('USER__EMAIL') ?> </h5>
              <input type="email" class="form-control" name="email" placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>">
          </div>
          
          <?php if($reCaptcha['type'] == "google") { ?>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="form-group">
				<h5><?= $Lang->get('FORM__CAPTCHA') ?></h5>
                <div class="g-recaptcha" data-sitekey="<?= $reCaptcha['siteKey'] ?>"></div>
            </div>
          <?php } else { ?>
          
            <div class="form-group">
				<h5><?= $Lang->get('FORM__CAPTCHA') ?></h5>
                <?php
                  echo $this->Html->image(array('controller' => 'user', 'action' => 'get_captcha', 'plugin' => false, 'admin' => false), array('plugin' => false, 'admin' => false, 'id' => 'captcha_image'));
				?>
				  <a href="javascript:void(0);" id="reload" style="margin-left: 20px;"><?=$Lang->get('FORM__RELOAD_CAPTCHA')?></a>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="captcha" id="inputPassword3" placeholder="<?= $Lang->get('FORM__CAPTCHA_LABEL') ?>">
            </div>
          <?php } ?>
		  <?php if (!empty($condition)) { ?>
		  <div class="form-group">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="condition">
					<?=$Lang->get('USER__CONDITION_1')?> <a href="<?= $condition ?>"> <?= $Lang->get('USER__CONDITION_2')?></a>
				</label>
			</div>
		  </div>
		 <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block"><?= $Lang->get('USER__REGISTER') ?></button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    <?php if(!empty($resetpsswd)) { ?>
      $('#lostpasswd2').modal('show');
    <?php } ?>
  });
</script>

<?php if(isset($isConnected) && $isConnected) { ?>
  <div class="modal modal-medium custom-modal" id="notifications_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?= $Lang->get('NOTIFICATIONS__LIST') ?></h4>
		  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
        </div>
        <div class="modal-body" style="padding:0;">

          <div class="notifications-list"></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-block" onclick="notification.markAllAsSeen()" data-dismiss="modal"><?= $Lang->get('NOTIFICATIONS__MARK_ALL_AS_SEEN') ?></button>
          <button type="submit" class="btn btn-danger btn-block" onclick="notification.clearAll()" data-dismiss="modal"><?= $Lang->get('NOTIFICATIONS__CLEAR_ALL') ?></button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

</div>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('slick.min.js') ?>
<?= $this->Html->script('waypoints.min.js') ?>
<?= $this->Html->script('jquery-ui.min.js') ?>
<?= $this->Html->script('custom.js') ?>

<?= $this->Html->script('app.js') ?>
<?= $this->Html->script('form.js') ?>
<?= $this->Html->script('notification.js') ?>

    <!-- jquery plugins here-->
    <!-- jquery -->
    <!-- popper js -->
    <?= $this->Html->script('popper.min.js') ?>
    <!-- bootstrap js -->
    <?= $this->Html->script('bootstrap.min.js') ?>
    <!-- easing js -->
    <?= $this->Html->script('jquery.magnific-popup.js') ?>
    <!-- swiper js -->
    <?= $this->Html->script('swiper.min.js') ?>
    <!-- swiper js -->
    <?= $this->Html->script('masonry.pkgd.js') ?>
    <!-- particles js -->
    <?= $this->Html->script('owl.carousel.min.js') ?>
    <?= $this->Html->script('jquery.nice-select.min.js') ?>
    <!-- swiper js -->
    <?= $this->Html->script('slick.min.js') ?>
    <?= $this->Html->script('jquery.counterup.min.js') ?>
    <?= $this->Html->script('waypoints.min.js') ?>
    <!-- custom js -->
    <?= $this->Html->script('custom.js') ?>

<script>
    <?php if($isConnected) { ?>
    var notification = new $.Notification({
        'url': {
            'get': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'getAll')) ?>',
            'clear': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clear', 'NOTIF_ID')) ?>',
            'clearAll': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clearAll')) ?>',
            'markAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAsSeen', 'NOTIF_ID')) ?>',
            'markAllAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAllAsSeen')) ?>'
        },
        'messages': {
            'markAsSeen': '<?= $Lang->get('NOTIFICATION__MARK_AS_SEEN') ?>',
            'notifiedBy': '<?= $Lang->get('NOTIFICATION__NOTIFIED_BY') ?>'
        }
    });
    <?php } ?>
    // Config FORM/APP.JS

    var LIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'like')) ?>";
    var DISLIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'dislike')) ?>";

    var LOADING_MSG = "<?= $Lang->get('GLOBAL__LOADING') ?>";
    var ERROR_MSG = "<?= $Lang->get('GLOBAL__ERROR') ?>";
    var INTERNAL_ERROR_MSG = "<?= $Lang->get('ERROR__INTERNAL_ERROR') ?>";
    var FORBIDDEN_ERROR_MSG = "<?= $Lang->get('ERROR__FORBIDDEN') ?>"
    var SUCCESS_MSG = "<?= $Lang->get('GLOBAL__SUCCESS') ?>";

    var CSRF_TOKEN = "<?= $csrfToken ?>";
</script>
<?php if (isset($google_analytics) && !empty($google_analytics)) { ?>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', '<?= $google_analytics ?>', 'auto');
        ga('send', 'pageview');
    </script>
<?php } ?>
<?= (isset($configuration_end_code)) ? $configuration_end_code : '' ?>
</body>
</html>