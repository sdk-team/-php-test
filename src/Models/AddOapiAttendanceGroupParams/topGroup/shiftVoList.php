<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup;

use AlibabaCloud\Tea\Model;

class shiftVoList extends Model {
    protected $_name = [
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return shiftVoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 班次id
     * @var int
     */
    public $id;

}
