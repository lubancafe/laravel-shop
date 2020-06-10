<?php

return [
    'alipay' => [
        'app_id'         => '2016102700771725',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgmV0aVpNoyhUb9f1avGXqmvo1SdQ0Ob60GyiNW03ahcEX9hxmJD0VZOzNE4w+ip8EBPmX0vvey6OiJRDkUv61TN8FFd99EQnXRYZwhr1DmukCNKOsleHRdOVI92Z+k1U0+FBpm4Yz5G52LbWPV6DqQRi8qTr5uf8UukZuCaiwGDB4AO0k8DBcOE/iv5J37iR7ZLaw0b6gYyAy21KuR8W+HeNp/UD0hWtdEM+FfyNMfTfHpEobF7bqinKRg3F8l1i8szDhKyTwy74ZayRDcROEnQQ4DaHhNUvF8F7MURogxFHCf/NCYRPOj0OBVnBqtfTWXoA4gS3UQQ9c2Veolb6KwIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA7H3ww71LtAODJgCM8/H3GWTRkkLe2qrO0iD8Gomt4h0fywy4jD1ENiXO13evZcfHTI5iJmCmdkzvqenHjtUmF+pHj80deSoDrTOPTbm/+LR8ar+76sVF7w43fXdj/uT1JlNNgtwrSywQG+LxPYJ0WpcF4hnHBwnOfs5uxY1Q8LDIjiXqKQta8Nz7cX2RfYb9Se6Dcg6ry2ERAo65YUhVpCpuvlDvTu2qjmvzAqxFnvOnArYdEQ31u8KoDWuL2Dbsx1knPW/oGmg+tsRbIMQFVN6RS46YpD7R0yk7k1JwxEiOx5Zu8ZWb6acHgfBUK+m1nMkFT/vNeimKIWfnxCeEbwIDAQABAoIBAQC0n/AvIDpc0D3v3YXKoCkxfP5P7sEVVFZIyaajgjqLs+DfjeS6P+UEUlYr3Z7aZv7CaxFt7G3XdyWpqgOgBQ5mP6rOm0QCkeNi+zldjRyhkQBh6/VT975VOo+JRZHbUfYngoJ2C0EJ1iqrkebdKvFBa42zxipsJsJPuc2DF08VtQhYRHXqO7uNHwTjCsVNI1kC/sOOt+qiD7xp9/pSKZ92PmUwxBrUT4u5ee05+5jeUiAX/bS0hgO2VjIJDOTrMd1q00zvk1zSkAwpVRoOkLfvAQRjjT/tGZvM7yoDSVvKXsXvAa8obQSeU32Utn7CfMI9oS4HfeGrhguHhiof22ipAoGBAPs0tO+I+Ze4s5dJIL5R9pTKbtt1muW4NIMkMZeSk1RaJgLvdwwebPXUdBRYXTIGbPgmxVIPuabjouQ+OMAtZ2XLCw1Apr/+s7Fkh9/VdU/kR22lhCvgWq9Q6lZLZi8Z2jOB/kFY0GBM3DfXI0/oZpI/vbUiaWcy0TZvV98XbR09AoGBAPEBWOOtu09vkWG7rxPeEqkKKSTLfBu9o6z9t9BErO0eZHOWDfLg1EETMgWQzz0Iax1MYEMn8G2cSp8WP2cVFqUHa4k0i9fw16X12U6KPGGjGFd4Ol6jM9PWMXXfSoY1wQTDakVJNdiWEPcuB7otTuAwdHYbnvG68lnleVCo0BsbAoGAENDHZ91wb8KSawcfJP5RlkYyw4gM1WHOShULKM1MBXJ/ZuTmwC3tN0uAdbgwjN+3PalCviqFT/Ge/s5XeC3R5ROBauKwBtwi5TYIjmg4kR+D1Igm39UF3QR6m0oyzeZaH+aMwY0Tbc7XUvmYyImTDCkuJsjl612QeadcZ3em+zUCgYEAptq07ORyAxwN/ikPnGSqbKfhNl0+7oHL2M/LvABf7MaW60NfIuEvcmJUxm+sWugCKMWg+72iAnErZJrliHucMuNBOzvK+dT/qCHesjaYeUyOZLiTSMQa9LWdhqryEJsUqDSW1aNLCUlUM52Fsgr+Sc6iQsb6swcoFL7/z60gbzMCgYEA1SIgYjXXiqKly8JtzEb8N5gWtOdv6roFb6MeNd0WUO50LLTlRSzgpg/6T9/IXQT8suL8S67Ju/tPU+bevzPKVgURi6KF43APzrhx7GPFQkdGdyrH/GgWLi9xEKEN8bXh8GpKtu2Or1AqMRVKqbD3T44DuvbVezU2P1e8CIlz+wg=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];