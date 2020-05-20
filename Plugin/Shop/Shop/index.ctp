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
    </section><br><br><br>
<div class="container" style='margin-bottom: 50px'>
  <div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h3 class="panel-title" style="color: #c4c4c4;"><b>Catégories</b></h3></div>
            <div class="panel-body">
                <?php
                $i = 0;
                foreach ($search_categories as $k => $v) {
                $i++;
                ?>
                    <a class="btn btn-primary btn-block" href="<?= $this->Html->url(array('controller' => 'c/'.$v['Category']['id'], 'plugin' => 'shop')) ?>" class="list-group-item<?= (isset($category) AND $v['Category']['id'] == $category OR !isset($category) AND $i == 1) ? ' active' : ''; ?>"><?= before_display($v['Category']['name']) ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
              <hr style="background-color: white">
          <?php if (!empty($vagoal)) {?>
            <h4><?= $Lang->get('SHOP__CONFIG_GOAL_TITLE') ?></h4>
            <br>
            <div class="progress">
              <div class="progress-bar-info text-center" role="progressbar" style="width:<?= $vawidth ?>%">
                <b><?= $vawidth ?>%</b>
              </div>
            </div>
            <hr>
          <?php } ?>
            </div>
            <div class="panel-body">
                <?php if($isConnected) { ?>
                    <button style="opacity: 1;color: #c4c4c4;" class="btn btn-block disabled">Vous avez <?= ($isConnected) ? $money : $Lang->get('SHOP__TITLE'); ?></button>
                    <?php if($Permissions->can('CREDIT_ACCOUNT')) { ?>
                        <a href="#" data-toggle="modal" data-target="#addmoney" class="btn btn-primary btn-block"><?= $Lang->get('SHOP__ADD_MONEY') ?></a>
                    <?php } ?>
                    <a href="#" data-toggle="modal" data-target="#cart-modal" class="btn btn-primary btn-block"><?= $Lang->get('SHOP__BUY_CART') ?></a>
                <?php } else { ?>
                    <button style="opacity: 1;color: #c4c4c4;" class="btn btn-block disabled">Vous êtes déconnecté.</button>
                <?php } ?>
            </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <?= $vouchers->get_vouchers() // Les promotions en cours ?>
        </div>

        <div class="row">
          <?php
          $col = 4;
          $i = 0;
          foreach ($search_items as $k => $v) {
            if(!isset($category) AND $v['Item']['category'] == $search_first_category OR isset($category) AND $v['Item']['category'] == $category) {
              $i++;
              $newRow = ( ( $i % ( (12 / $col) ) ) == 0);
          ?>
                <div class="col-sm-<?= $col ?> col-lg-<?= $col ?> col-md-<?= $col ?>">
                    <div class="thumbnail grow">
                        <?php if(isset($v['Item']['img_url'])) { ?><img src="<?= $v['Item']['img_url'] ?>" alt=""><?php } ?>
                        <div class="caption" style="height:auto;">
                            <h4 style="color: #000; text-align: center;"><?= before_display($v['Item']['name']) ?></h4>
                            <?php if($isConnected AND $Permissions->can('CAN_BUY')) { ?><button class="btn btn-primary btn-block pull-right display-item" data-item-id="<?= $v['Item']['id'] ?>"><?= $Lang->get('SHOP__BUY') ?> - <?= $v['Item']['price'] ?><?php if($v['Item']['price'] == 1) { echo  ' '.$singular_money; } else { echo  ' '.$plural_money; } ?></button> <?php } ?>
                        </div>
                    </div>
                </div>

              <?= ($newRow) ? '</div>' : '' ?>
              <?= ($newRow) ? '<div class="row">' : '' ?>
            <?php } ?>
          <?php } ?>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  var LOADING_MSG = '<?= $Lang->get('GLOBAL__LOADING') ?>';
  var ADDED_TO_CART_MSG = '<?= $Lang->get('SHOP__BUY_ADDED_TO_CART') ?> <i class="fa fa-check"></i>';
  var CART_EMPTY_MSG = '<?= $Lang->get('SHOP__BUY_CART_EMPTY') ?>';
  var ITEM_GET_URL = '<?= $this->Html->url(array('controller' => 'shop/ajax_get', 'plugin' => 'shop')); ?>/';
  var VOUCHER_CHECK_URL = '<?= $this->Html->url(array('action' => 'checkVoucher')) ?>/';
  var BUY_URL = '<?= $this->Html->url(array('action' => 'buy_ajax')) ?>';

  var CART_ITEM_NAME_MSG = '<?= $Lang->get('SHOP__ITEM_NAME') ?>';
  var CART_ITEM_PRICE_MSG = '<?= $Lang->get('SHOP__ITEM_PRICE') ?>';
  var CART_ITEM_QUANTITY_MSG = '<?= $Lang->get('SHOP__ITEM_QUANTITY') ?>';
  var CART_ACTIONS_MSG = '<?= $Lang->get('GLOBAL__ACTIONS') ?>';

  var CSRF_TOKEN = '<?= $csrfToken ?>';
</script>
<?= $this->Html->script('Shop.jquery.cookie') ?>
<?= $this->Html->script('Shop.shop') ?>
<?= $this->Html->script('Shop.jquery.bootstrap-touchspin.js') ?>


<div class="modal" id="buy-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><?= $Lang->get('SHOP__BUY_CONFIRM') ?></h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<div class="modal" id="cart-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><?= $Lang->get('SHOP__BUY_CART') ?></h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <div class="pull-left">
          <input name="cart-voucher" type="text" class="form-control" autocomplete="off" id="cart-voucher" style="width:245px;" placeholder="<?= $Lang->get('SHOP__BUY_VOUCHER_ASK') ?>">
        </div>
        <button class="btn disabled"><?= $Lang->get('SHOP__ITEM_TOTAL') ?> : <span id="cart-total-price">0</span>  <?= $Configuration->getMoneyName() ?></button>
        <button type="button" class="btn btn-primary" id="buy-cart"><?= $Lang->get('SHOP__BUY') ?></button>
      </div>
    </div>
  </div>
</div>
<?= $this->element('payments_modal') ?>
<style>
 .disabled {
  color: #c4c4c4;
 }
</style>