<?php
namespace DoudianSdkPhp\Api\OrderGetSettleBillDetailV3;

//auto generated code
class OrderGetSettleBillDetailV3Request
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
		return "/order/getSettleBillDetailV3";
	}

	public function execute($accessToken)
	{
		return \DoudianSdkPhp\Core\DoudianOpClient::getInstance()->request($this, $accessToken);
	}

	public function __construct()
	{
		$this->config = \DoudianSdkPhp\Core\GlobalConfig::getGlobalConfig();
	}
}
