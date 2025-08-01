<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Af\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展字段，对风险类型的说明
 *
 * @method string getRiskCode() 获取风险码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCode(string $RiskCode) 设置风险码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskCodeValue() 获取风险码详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCodeValue(string $RiskCodeValue) 设置风险码详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class SimpleKindRiskDetail extends AbstractModel
{
    /**
     * @var string 风险码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCode;

    /**
     * @var string 风险码详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCodeValue;

    /**
     * @param string $RiskCode 风险码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskCodeValue 风险码详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RiskCode",$param) and $param["RiskCode"] !== null) {
            $this->RiskCode = $param["RiskCode"];
        }

        if (array_key_exists("RiskCodeValue",$param) and $param["RiskCodeValue"] !== null) {
            $this->RiskCodeValue = $param["RiskCodeValue"];
        }
    }
}
