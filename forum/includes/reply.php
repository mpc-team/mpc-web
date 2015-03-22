<?php 
function PrintReplyForm($root,$enabled) {	
	$disabled=($enabled) ? "" : "disabled";
	echo <<<EOD
		<div class="panel-reply">
				<div class="form-group">
					<div class="input-group">
						<label class="control-label"><h4>Reply</h4></label>
					</div>
					<div class="input-group">
						<textarea name="content" id="content" class="form-control" placeholder="Reply to thread..." {$disabled} required></textarea>
					</div>
					<div class="input-group">
						<button type="submit" class="btn btn-reply" {$disabled}>
							<span class="glyphicon glyphicon-send"></span>
						</button>
					</div>
				</div>
		</div>
EOD;
}
 ?>