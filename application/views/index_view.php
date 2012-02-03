<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-1-20
 * Time: 上午10:49
 * To change this template use File | Settings | File Templates.
 */

$this->load->view('header_view');
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<!--Sidebar content-->
			<div class="well" style="padding: 8px 0;margin: 50px 0;">
    		<?php $this->load->view('cates_view'); ?>	    
			</div>
		</div>
		<div class="span10">   	   
			<!--Body content-->
 			<div class="well" style="padding: 8px 0;margin: 50px 0;">
			<?php $this->load->view('posts_view'); ?>
			</div>
	    </div>
	</div>
</div>
<?php
// $this->load->view('posts_view');
// $this->load->view('cates_view');
$this->load->view('footer_view');
?>