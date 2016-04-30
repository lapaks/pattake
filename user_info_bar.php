<div id="wrapper" class="clearfix">
<div class="wrapper">
<?php
if (isset($_SESSION['login_user'])): ?>
<div class="login_user"><?php
if (isset($_SESSION['login_user'])): ?>
<?php echo $_SESSION['login_user'];?>
<?php endif?></div>
<?php endif?>
</div>
</div>