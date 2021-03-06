<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QuerypreentryOapiSmartworkHrmEmployeeParams extends Model {
    protected $_name = [
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMinimum('offset', $this->offset, 0);
        Model::validateMinimum('size', $this->size, 1);
        Model::validateMaximum('size', $this->size, 50);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QuerypreentryOapiSmartworkHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 分页起始值，默认0开始
     * @var int
     */
    public $offset;

    /**
     * @description 分页大小，最大50
     * @var int
     */
    public $size;

}
