<?php
if (!defined('FLUX_ROOT')) exit;
$this->loginRequired();
?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<h2><?php echo htmlspecialchars(Flux::message('XCMSPageAddTitle')) ?></h2>
<?php if (!empty($errorMessage)): ?>
    <p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<form action="<?php echo $this->urlWithQs ?>" method="post" class="generic-form">
	<table width="100%">
		<tr>
			<th><label for="page_title"><?php echo htmlspecialchars(Flux::message('XCMSPageTitleLabel')) ?></label></th>
			<td><input type="text" name="page_title" id="page_title" value="<?php echo htmlspecialchars($title) ?>"/></td>
		</tr>
		<tr>
			<th width="100"><label for="page_path"><?php echo htmlspecialchars(Flux::message('XCMSPagePathLabel')) ?></label></th>
			<td><input type="text" name="page_path" id="page_path" value="<?php echo htmlspecialchars($path) ?>"/></td>
		</tr>
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message('XCMSPageBodyLabel')) ?></label></th>
			<td>
				<textarea name="page_body"><?php echo htmlspecialchars($body) ?></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Add" /></td>
		</tr>
    </table>
</form>