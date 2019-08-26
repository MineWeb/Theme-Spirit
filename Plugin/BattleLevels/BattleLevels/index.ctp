<section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle">
                        <p>Accueil<span> / </span>BattleLevels</p>
                        <h2>BattleLevels</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
<div class="container">
    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3 col-xs-12">
            <form class="navbar-form" role="search" method="post">
                <div class="input-group">
                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                    <input type="text" class="form-control" placeholder="Rechercher un joueur" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12">
			<?php if(is_array($list)): ?>
				<div class="table-responsive">
                    <table class="table table-bordered dataTable table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?= $Lang->get('BATTLELEVELS__PLAYER'); ?></th>
                            <th><?= $Lang->get('BATTLELEVELS__SCORE'); ?></th>
                            <th><?= $Lang->get('BATTLELEVELS__KILL'); ?></th>
                            <th><?= $Lang->get('BATTLELEVELS__DEATH'); ?></th>
                            <th><?= $Lang->get('BATTLELEVELS__KILLSTREAK'); ?></th>
                            <th><?= $Lang->get('BATTLELEVELS__TOPSTREAK'); ?></th>
                            <th><?= $Lang->get('BATTLELEVELS__LEVEL'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
						<?php foreach($list as $key => $l): ?>
                            <tr>
                                <td><?= $key+1; ?></td>
                                <td><?= $l['player']; ?></td>
                                <td><?= $l['score']; ?></td>
                                <td><?= $l['kill']; ?></td>
                                <td><?= $l['death']; ?></td>
                                <td><?= $l['killstreak']; ?></td>
                                <td><?= $l['topstreak']; ?></td>
                                <td><?= $l['level']; ?></td>
                            </tr>
						<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
	      	<?php else: ?>
	      	<div class="panel panel-default">
                <div class="panel-body">
                	<div class="alert alert-danger">
                    	<?= $Lang->get('BATTLELEVELS__NODATA'); ?>
            		</div>
                </div>
            </div>
			<?php endif; ?>
		</div>
	</div>
</div>