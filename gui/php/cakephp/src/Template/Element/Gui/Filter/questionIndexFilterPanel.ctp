<?php
	$filtercount = 0;
	if (isset($questionIndexFilter)) {
		$filtercount += count($questionIndexFilter['id']);
		$filtercount += count($questionIndexFilter['header']);
		$filtercount += count($questionIndexFilter['description']);
	}
?>

<?php if ($filtercount > 0) : ?>
	<div class="filterPanel panel-heading">
		<?php
			foreach ($questionIndexFilter['id'] as $index => $filterelement) {
				echo $this->Html->link(
					$this->Html->tag('span', __('Id: ') . h($filterelement), array('class' => 'badge')),
					[
						'controller' => 'questions',
						'action' => 'deletefilter',
						'id',
						$index,
					],
					['escape'=>false]
				);
			}

			foreach ($questionIndexFilter['header'] as $index => $filterelement) {
				echo $this->Html->link(
					$this->Html->tag('span', __('Header: ') . h($filterelement), array('class' => 'badge')),
					[
						'controller' => 'questions',
						'action' => 'deletefilter',
						'header',
						$index,
					],
					['escape'=>false]
				);
			}

			foreach ($questionIndexFilter['description'] as $index => $filterelement) {
				echo $this->Html->link(
					$this->Html->tag('span', __('Description: ') . h($filterelement), array('class' => 'badge')),
					[
						'controller' => 'questions',
						'action' => 'deletefilter',
						'description',
						$index
					],
					['escape'=>false]
				);
			}

			echo $this->Html->link(
				$this->Html->tag('span', __('Remove all'), array('class' => 'badge')),
				[
					'controller' => 'questions',
					'action' => 'deleteallfilter'
				],
				['escape'=>false]
			);
		?>

	</div>
<?php endif; ?>
