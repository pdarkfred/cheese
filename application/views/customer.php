<?
    $pd = array();
	$pd['page_title'] = $page_title;
    $this->load->view('inc/header.php', $pd);
?>
<div id="container">
	<?php if($error) { ?>
		<div class="error"><?php echo $error?></div>
	<?php } else { ?>
		<div class="row">
			1
			Customer ID: <input disabled="disabled" id="cid" name="cid" value="<?php echo $cid ?>" />
			First Name: <input disabled="disabled" id="fname" name="fname" value="<?php echo $fname ?>" />
			Last Name: <input disabled="disabled" id="lname" name="lname" value="<?php echo $lname ?>" />
		</div>
		<div class="row">
			Phone Number: <input disabled="disabled" id="phone" name="phone" value="<?php echo $phone ?>" />
			Email Address: <input disabled="disabled" id="email" value="<?php echo $email ?>" />
		</div>
		<div class="row">
			Address: <textarea disabled="disabled" id="address" name="address"><?php echo $address ?></textarea>
		</div>
		<div class="row">
			Add Comment: <textarea id="addcomment" name="addcomment">
				
			</textarea>
		</div>
		<div class="row">
			Comments: <?php foreach($comments as $c){ ?>
								<div class="comment">
									<?php echo $c ?>
								</div>
					 <?php } ?>
		</div>
		<div class="row">
			<div id="save">Save</div>
			<div id="edit">Edit</div>
		</div>
	<?php } ?>
</div>
<?
    $this->load->view('inc/footer.php');
?>