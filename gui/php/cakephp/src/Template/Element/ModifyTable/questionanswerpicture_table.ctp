<?php
	$panelMode='panel-default';
	if (count($questionanswer['questionanswerpictures']) < 1) {
		$panelMode='panel-warning';
	}
?>
<div class="panel <?= $panelMode ?>">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Pictures') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span>', ['controller'=>'questionanswerpictures', 'action' => 'addbyquestionanswer', $questionanswer->id], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>
	<div class="panel-body">
		<?php if(isset($questionanswer['questionanswerpictures'])) : ?>
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="description"><?= __('Description') ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($questionanswer['questionanswerpictures'] as $singlequestionanswerpicture) : ?>
						<tr>
							<td class="description"><?= h($singlequestionanswerpicture->picture->description) ?></td>
							<td class="actions">
								<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['controller'=>'questionanswerpictures','action' => 'viewbyquestionanswer', $singlequestionanswerpicture->id], ['class'=>'btn btn-info', 'escape'=>false]) ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
</div>
