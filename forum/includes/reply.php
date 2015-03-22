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
					<div class="input-group input-group-bottom">
						<input type="submit" class="btn btn-reply" value="Post" {$disabled}/>
					</div>
				</div>
		</div>
EOD;
}
 ?>