<?php

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');
?>
				<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-warning">
							<button class="close" data-dismiss="alert">×</button>
							<strong>Warning!</strong> Your monthly traffic is reaching limit.
						</div>
						<div class="alert alert-success">
							<button class="close" data-dismiss="alert">×</button>
							<strong>Success!</strong> The page has been added.
						</div>
						<div class="alert alert-info">
							<button class="close" data-dismiss="alert">×</button>
							<strong>Info!</strong> You have 198 unread messages.
						</div>
						<div class="alert alert-danger">
							<button class="close" data-dismiss="alert">×</button>
							<strong>Error!</strong> The daily cronjob has failed.
						</div>
					</div>
				</div>
				
						
							
					</div>
				</div>
				
			
<?

include('footer.php');

?>