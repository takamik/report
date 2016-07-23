<?php
/**
 * アプリ内定数呼び出し
 */

class Util_Define {

	public static function getDeleteFlagName()
	{ 
		return array (
			Util_TYPE::DELETE_FLAG_OFF => 'OFF',
			Util_TYPE::DELETE_FLAG_ON  => 'ON',
		);
	}

	public static function getDeliverFlagName()
	{ 
		return array (
			Util_TYPE::DELIVER_FLAG_OFF => 'OFF',
			Util_TYPE::DELIVER_FLAG_ON  => 'ON',
		);
	}

	public static function getChannelName()
	{
		return array (
			Util_TYPE::CHANNEL_APP     => 'アポ',
			Util_TYPE::CHANNEL_TELMAIL => '電話・メール',
		);
	}

	public static function getProductName()
	{
		return array (
			Util_TYPE::PRODUCT_INSTAGRAMMER => 'インスタ',
			Util_TYPE::PRODUCT_BLOGGER      => 'ブロガー',
			Util_TYPE::PRODUCT_VIDEO        => '動画',
			Util_TYPE::PRODUCT_STN          => 'STN',
			Util_TYPE::PRODUCT_RELEASE      => 'リリース',
			Util_TYPE::PRODUCT_ZKINBOUND    => '訪日インバウンド',
			Util_TYPE::PRODUCT_ELSE         => 'その他',
		);
	}
/*
	public static function 
		return array (
			'' => '',
			'' => '',
			'' => '',
			'' => '',
			'' => '',
			'' => '',
		);
	}
*/

}
