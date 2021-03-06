<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UploadOapiProcessinstanceFileParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'processInstanceId' => 'process_instance_id',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UploadOapiProcessinstanceFileParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        return $model;
    }
    /**
     * @description 企业应用标识
     * @var int
     */
    public $agentId;

    /**
     * @description 流程实例id
     * @var string
     */
    public $processInstanceId;

}
