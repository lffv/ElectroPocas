<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 
?>
<h2><?php echo $name; ?></h2>
<p class="error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'The requested address %s was not found on this server.'),
		"<strong>'{$url}'</strong>"
	); ?>
</p>
<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
*/
$this->layout = 'public';

?>
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>404 Page</h4>
					<span>We Are Sorry, Page Not Found</span>
				</div>
				<div class="col-md-6">
					<div class="crumbs">You are here: <a href="index.html">Home</a><span class="crumbs-span">&raquo;</span><span>404</span></div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<div class="sections sections-padding-160">
		<div class="container">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="row">
						<div class="col-md-12">
							<div class="page-404">
								<h2>404</h2>
								<h3>OOPS! NOT FOUND :(</h3>
								<div class="search-404">
									<a class="button-3" href="<?php echo $this->base; ?>">Homepage</a>
								</div><!-- End search-404 -->
							</div><!-- End page-404 -->
						</div>
					</div><!-- End row -->
				</div><!-- End main-content -->
			</div><!-- End row -->
			
		</div><!-- End container -->
	</div><!-- End sections -->