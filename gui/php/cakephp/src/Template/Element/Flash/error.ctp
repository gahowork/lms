<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="panel panel-danger" onclick="this.classList.add('hidden');">
	<div class="panel-body">
		<?= $message ?>
	</div>
</div>
