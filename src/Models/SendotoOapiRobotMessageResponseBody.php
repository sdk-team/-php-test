<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendotoOapiRobotMessageResponseBody\result;

class SendotoOapiRobotMessageResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'result' => 'result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendotoOapiRobotMessageResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['result'])){
            $model->result = result::fromMap($map['result']);
        }
        return $model;
    }
    /**
     * @description 是否受理成功
     * @var bool
     */
    public $success;

    /**
     * @description 错误代码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误描述
     * @var string
     */
    public $errmsg;

    /**
     * @description result
     * @var result
     */
    public $result;

}
