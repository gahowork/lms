<tr>
	<th class="id" scope="col"></th>
	<th class="created" scope="col"></th>
	<th class="header" scope="col">
		<?= $this->Form->create('', ['url'=>['controller'=>'questions', 'action'=>'addfilter']]) ?>
		<?= $this->Form->input('header', ['label'=>false, 'type'=>'text', 'class'=>'form-control', 'name'=>'header']) ?>
		<?= $this->Form->end() ?>
	</th>
	<th class="description" scope="col">
		<?= $this->Form->create('', ['url'=>['controller'=>'questions', 'action'=>'addfilter']]) ?>
		<?= $this->Form->input('description', ['label'=>false, 'type'=>'text', 'class'=>'form-control', 'name'=>'description']) ?>
		<?= $this->Form->end() ?>
	</th>
	<th class="questiontype" scope="col">
		<?= $this->Form->create('', ['url'=>['controller'=>'questions', 'action'=>'addfilter']]) ?>
		<?= $this->Form->input('questiontype', ['label'=>false, 'type'=>'text', 'class'=>'form-control', 'name'=>'questiontype']) ?>
		<?= $this->Form->end() ?>
	</th>
	<th scope="col" class="actions"></th>
</tr>
