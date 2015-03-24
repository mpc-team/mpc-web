<?php
	function NewThreadModal($query,$createpage){
		return <<<EOD
			<div class="panel-group panel-newthread">
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
								<h1 class="modal-title" id="modal-label" style="color:rgb(122, 183, 51)">
									Create Thread
								</h1>
							</div>
							<div class="modal-body">
								<div class="panel panel-default">
									<div class="form-group">
										<label class="control-label" for="title">
											<h3>Title</h3>
										</label>
										<input type="text" name="title" id="title" class="form-control" placeholder="Title..." required/>
									</div>
									<div class="form-group">						
										<label class="control-label" for="title">
											<h3>Content</h3>
										</label>
										<textarea name="content" id="content" class="form-control" placeholder="Post content..." required></textarea>
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