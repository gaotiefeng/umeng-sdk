<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiInitMultiLevelTreeParam
{
    private $sdkStdResult = [];

    /**
     * @return 数据源id（AppKey）
     */
    public function getDataSourceId()
    {
        return $this->sdkStdResult['dataSourceId'];
    }

    /**
     * 设置数据源id（AppKey）.
     * @param string $dataSourceId
     *                             参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult['dataSourceId'] = $dataSourceId;
    }

    /**
     * @return JSON层级分组结构（最多五级）；
     */
    public function getTreeJson()
    {
        return $this->sdkStdResult['treeJson'];
    }

    /**
     * 设置JSON层级分组结构（最多五级）；.
     * @param string $treeJson
     *                         参数示例：<pre>{"head":["国家","省","城市","门店"],"rows":[["中国","北京","朝阳区","金辉大厦店"],["中国","北京","朝阳区","绿地中心店"]]}</pre>
     * 此参数必填     */
    public function setTreeJson($treeJson)
    {
        $this->sdkStdResult['treeJson'] = $treeJson;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
