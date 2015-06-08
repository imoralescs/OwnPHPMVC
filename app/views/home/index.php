
<?php if($data['user'])
		{
?>
<h1>Hello <?= $data['user']->name; ?>!</h1>
<?php 	}
		else
		{
?>
<h1>User not found!</h1>
<?php
		}
?>
