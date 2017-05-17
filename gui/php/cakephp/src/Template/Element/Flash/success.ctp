<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="panel panel-success" onclick="this.classList.add('hidden');">
	<div class="panel-body">
		<?= $message ?>
	</div>
</div>
