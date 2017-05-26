<?php

$heading_msg = __('Error');
$body_msg = __('Something went wrong. Please go back.');
$controller_name = '';
$action_name = '';
$passing_data = null;

if(isset($this->request->params['controller'])){
	$controller_name = $this->request->params['controller'];
}
if(isset($this->request->params['action'])){
	$action_name = $this->request->params['action'];
}
if(isset($this->request->params['pass'][0])){
	$passing_data = $this->request->params['pass'][0];
}

if($error->errorInfo[0] == '23000' && $error->errorInfo[1] == 1451) {
	$heading_msg = __('Error deleting object.');
	$body_msg = __('Heedlessness prevention.<br />You have to remove all details first, bevore you can delete this object.');
	$action_name = 'view';
} else if($error->errorInfo[0] == '23000' && $error->errorInfo[1] == 1062) {
	$heading_msg = __('Error deleting object.');
	$body_msg = __('Heedlessness prevention.<br />You have to remove all details first, bevore you can delete this object.');
} else if($error->errorInfo[0] == '22001' && $error->errorInfo[1] == 1406) {
	$heading_msg = __('Error saving object.');
	$body_msg = __('You data may be too long. Please shorten your input.');
}

?>

<div class="panel panel-danger">
	<div class="panel-heading"><?= $heading_msg ?></div>
	<div class="panel-body"><?= $body_msg ?></div>
	<div class="panel-footer">
		<?=
			$this->Html->link(
				__('Back'),
				[
					'controller'=>$controller_name,
					'action'=>$action_name,
					$passing_data
				],
				[
					'class'=>'btn btn-warning form-control'
				]
			)
		?>
	</div>
</div>
