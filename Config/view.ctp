<?php
$form_input = array('title' => $Lang->get('THEME__UPLOAD_LOGO'));

if(isset($config['logo']) && $config['logo']) {
  $logo = explode('/', $config['logo']);
  //$form_input['img'] = '/img/uploads/theme_logo.png';
  $form_input['img'] =  $config['logo'];
  $form_input['filename'] = 'theme_logo.png';
}
?>
<section class="content">
    <div class="col-md-4">
        <div class="callout callout-success" style="border: none;"><h4>Suggestions & Support</h4>Une suggestion pour le thème ? Un soucis avec le thème ? Je suis disponible sur discord ! <a class="krozix" href="https://discord.gg/XDTXjjX" class="color hcolor footer-a">Kr0ZiX#2228</a></div>
    </div>
    <div class="col-md-4">
        <div class="callout callout-danger" style="border: none;"><h4>Copyright : Mineweb & Spirit</h4>Il est interdit de modifier les crédits du footer.<br>Votre licence sera suspendue si vous le faites.</div>
    </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('THEME__CUSTOMIZATION') ?></h3><span class="pull-right">Kr0ZiX</span>
        </div>
        <div class="box-body">
          <div class="tabbable">
            <ul class="nav nav-tabs">
             <li class="active"><a href="#tab1" data-toggle="tab">Option General</a></li>
             <li><a href="#tab2" data-toggle="tab">Maintenance</a></li>
             <li><a href="#tab3" data-toggle="tab">Accueil</a></li>
             <li><a href="#tab4" data-toggle="tab">Footer</a></li>
             </ul>
             <form method="post" enctype="multipart/form-data" data-ajax="false">
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <br>
               <div class="form-group">
                 <label>General</label>

                 <table class="table">
                    <tr>
                     <td><?= $this->element('form.input.upload.img', $form_input) ?></td>
                   </tr>
                   <tr>
                     <td>Couleur du thème</td>
                     <td><i>Par default : #000</i></td>
                     <td><input type="text" class="form-control" name="theme_color" value="<?= $theme_config['theme_color'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Couleur du filtre sur le background (Mettre un espace pour désactiver le filtre)</td>
                     <td><i>Par default : #0042f7</i></td>
                     <td><input type="text" class="form-control" name="color_bg" value="<?= $theme_config['color_bg'] ?>"></td>
                   </tr>
                   <tr>
                     <td><?= $Lang->get('THEME__FAVICON_URL') ?></td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="favicon_url" value="<?= $config['favicon_url'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Titre sur le background</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="title_slider" value="<?= $theme_config['title_slider'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Texte sur le background</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="text_slider" value="<?= $theme_config['text_slider'] ?>"></td>
                   </tr>
                   <tr>
                     <td>URL Image background</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="img_bg" value="<?= $theme_config['img_bg'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Type de module "Nous rejoindre"</td>
                     <td><i>Par default : #IP</i></td>
                     <td>
                       <select name="mod1_type" class="form-control">
                        <option value="IP" <?= ($theme_config['mod1_type'] == "IP") ? ' selected' : '' ?>>Adresse IP (Afficher l'adresse IP avec un bouton pour la copier)</option>
                        <option value="Launcher" <?= ($theme_config['mod1_type'] == "Launcher") ? ' selected' : '' ?>>Launcher (Afficher un bouton permettant de télécharger le launcher)</option>
                        </select>
                     </td>
                   </tr>
                   <tr>
                     <td>Adresse IP ou lien de téléchargement pour le module "Nous rejoindre"</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="value_mod1" value="<?= $config['value_mod1'] ?>"></td>
                   </tr>
                 </table>
               </div>
            </div>

            <!-- Section 2 -->
            <div class="tab-pane" id="tab2">
              <br>

              <div class="form-group">
                <label>Maintenance (Crée par Tronai)</label>

                <table class="table">

                  <tr>
                    <td>Compteur</td>
                    <td>
                      <select name="compteur" class="form-control">
                         <option value="true"<?= ($config['compteur'] == "true") ? ' selected' : '' ?>>Oui</option>
                         <option value="false"<?= ($config['compteur'] == "false") ? ' selected' : '' ?>>Non</option>
                       </select>
                    </td>
                  </tr>


                  <tr>
                    <td>Mois</td>
                    <td>
                      <select name="mois" class="form-control">
                         <option value="January"<?= ($config['mois'] == "January") ? ' selected' : '' ?>>January</option>
                         <option value="February"<?= ($config['mois'] == "February") ? ' selected' : '' ?>>February</option>
                         <option value="March"<?= ($config['mois'] == "March") ? ' selected' : '' ?>>March</option>
                         <option value="April"<?= ($config['mois'] == "April") ? ' selected' : '' ?>>April</option>
                         <option value="May"<?= ($config['mois'] == "May") ? ' selected' : '' ?>>May</option>
                         <option value="June"<?= ($config['mois'] == "June") ? ' selected' : '' ?>>June</option>
                         <option value="July"<?= ($config['mois'] == "July") ? ' selected' : '' ?>>July</option>
                         <option value="August"<?= ($config['mois'] == "August") ? ' selected' : '' ?>>August</option>
                         <option value="September"<?= ($config['mois'] == "September") ? ' selected' : '' ?>>September</option>
                         <option value="October"<?= ($config['mois'] == "October") ? ' selected' : '' ?>>October</option>
                         <option value="November"<?= ($config['mois'] == "November") ? ' selected' : '' ?>>November</option>
                         <option value="December"<?= ($config['mois'] == "December") ? ' selected' : '' ?>>December</option>
                       </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Jour</td>
                    <td><input type="text" class="form-control" name="day" value="<?= $theme_config['day'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Année</td>
                    <td><input type="text" class="form-control" name="years" value="<?= $theme_config['years'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Heure</td>
                    <td><input type="text" class="form-control" name="hour" value="<?= $theme_config['hour'] ?>" placeholder="15:00:00"></td>
                  </tr>


                </table>


              </div>
            </div>


            <!-- Section 3 -->
            <div class="tab-pane" id="tab3">
              <br>

              <div class="form-group">
                <label>Page d'accueil</label>

                <table class="table">
                <tr>
                     <td>Titre de la présentation</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_accueil" value="<?= $theme_config['home_accueil'] ?>"></td>
                     </td>
                   </tr>
                   <tr>
                     <td>Message de la présentation</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_accueil_text" value="<?= $theme_config['home_accueil_text'] ?>"></td>
                     </td>
                   </tr>
                   <tr>
                     <td>Texte bouton de la présentation</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_accueil_button_text" value="<?= $theme_config['home_accueil_button_text'] ?>"></td>
                     </td>
                   </tr>
                   <tr>
                     <td>Lien bouton de la présentation</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_accueil_button_lien" value="<?= $theme_config['home_accueil_button_lien'] ?>"></td>
                     </td>
                   </tr>
                   <tr>
                     <td>URL Image de la présentation</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_accueil_img" value="<?= $theme_config['home_accueil_img'] ?>"></td>
                     </td>
                   </tr>
                   <tr>
                     <td>URL Image derrière les statistiques</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_stats_img" value="<?= $theme_config['home_stats_img'] ?>"></td>
                     </td>
                   </tr>
                </table>
              </div>
            </div>


            <!-- Section 4 -->
            <div class="tab-pane" id="tab4">
              <br>

              <div class="form-group">
                <label>Footer</label>

                <table class="table">
                  <tr>
                     <td>URL Image Footer</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="imgfooter" value="<?= $theme_config['imgfooter'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Titre bloc 1</td>
                     <td><i>Par default : #Informations</i></td>
                     <td><input type="text" class="form-control" name="bloc1" value="<?= $theme_config['bloc1'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Texte bloc 1</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="text1" value="<?= $theme_config['text1'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Titre bloc 2</td>
                     <td><i>Par default : #Liens Rapide</i></td>
                     <td><input type="text" class="form-control" name="bloc2" value="<?= $theme_config['bloc2'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Nom lien 1</td>
                     <td><i>Par default : #Voter</i></td>
                     <td><input type="text" class="form-control" name="textl1" value="<?= $theme_config['textl1'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Lien 1</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="link1" value="<?= $theme_config['link1'] ?>"></td>
                   </tr>
                   <td>Nom lien 2</td>
                     <td><i>Par default : #Boutique</i></td>
                     <td><input type="text" class="form-control" name="textl2" value="<?= $theme_config['textl2'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Lien 2</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="link2" value="<?= $theme_config['link2'] ?>"></td>
                   </tr>
                   <td>Nom lien 3</td>
                     <td><i>Par default : #Forum</i></td>
                     <td><input type="text" class="form-control" name="textl3" value="<?= $theme_config['textl3'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Lien 3</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="link3" value="<?= $theme_config['link3'] ?>"></td>
                   </tr>
                   <td>Nom lien 4</td>
                     <td><i>Par default : #Twitter</i></td>
                     <td><input type="text" class="form-control" name="textl4" value="<?= $theme_config['textl4'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Lien 4</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="link4" value="<?= $theme_config['link4'] ?>"></td>
                   </tr>
                </table>
              </div>
            </div>


                            <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>" type="button" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>

            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
