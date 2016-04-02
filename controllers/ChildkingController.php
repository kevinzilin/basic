<?php

namespace app\controllers;

use yii\web\Controller;

class ChildkingController extends Controller {
	public function actionIndex() {
		$data = \Fun::getCurl ( 'http://biz.cli.im/test/BP80397?biz=1&coding=I91gDL' );
		// file_put_contents('a.php',$data);
		$arr = array (
				'/Public',
				'<a {`if linktree.link`}href="{`linktree.link`}"{`/if`}>{`linktree.name`}</a>{`/if`}</li>{`/each`}',
				'<script type="text/javascript" src="http://static.clewm.net/cli/biz/js/action_href.js"></script>' 
		);
		$arr2 = array (
				'http://biz.cli.im/Public',
				'{`/if`}</li>{`/each`}<li class="web"><a href="http://m2.haiziwang.com/promotion201504/appdownload/app.html">孩子王特卖APP下载</a></li><li class="web"><a href="http://m2.haiziwang.com/members/newMember/index.html?id=802419018048">免费办理会员卡</a></li> ',
				'' 
		);
		// $data=str_replace('/Public', 'http://biz.cli.im/Public', $data);
		// $data=str_replace('<script type="text/javascript" src="http://static.clewm.net/cli/biz/js/action_href.js"></script>', '',$data);
		// $data=str_replace('<a {`if linktree.link`}href="{`linktree.link`}"{`/if`}>{`linktree.name`}</a>{`/if`}</li>{`/each`}', '{`/if`}</li>{`/each`}<li class="web"><a href="http://m2.haiziwang.com/promotion201504/appdownload/app.html">孩子王特卖APP下载</a></li><li class="web"><a href="http://m2.haiziwang.com/members/newMember/index.html?id=802419018048">免费办理会员卡</a></li> ',$data);
		$data = str_replace ( $arr, $arr2, $data );
		echo $data;
		die ();
	}
}