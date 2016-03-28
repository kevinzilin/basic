<?php
use app\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
LoginAsset::register ( $this ); // $this 代表视图对象
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html>
<head>
<title>登陆</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8" />
<link
	href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
	rel="stylesheet">
    <?= Html::csrfMetaTags()?>
    <?php $this->head()?>
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-1">
	<!-- Wrap all page content here -->
	<div id="wrap">
		<!-- Make page fluid -->
		<div class="row">
			<!-- Page content -->
			<div id="content" class="col-md-12 full-page login">

				<div class="inside-block">
					<img src="<?=Yii::getAlias('@web')?>/users/images/logo-big.png" alt
						class="logo">
					<h1>
						<strong>Welcome</strong> Stranger
					</h1>
					<h5>欢迎使用</h5>
					    <?php
									$form = ActiveForm::begin ( [ 
											'id' => 'form-signin',
											'options' => [ 
													'class' => 'form-signin' 
											],
											'fieldConfig' => [ 
													'template' => "{input}",
													'labelOptions' => [ 
															'style' => 'resize: none' 
													] 
											] 
									] );
									?>
<!-- 					<form id="form-signin" class="form-signin"> -->
					<section>
						<div class="input-group">
						<?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'form-control','placeholder'=>'Username'])?>
<!-- 							<input type="text" class="form-control" name="username" placeholder="Username"> -->
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
						</div>
						<div class="input-group">
						<?= $form->field($model, 'password')->passwordInput(['class'=>'form-control','placeholder'=>'Password'])?>
<!-- 							<input type="password" class="form-control" name="password" placeholder="Password"> -->
							<div class="input-group-addon">
								<i class="fa fa-key"></i>
							</div>
						</div>
					</section>
					<section class="controls">
						<div class="checkbox check-transparent">
						        <?=$form->field ( $model, 'rememberMe' )->checkbox ( ['id'=>'remember', 'template' => "{input}<label for='remember'>记住我</label>" ] )?>
<!-- 							<input type="checkbox" value="1" id="remember" checked> <label for="remember">记住我</label> -->
						</div>
						<a href="#">忘记密码？</a>
					</section>
					<section class="log-in">
					<?= Html::submitButton('登陆', ['class' => 'btn btn-greensea', 'name' => 'login-button']) ?>
<!-- 						<button class="btn btn-greensea">登陆</button> -->
					</section>
						  <?php ActiveForm::end(); ?>
<!-- 					</form> -->
				</div>

			</div>
			<!-- /Page content -->
		</div>
	</div>
	<!-- Wrap all page content end -->
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
      
