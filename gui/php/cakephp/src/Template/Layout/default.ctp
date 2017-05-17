<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?= $cakeDescription ?>:
			<?= $this->fetch('title') ?>
		</title>

		<?= $this->Html->meta('icon') ?>

		<?= $this->Html->css('bootstrap.css') ?>
		<?= $this->Html->css('lms.css') ?>

		<?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
	</head>

	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<?= $this->Html->link(
						'LMS',
						['controller'=>'Pages', 'action'=>'Display'],
						['class'=>'navbar-brand']
					) ?>
				</div>

				<ul class="nav navbar-nav">
					<li>
						<?= $this->Html->link(
							'Quiz',
							['controller'=>'Quizzes', 'action'=>'Index']
						) ?>
					</li>
					<li>
						<?= $this->Html->link(
							'Config',
							['controller'=>'Configs', 'action'=>'Index']
						) ?>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li>
						<?= $this->Html->link(
							'Login',
							['controller'=>'Users', 'action'=>'Login']
						) ?>
					</li>
				</ul>

			</div>
		</nav>

		<div class="container" style="margin-top:80px">
			<?= $this->Flash->render() ?>
			<?= $this->fetch('content') ?>
		</div>

		<footer>
		</footer>
	</body>
</html>
