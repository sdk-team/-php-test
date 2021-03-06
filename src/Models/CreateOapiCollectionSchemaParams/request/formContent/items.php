<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent\items\props;

class items extends Model {
    protected $_name = [
        'props' => 'props',
        'componentName' => 'component_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->props) {
            $res['props'] = null !== $this->props ? $this->props->toMap() : null;
        }
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['props'])){
            $model->props = props::fromMap($map['props']);
        }
        if(isset($map['component_name'])){
            $model->componentName = $map['component_name'];
        }
        return $model;
    }
    /**
     * @description 控件属性
     * @var props
     */
    public $props;

    /**
     * @description 控件名称
     * @var string
     */
    public $componentName;

}
