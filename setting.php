<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "A2vi8pE1X2HAQIM8goe1u+naF4fjT21H60PhWLovTesoSjtJrm2pFXqDZsfKHzj0d+Ly1TvYtrZQfZOI++JbMGgZuWZE+5/GWhPQpgCiVhFYq3jv89lB55itG8s7y1msC0wxu2ZeMArAr5KTuCUj2gdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "6b22c4107de7c703fea210a87981ef3a";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
