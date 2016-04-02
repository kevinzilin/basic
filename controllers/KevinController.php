<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;
use app\models\User;
use app\models\Order;
class KevinController extends Controller {
	public function actionIndex() {
		// $request = \YII::$app->request; // 请求组件
		// echo $request->userIp;
		// $res = \YII::$app->response; // 响应组件
		
		// sql查询
		// $sql = 'select * from test';
		// $model = Test::findBySql ( $sql )->all ();
		// echo $model[0]['id'];
		// echo $model[0]->id;
		
		// 数组查询
		/*
		 * $model=Test::find ()->where ( [
		 * 'id' => 1
		 * ] )->asArray()->all();//asArray() 将查询到的数据转为数组
		 * print_r ( $model );
		 */
		
		// 批量查询
		
		/*
		 * foreach (Test::find()->batch(2) as $k=>$v){
		 * echo $k;
		 * print_r($v);
		 * }
		 */
		
		// 删除数据
		
		/*
		 * $model=Test::find()->where(['id'=>1])->all();
		 * $model[0]->delete();//删除一条
		 *
		 * Test::deleteAll('id>:id',array(':id'=>2));//删除符合条件的所有数据
		 */
		
		// 添加数据
		
		/*
		 * $test=new Test();
		 * $test->name='12345';
		 * $test->validate();//验证数据是否合法 调用模型层 rules方法验证
		 * if($test->hasErrors()){//不合法则结束程序
		 * echo 'fsdffsd';die;
		 * }
		 * $test->save();
		 */
		
		// 修改数据
		/*
		 * $model=Test::find()->where(['id'=>5])->one();//只查询一条 以对象返回
		 * $model->name='maoyu';
		 * $model->save();
		 */
		
		// 关联查询
		
		// 查询顾客订单
		/*
		 * $users=Users::find()->where(['name'=>'张三'])->one();
		 * $orders=$users->getOrders()->all ();
		 * print_r($orders);
		 */
		
		// 根据订单查询顾客
		// $order=Order::find()->where(['id'=>1])->one();
		// $user=$order->getUsers()->one();
		// $user=$order->users;//等价上条查询
		// print_r($user);
		
		// 关联查询的多次查询
		$user=User::find()->with('orders')->asArray()->all();
		print_r($user);die;
	}
	public function actionCache() {
		// 缓存技术
		// 获取缓存组件
		$cache = \Yii::$app->cache;
		// 添加缓存
		// $cache->add ( 'key', 'sfdafa' );
		// // 修改缓存
		// $cache->set ( 'key', 'kevin' );
		
		// // 读取缓存
		// echo $cache->get ( 'key' );
		
		// 删除缓存
		// $cache->delete('key');
		// var_dump($cache->get ( 'key' ));
		// //清空所有缓存
		// $cache->flush();
		
		// 缓存有效期设置
		
		// $cache->add('key', 'afafaf',15);//保存15秒
		// $cache->set ( 'key', 'kevin' ,15);//和上一条等效
		// echo $cache->get ( 'key' );
		
		// 文件依赖 当被依赖的文件被修改或修改时间有变动 则缓存失效
		// $dependency= new \yii\caching\FileDependency(['fileName'=>'kevin.txt']);
		// //$cache->add('file_key', 'sdhdfsdhlvsnokhokgnsdklfasd',800000,$dependency);
		// var_dump($cache->get('file_key'));
		
		// 表达式依赖 当表达式的值被修改 缓存失效
		// $dependency = new \yii\caching\ExpressionDependency ( [
		// 'expression' => '\Yii::$app->request->get("name") '
		// ] );
		// $cache->add ( 'expression_key', 'hello', 800000, $dependency );
		// var_dump( $cache->delete('expression_key'));
		// var_dump ( $cache->get ( 'expression_key' ) );
		
		// 数据库依赖
		// $dependency = new \yii\caching\DbDependency( [
		// 'sql' => 'select count(id) from users'
		// ] );
		// //$cache->add ( 'sql_key', 'hello', 800000, $dependency );
		// var_dump ( $cache->get ( 'sql_key' ) );
	}
}
?>