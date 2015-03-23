<?php
	function PrintModal($query,$createpage){
		echo<<<EOD
			<div class="panel-group">
				<div class="panel-newthread">
					<div class="panel panel-default">
						<a class="btn" data-toggle="modal" data-target="#modal-newthread">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-newthread" tabindex="-1" role="dialog" aria-labelledby="modal-newthread" aria-hidden="true">
				<div class="modal-dialog">
					<form action="{$createpage}?{$query}" method="post">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h3 class="modal-title" id="modal-label">
									Create Thread
								</h3>
							</div>
							<div class="modal-body">
								<div class="panel panel-default panel-newthread">
									<div class="form-group">
										<div class="input-group">
											<label class="control-label" for="title">
												Thread Title
											</label>
											<input type="text" name="title" id="title" class="form-control" placeholder="Title..." required/>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<label class="control-label" for="title">
												Post Contents
											</label>
											<textarea name="content" id="content" class="form-control" placeholder="Post content..." required></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-default" value="Create"/>
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
EOD;
	}
 ?>