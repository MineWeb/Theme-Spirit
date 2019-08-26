<section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle">
                      <center>
                        <h2>Maintenance</h2>
                      </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<center>
<div class="container">
    <div class="row">
      <div class="maintenance">
      <div class="panel panel-default">
      <div class="panel-body">
      <img class="logo" src="<?php if(empty($theme_config['logo'])) { echo '<img src="'. $theme_config['logo'] .'">'; } else { echo $theme_config['logo']; } ?>" />
      <h1 class="title"><?= $website_name ?> est actuellement en maintenance<span class="points">...</span></h1>
      <div class="text">
        <?= $msg ?>
      </div>
      </div>
      <?php if($theme_config['compteur'] == "true"){ ?>
  <script>
  function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
          'total': t,
          'days': days,
          'hours': ("0" + hours).slice(-2),
          'minutes': ("0" + minutes).slice(-2),
          'seconds': ("0" + seconds).slice(-2),
          'odd': seconds % 2 === 0
      };
  }
  window.setInterval(function() {
      var time = getTimeRemaining(<?= '"'.$theme_config['mois'].' '.$theme_config['day'].' '.$theme_config['years'].' '.$theme_config['hour'].' GMT+0200"' ?>);
      var string = "";
      if (time.days > 0) {
          string += time.days + " <small>jour" + (time.days > 1 ? "s" : "") + "</small> ";
      }
      if (time.days > 0 || time.hours > 0) {
          string += time.hours + " <small>heure" + (time.hours > 1 ? "s" : "") + "</small> ";
      }
      if (time.days > 0 || time.hours > 0 || time.minutes > 0) {
          string += time.minutes + " <small>minute" + (time.minutes > 1 ? "s" : "") + "</small> ";
      }
      if (time.days > 0 || time.hours > 0 || time.minutes > 0 || time.seconds > 0) {
          string += time.seconds + " <small>seconde" + (time.seconds > 1 ? "s" : "") + "</small>";
      } else {
          string = '<a href="/">Actualiser la page</a>';
      }
      document.getElementsByClassName('countdown')[0].innerHTML = "" + string + "";
  }, 1000);</script>


  <h2><div class="countdown"></div></h2>

  <?php } ?>

  <style media="screen">
    footer{
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>
  </div>
    </div>
    </div>
</div>