<?php if($stats): ?>
<?= $this->Html->css('BattleLevels.billboard.min'); ?>
<?= $this->Html->script('BattleLevels.d3.v5.min'); ?>
<?= $this->Html->script('BattleLevels.billboard.min'); ?>
<section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle">
                        <p>Accueil<span> / </span>BattleLevels</p>
                        <h2><?= $title_for_layout ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="overflow: hidden">
                    <img src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false, $stats['name'], '48')); ?>" class="img-responsive img-rounded pull-left" alt="Image de profil de <?= $stats['name']; ?>" />
                    <span class="pull-right" style="line-height:48px">Score : <?= $stats['score']; ?></span>
                    <h3 class="panel-title" style="margin-left:60px;line-height:48px"><?= $stats['name']; ?></h3>
                </div>
                <div class="panel-body" style="padding: 30px 20px;">
                    <div id="RadarChart"></div>
                    <div id="PieChart"></div>
                    <div id="GaugeChart"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var chart = bb.generate({
        data: {
            x: "x",
            columns: [
                ["x", "Meurtres", "Série de meurtres", "Meilleur série de meutres"],
                ["<?= $stats['name']; ?>", <?= $stats['kill']; ?>, <?= $stats['killstreak']; ?>, <?= $stats['topstreak']; ?>]
            ],
            type: "radar",
            labels: true
        },
        radar: {
            axis: {
                max: 350,
                line: {
                    show: true
                }
            },
            level: {
                depth: 4,
                text: {
                    show: false
                }
            },
            direction: {
                clockwise: true
            },
            size: {
                ratio: 1
            }
        },
        bindto: "#RadarChart"
    });

    var chart = bb.generate({
        data: {
            columns: [
                ["Meutres", <?= $stats['kill']; ?>],
                ["Morts", <?= $stats['death']; ?>]
            ],
            colors: {
                "Meurtres": "#2ca02c"
            },
            type: "pie",
        },
        bindto: "#PieChart"
    });

    var chart = bb.generate({
        data: {
            columns: [
                ["Progrès", <?= round($stats['progress']*100); ?>]
            ],
            type: "gauge"
        },
        gauge: {},
        color: {
            pattern: [
                "#FF0000",
                "#F97600",
                "#F6C600",
                "#60B044"
            ],
            threshold: {
                values: [
                    30,
                    60,
                    90,
                    100
                ]
            }
        },
        size: {
            height: 180
        },
        bindto: "#GaugeChart"
    });
</script>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="alert alert-danger">
							<?php if(isset($banner_server) && $banner_server): ?>
	                            <?= $Lang->get('BATTLELEVELS__BADPLAYER'); ?>
                                <a href="<?= $this->Html->url(['controller' => 'BattleLevels', 'action' => 'index', 'plugin' => 'BattleLevels']) ?>">
                                    <?= $Lang->get('GLOBAL__BACK_TO_INDEX'); ?>
                                </a>
                            <?php else: ?>
								<?= $Lang->get('BATTLELEVELS__NODATA'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>