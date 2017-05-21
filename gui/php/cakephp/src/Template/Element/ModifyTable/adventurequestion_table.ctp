<div class="panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Questions') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span>', ['controller'=>'adventurequestions', 'action' => 'addbyadventure', $adventure->id], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>
	<div class="panel-body">
		<?php if(isset($adventure['adventurequestions'])) : ?>
			<table class="table table-hover">
				<thead>
					<tr>
						<th><?= __('Question') ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($adventure['adventurequestions'] as $singleadventurequestion) : ?>
						<tr>
							<td>
								<b><?= h($singleadventurequestion->question->header) ?></b><br/>
								<?= h($singleadventurequestion->question->description) ?>
							</td>
							<td class="actions">
								<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['controller'=>'adventurequestions','action' => 'viewbyadventure', $singleadventurequestion->id], ['class'=>'btn btn-info', 'escape'=>false]) ?>
							</td>
						</tr>

					<?php endforeach; ?>
				</tbody>

			</table>
		<?php endif; ?>
	</div>
</div>
