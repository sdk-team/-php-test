<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProcessWorkrecordTaskResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProcessWorkrecordTaskResponseBody\result\list_;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'list' => 'list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->list) {
            $res['list'] = [];
            if(null !== $this->list && is_array($this->list)){
                $n = 0;
                foreach($this->list as $item){
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = [];
                $n = 0;
                foreach($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否有更多数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 列表
     * @var array
     */
    public $list;

}
