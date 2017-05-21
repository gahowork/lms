
<div class="panel panel-warning">
	<div class="panel-heading">Configuration</div>
	<div class="panel-body">

		<div class="panel panel-default config-button">
			<div class="panel-body">
				<span class="glyphicon glyphicon-tent"></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Adventures',
					['controller'=>'Adventures', 'action'=>'Index'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

		<div class="panel panel-default config-button">
			<div class="panel-body">
				<span class="glyphicon glyphicon-th-large"></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Categories',
					['controller'=>'Categories', 'action'=>'Index'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

		<div class="panel panel-default config-button">
			<div class="panel-body">
				<span class="glyphicon glyphicon-sort-by-attributes"></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Levels',
					['controller'=>'Levels', 'action'=>'Index'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

		<div class="panel panel-default config-button">
			<div class="panel-body">
				<span class="glyphicon glyphicon-picture"></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Pictures',
					['controller'=>'Pictures', 'action'=>'Index'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

		<div class="panel panel-default config-button">
			<div class="panel-body">
				<span class="glyphicon glyphicon-question-sign"></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Questions',
					['controller'=>'Questions', 'action'=>'Index'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

		<div class="panel panel-default config-button">
			<div class="panel-body">
				<span class="glyphicon glyphicon-user"></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Users',
					['controller'=>'Users', 'action'=>'Index'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

		<div class="panel panel-default config-button">
			<div class="panel-body">
				<span class="glyphicon glyphicon-user half"></span>
				<span class="glyphicon glyphicon-user half"></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Usergroups',
					['controller'=>'Usergroups', 'action'=>'Index'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>
	</div>
</div>
