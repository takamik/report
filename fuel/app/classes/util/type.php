<?php
/**
 * アプリ内利用定数定義
 */
class Util_TYPE
{

	// 削除フラグ
	const DELETE_FLAG_OFF = 0;
	const DELETE_FLAG_ON  = 1;

	// 配信フラグ
	const DELIVER_FLAG_OFF = 0;
	const DELIVER_FLAG_ON  = 1;

	// 与件経路
	const CHANNEL_APP     = 1;
	const CHANNEL_TELMAIL = 2;

	// TRDS商品
	const PRODUCT_INSTAGRAMMER = 1;
	const PRODUCT_BLOGGER      = 2;
	const PRODUCT_VIDEO        = 3;
	const PRODUCT_STN          = 4;
	const PRODUCT_RELEASE      = 5;
	const PRODUCT_ZKINBOUND    = 6;
	const PRODUCT_ELSE         = 999;


}
