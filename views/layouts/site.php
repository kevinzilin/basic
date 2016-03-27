<?php
use app\assets\LoginAsset;
use yii\helpers\Html;
LoginAsset::register ( $this ); // $this 代表视图对象
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html>
<head>
<title>登陆</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8" />
<link rel="icon" type="image/ico"
	href="http://tattek.com/minimal/assets/images/favicon.ico" />
<link
	href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
	rel="stylesheet">
    <?= Html::csrfMetaTags()?>
    <?php $this->head()?>
      </head>
<body class="bg-1">
<?php $this->beginBody()?>
<?= $content?>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>