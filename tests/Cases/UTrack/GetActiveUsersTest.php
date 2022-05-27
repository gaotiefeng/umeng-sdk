<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace HyperfTest\Cases\UTrack;

use HyperfTest\Cases\AbstractTestCase;
use KY\UMeng\Client\APIId;
use KY\UMeng\Client\APIRequest;
use KY\UMeng\Client\Policy\ClientPolicy;
use KY\UMeng\Client\Policy\RequestPolicy;
use KY\UMeng\Client\SyncAPIClient;
use KY\UMeng\UApp\UMengUAppGetActiveUsersParam;
use KY\UMeng\UApp\UMengUAppGetActiveUsersResult;

/**
 * 获取App活跃用户数.
 * @see https://developer.umeng.com/open-api/docs/com.umeng.uapp/umeng.uapp.getActiveUsers/1
 * @internal
 * @coversNothing
 */
class GetActiveUsersTest extends AbstractTestCase
{
    public $namespace = 'com.umeng.uapp';

    public $name = 'umeng.uapp.getActiveUsers';

    public $version = 1;

    /*
     * 这个方法有问题、一直提示 appkey 类型错误
     * Required argument appkey : expect [type: String]
     * 需要从这里 testGetAppList 获取 appkey
     */
    public function testGetActiveUsers()
    {
        $this->markTestSkipped();

        $syncAPIClient = new SyncAPIClient(new ClientPolicy(
            '123456',
            '******',
            'gateway.open.umeng.com'
        ));

        $reqPolicy = new RequestPolicy(useHttps: true);

        $param = new UMengUAppGetActiveUsersParam();
        $param->sdkStdResult['appkey'] = '******';
        $param->sdkStdResult['startDate'] = '2022-05-01';
        $param->sdkStdResult['endDate'] = '2022-05-10';
        $param->sdkStdResult['periodType'] = 'daily';

        $request = new APIRequest(
            new APIId($this->namespace, $this->name, $this->version),
            $param,
        );

        $res = $syncAPIClient->send($request, UMengUAppGetActiveUsersResult::class, $reqPolicy);

        var_dump($res);
    }
}