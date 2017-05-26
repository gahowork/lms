<div class="questionanswerelement">
	<div class="row">
		<?php
			$rowcounter=1;
			shuffle($questionanswers);
			foreach($questionanswers as $questionanswer) {

				echo $this->Element('Gui/answerButton',['questionanswer'=>$questionanswer]);

				if( ($rowcounter % 2) == 0 && ( count($questionanswers) > $rowcounter ) ) {
					echo '</div><div class="row">';
				}
				$rowcounter+=1;
			}
		?>
	</div>
</div>
