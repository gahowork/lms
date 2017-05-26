<?php
	$panelMode='panel-default';
	if (count($question['questionlevels']) < 1) {
		$panelMode='panel-warning';
	}
?>
<div class="panel <?= $panelMode ?>">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Levels') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span>', ['controller'=>'questionlevels', 'action' => 'addbyquestion', $question->id], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>
	<div class="panel-body">
		<?php if(isset($question['questionlevels'])) : ?>
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="description"><?= __('Description') ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($question['questionlevels'] as $singlelevel) : ?>
						<tr>
							<td class="description"><?= h($singlelevel->level->description) ?></td>
							<td class="actions">
								<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['controller'=>'questionlevels','action' => 'viewbyquestion', $singlelevel->id], ['class'=>'btn btn-info', 'escape'=>false]) ?>
							</td>
						</tr>

					<?php endforeach; ?>
				</tbody>

			</table>
		<?php endif; ?>
	</div>
</div>
