<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiRhinoMosLayoutOperationdefsParams extends Model {
    protected $_name = [
        'flowVersion' => 'flow_version',
        'needAssignInfo' => 'need_assignInfo',
        'operationUids' => 'operation_uids',
        'orderId' => 'order_id',
        'tenantId' => 'tenant_id',
        'tmpSave' => 'tmp_save',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('needAssignInfo', $this->needAssignInfo, true);
        Model::validateRequired('operationUids', $this->operationUids, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->flowVersion) {
            $res['flow_version'] = $this->flowVersion;
        }
        if (null !== $this->needAssignInfo) {
            $res['need_assignInfo'] = $this->needAssignInfo;
        }
        if (null !== $this->operationUids) {
            $res['operation_uids'] = $this->operationUids;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->tmpSave) {
            $res['tmp_save'] = $this->tmpSave;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiRhinoMosLayoutOperationdefsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['flow_version'])){
            $model->flowVersion = $map['flow_version'];
        }
        if(isset($map['need_assignInfo'])){
            $model->needAssignInfo = $map['need_assignInfo'];
        }
        if(isset($map['operation_uids'])){
            if(!empty($map['operation_uids'])){
                $model->operationUids = $map['operation_uids'];
            }
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['tmp_save'])){
            $model->tmpSave = $map['tmp_save'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 版本：如果为空，查生效版本；不为空，查指定版本
     * @var int
     */
    public $flowVersion;

    /**
     * @description 是否需要分配信息
     * @var bool
     */
    public $needAssignInfo;

    /**
     * @description 工序唯一ID
     * @var array
     */
    public $operationUids;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 查询暂存版本
     * @var bool
     */
    public $tmpSave;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

}
