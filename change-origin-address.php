<?php

/**
 * Plugin Name: Change Origin Address Plugin SHIPPOP
 * Plugin URI: https://www.shippop.com/
 * Description: Change Origin Address Plugin SHIPPOP.
 * Version: 1.0
 * Author: SHIPPOP
 * Author URI: https://www.shippop.com/
 **/


function change_callback($from, $order_id, $order_data)
{
    $simple_address_data = [
        "307" => [
            "province" => "-",
            "state" => "-",
            "district" => "-",
            "postcode" => "10400",
            "address" => "เลขที่ 15 ห้อง 601 ชั้น 6 อาคารเซนจูรี่ เดอะ มูฟวี่ พลาซ่า ถนนพญาไท แขวงถนนพญาไท เขตราชเทวี กรุงเทพมหานคร",
            "name" => "บริษัท​ ชิปป๊อป​ จำกัด​ (สำนักงานใหญ่)",
            "tel" => "021136669"
        ],
        "309" => [
            "province" => "กรุงเทพมหานคร",
            "state" => "คลองเตย",
            "district" => "คลองเตย",
            "postcode" => "10110",
            "address" => "สำนักงานใหญ่ 2525 ชั้น 11 ตึก FYI Center อาคาร 2 ถนนพระรามที่ 4",
            "name" => "Bitkub Online Co., Ltd.",
            "tel" => "020329555"
        ]
    ];

    if (isset($simple_address_data[$order_id])) {
        return $simple_address_data[$order_id];
    }
    return $from;
}
add_filter('shippop_ecommerce_hook_change_origin_address', 'change_callback', 10, 3);
