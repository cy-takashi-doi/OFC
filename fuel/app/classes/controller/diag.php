<?php
require_once APPPATH.'vendor/facebook/src/facebook.php';

class Controller_Diag extends Controller_Template
{
	private $fb;
	private $fb_conf;
 
	public function before()
	{
		parent::before();
		$this->fb_conf = Config::load('facebook',true);
		$this->fb = new Facebook($this->fb_conf['init']);
	}
	
	public function action_index()
	{
		// Facebookから遷移した場合に、いいね済かどうか、Facebookログイン済かどうかで画面遷移を切り替える
		// Facebookからではなく直接遷移した場合は404エラーとする
		// いいね済の場合診断を開始する
		$data = array();
		$signed_request = $this->fb->getSignedRequest();
        Log::debug(__CLASS__.':'.__FUNCTION__.':'.'signed_request = '.print_r($signed_request,true));
		if (!empty($signed_request))
		{
			if ($signed_request["page"]["liked"])		// 分岐1："いいね済の人に見せるコンテンツ";
			{
				//ログイン状態を取得
				$user_id = $this->fb->getUser();
				if($user_id)
				{
					Response::redirect('/diag/start', 'location');
				}
				else
				{
					Response::redirect('/diag/login', 'location');
				}
			}
			/*
			else
			{
				Response::redirect('/diag/noliked', 'location');
			}
			*/
		}
		else
		{
			$view->mainview = View::forge('fbnoaccess');
		}
		
		//$data["subnav"] = array('index'=> 'active' );
		$this->template->title = '"イケメン診断 community"を"いいね"しよう';
		$data['appId'] = $this->fb_conf['init']['appId'];
		$this->template->content = View::forge('diag/index', $data);
	}

	public function action_start()
	{
		//$data["subnav"] = array('start'=> 'active' );
		//$this->template->title = 'Diag &raquo; Start';
		$this->template->content = View::forge('diag/start', $data);
	}

	public function action_result()
	{
		$data["subnav"] = array('result'=> 'active' );
		$this->template->title = 'Diag &raquo; Result';
		$this->template->content = View::forge('diag/result', $data);
	}

}
