<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiEventDTO extends SDKDomain
{
    private $eventName;

    private $displayName;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 事件名
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * 设置事件名.
     * @param string $eventName
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return 事件显示名
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * 设置事件显示名.
     * @param string $displayName
     *                            参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('eventName', $this->stdResult)) {
            $this->eventName = $this->stdResult->{'eventName'};
        }
        if (array_key_exists('displayName', $this->stdResult)) {
            $this->displayName = $this->stdResult->{'displayName'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('eventName', $this->arrayResult)) {
            $this->eventName = $arrayResult['eventName'];
        }
        if (array_key_exists('displayName', $this->arrayResult)) {
            $this->displayName = $arrayResult['displayName'];
        }
    }
}
