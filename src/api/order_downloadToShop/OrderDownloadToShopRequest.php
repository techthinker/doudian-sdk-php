<?php

//auto generated code
class OrderDownloadToShopRequest
{

	private $param;

	private $config;


	public function setParam($param)
	{
		$this->param = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function setConfig($config)
	{
		$this->config = $config;
	}

	public function getConfig()
	{
		return $this->config;
	}

	public function getUrlPath()
	{
		return "/order/downloadToShop";
	}

	public function execute($accessToken)
	{
		return DoudianOpClient::getInstance()->request($this, $accessToken);
	}

	public function __construct()
	{
		$this->config = GlobalConfig::getGlobalConfig();
	}
}
