<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiPbpEventResultParams\param;

class SyncOapiPbpEventResultParams extends Model {
    protected $_name = [
        'param' => 'param',
    ];
    public function validate() {
        Model::validateRequired('param', $this->param, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->param) {
            $res['param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SyncOapiPbpEventResultParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['param'])){
            $model->param = param::fromMap($map['param']);
        }
        return $model;
    }
    /**
     * @description 打卡事件结果模型
     * @var param
     */
    public $param;

}
