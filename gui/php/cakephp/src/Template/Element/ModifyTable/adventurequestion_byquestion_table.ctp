<div class="panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Adventures') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span>', ['controller'=>'adventurequestions', 'action' => 'addbyquestion', $question->id], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>
	<div class="panel-body">
		<?php if(isset($question['adventurequestions'])) : ?>
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="description"><?= __('Description') ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($question['adventurequestions'] as $singleadventurequestion) : ?>
						<tr>
							<td class="description">
								<?= h($singleadventurequestion->adventure->description) ?>
							</td>
							<td class="actions">
								<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['controller'=>'adventurequestions','action' => 'viewbyquestion', $singleadventurequestion->id], ['class'=>'btn btn-info', 'escape'=>false]) ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
</div>
