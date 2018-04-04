<?php
//引入头文件
require_once("../OpenSearch/Autoloader/Autoloader.php");
use OpenSearch\Client\OpenSearchClient;

//替换对应的access key id
$accessKeyId = 'LTAI2rFLgMHQHI16';
//替换对应的access secret
$secret = 'S5egdpGmAz6U8aJ6DatooXndGI2VH3';
//替换为对应区域api访问地址，可参考应用控制台,基本信息中api地址
$endPoint = 'opensearch-cn-beijing.aliyuncs.com/v3/openapi/apps/';
//替换为应用名
$appName = 'IPD_Growth_debug';
//替换为下拉提示名称
$suggestName = '<suggest name>';
//开启调试模式
$options = array('debug' => true);
//创建OpenSearchClient客户端对象
$client = new OpenSearchClient($accessKeyId, $secret, $endPoint, $options);