<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiGetTotalUserParam
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
     *                             参数示例：<pre>5dfe1b2f3597245664499a9c</pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult['dataSourceId'] = $dataSourceId;
    }

    /**
     * @return 开始时间
     */
    public function getFromDate()
    {
        return $this->sdkStdResult['fromDate'];
    }

    /**
     * 设置开始时间.
     * @param string $fromDate
     *                         参数示例：<pre>2020-03-01</pre>
     * 此参数必填     */
    public function setFromDate($fromDate)
    {
        $this->sdkStdResult['fromDate'] = $fromDate;
    }

    /**
     * @return 结束时间
     */
    public function getToDate()
    {
        return $this->sdkStdResult['toDate'];
    }

    /**
     * 设置结束时间.
     * @param string $toDate
     *                       参数示例：<pre>2020-03-01</pre>
     * 此参数必填     */
    public function setToDate($toDate)
    {
        $this->sdkStdResult['toDate'] = $toDate;
    }

    /**
     * @return 页码
     */
    public function getPageIndex()
    {
        return $this->sdkStdResult['pageIndex'];
    }

    /**
     * 设置页码
     * @param int $pageIndex
     *                       参数示例：<pre>1</pre>
     *                       此参数为可选参数
     *
     * 默认值：<pre>1</pre>
     */
    public function setPageIndex($pageIndex)
    {
        $this->sdkStdResult['pageIndex'] = $pageIndex;
    }

    /**
     * @return 每页记录条数
     */
    public function getPageSize()
    {
        return $this->sdkStdResult['pageSize'];
    }

    /**
     * 设置每页记录条数.
     * @param int $pageSize
     *                      参数示例：<pre>30</pre>
     *                      此参数为可选参数
     *
     * 默认值：<pre>30</pre>
     */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult['pageSize'] = $pageSize;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
