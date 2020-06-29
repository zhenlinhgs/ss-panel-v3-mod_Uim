<?php

namespace App\Services;

class AppsProfiles
{
    /**
     * Surge 策略组配置
     *
     * @return array
     */
    public static function Surge()
    {
        $Apps_Profiles = [
            'lhie1' => [
                'Checks' => ['🇭🇰 香港', '🇯🇵 日本', '🇸🇬 坡坡', '🇨🇳 台湾', '🇺🇸 美国', '🇰🇷 韩国', '🇨🇳 中继'],
                'ProxyGroup' => [
                    [
                        'name' => '🍃 Proxy',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🇭🇰 香港', '🇯🇵 日本', '🇸🇬 坡坡', '🇨🇳 台湾', '🇺🇸 美国', '🇰🇷 韩国', '🇨🇳 中继', '🚀 Direct']
                        ]
                    ],
                    [
                        'name' => '🍂 Domestic',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🚀 Direct', '🍃 Proxy', '🇨🇳 中继']
                        ]
                    ],
                    [
                        'name' => '🍎 Only',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🚀 Direct', '🇭🇰 香港', '🇯🇵 日本', '🇸🇬 坡坡', '🇨🇳 台湾', '🇺🇸 美国', '🇰🇷 韩国', '🇨🇳 中继']
                        ]
                    ],
                    [
                        'name' => '☁️ Others',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🍃 Proxy', '🍂 Domestic']
                        ]
                    ],
                    [
                        'name' => '🇭🇰 香港',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(香港|HK)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇯🇵 日本',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(日本|JP)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇸🇬 坡坡',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(新加坡|SG)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇨🇳 台湾',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(台湾|TW)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇺🇸 美国',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(美国|US)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇰🇷 韩国',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(韩国|KR)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇨🇳 中继',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(中继|中转|中国|回国|China)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ]
                ]
            ],
            '123456' => [
                'Checks' => [],
                'ProxyGroup' => [
                    [
                        'name' => '🍃 Proxy',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(.*)'
                        ]
                    ],
                    [
                        'name' => '🍂 Domestic',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🚀 Direct', '🍃 Proxy']
                        ]
                    ],
                    [
                        'name' => '🍎 Only',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🚀 Direct', '🍃 Proxy']
                        ]
                    ],
                    [
                        'name' => '☁️ Others',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🍃 Proxy', '🍂 Domestic']
                        ]
                    ]
                ]
            ]
        ];

        return $Apps_Profiles;
    }

    /**
     * Surfboard 策略组配置
     *
     * @return array
     */
    public static function Surfboard()
    {
        $Apps_Profiles = [
            'lhie1' => [
                'Checks' => ['🇭🇰 香港', '🇯🇵 日本', '🇸🇬 坡坡', '🇨🇳 台湾', '🇺🇸 美国', '🇰🇷 韩国', '🇨🇳 中继'],
                'ProxyGroup' => [
                    [
                        'name' => '🍃 Proxy',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🇭🇰 香港', '🇯🇵 日本', '🇸🇬 坡坡', '🇨🇳 台湾', '🇺🇸 美国', '🇰🇷 韩国', '🇨🇳 中继', '🚀 Direct']
                        ]
                    ],
                    [
                        'name' => '🍂 Domestic',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🚀 Direct', '🍃 Proxy', '🇨🇳 中继']
                        ]
                    ],
                    [
                        'name' => '☁️ Others',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🍃 Proxy', '🍂 Domestic']
                        ]
                    ],
                    [
                        'name' => '🇭🇰 香港',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(香港|HK)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇯🇵 日本',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(日本|JP)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇸🇬 坡坡',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(新加坡|SG)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇨🇳 台湾',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(台湾|TW)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇺🇸 美国',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(美国|US)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇰🇷 韩国',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(韩国|KR)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '🇨🇳 中继',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(中继|中转|中国|回国|China)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ]
                ]
            ],
            '123456' => [
                'Checks' => [],
                'ProxyGroup' => [
                    [
                        'name' => '🍃 Proxy',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(.*)'
                        ]
                    ],
                    [
                        'name' => '🍂 Domestic',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🚀 Direct', '🍃 Proxy']
                        ]
                    ],
                    [
                        'name' => '☁️ Others',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🍃 Proxy', '🍂 Domestic']
                        ]
                    ]
                ]
            ]
        ];

        return $Apps_Profiles;
    }

    /**
     * Clash 策略组配置
     *
     * @return array
     */
    public static function Clash()
    {
        $Apps_Profiles = [
            'lhie1' => [
                'Checks' => ['香港', '日本', '坡坡', '台湾', '美国', '韩国', '中继'],
                'ProxyGroup' => [
                    [
                        'name' => '香港',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(香港|HK)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '日本',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(日本|JP)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '坡坡',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(新加坡|SG)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '美国',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(美国|US)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '台湾',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(台湾|TW)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '韩国',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(韩国|KR)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '中继',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(中继|中转|中国|回国|China)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => 'Proxy',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['香港', '日本', '坡坡', '台湾', '美国', '韩国', '中继']
                        ]
                    ],
                    [
                        'name' => 'Domestic',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['DIRECT', 'Proxy', '中继']
                        ]
                    ],
                    [
                        'name' => 'AsianTV',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['Domestic', 'Proxy', '中继']
                        ]
                    ],
                    [
                        'name' => 'GlobalTV',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['Proxy', '香港', '日本', '坡坡', '台湾', '美国', '韩国', '中继']
                        ]
                    ],
                    [
                        'name' => 'Others',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['Proxy', 'Domestic']
                        ]
                    ]
                ]
            ],
            'ConnersHua_Pro' => [
                'Checks' => ['香港', '日本', '坡坡', '台湾', '美国', '韩国', '中继'],
                'ProxyGroup' => [
                    [
                        'name' => '香港',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(香港|HK)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '日本',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(日本|JP)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '坡坡',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(新加坡|SG)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '美国',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(美国|US)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '台湾',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(台湾|TW)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '韩国',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(韩国|KR)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => '中继',
                        'type' => 'url-test',
                        'content' => [
                            'regex' => '(中继|中转|中国|回国|China|CN)'
                        ],
                        'url' => 'http://www.qualcomm.cn/generate_204',
                        'interval' => 3600
                    ],
                    [
                        'name' => 'PROXY',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['香港', '日本', '坡坡', '台湾', '美国', '韩国', '中继']
                        ]
                    ],
                    [
                        'name' => 'Final',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['PROXY', 'DIRECT']
                        ]
                    ],
                    [
                        'name' => 'ForeignMedia',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['PROXY', '香港', '日本', '坡坡', '台湾', '美国', '韩国', '中继']
                        ]
                    ],
                    [
                        'name' => 'DomesticMedia',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['DIRECT', 'PROXY', '中继']
                        ]
                    ],
                    [
                        'name' => 'Apple',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['DIRECT', 'PROXY']
                        ]
                    ],
                    [
                        'name' => 'Hijacking',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['DIRECT', 'REJECT']
                        ]
                    ]
                ]
            ],
            'ConnersHua_BacktoCN' => [
                'Checks' => [],
                'ProxyGroup' => [
                    [
                        'name' => 'PROXY',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(中继|中转|中国|回国|China)'
                        ]
                    ]
                ]
            ],
            '123456' => [
                'Checks' => ['新加坡', '香港', '美国', '日本', '俄罗斯', '台湾', '加拿大', '英国', '德国', '法国', '马来西亚', '澳大利亚', '印度', '用户信息'],
                'ProxyGroup' => [
                    [
                        'name' => 'Proxy',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['新加坡', '香港', '美国', '日本', '俄罗斯', '台湾', '加拿大', '英国', '德国', '法国', '马来西亚', '澳大利亚', '印度', '用户信息']
                        ]
                    ],
                    [
                        'name' => '新加坡',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(新加坡)'
                        ]
                    ],
                    [
                        'name' => '香港',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(香港)'
                        ]
                    ],
                    [
                        'name' => '美国',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(美国)'
                        ]                        
                    ],
                    [
                        'name' => '日本',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(日本)'
                        ]
                    ],
                    [
                        'name' => '俄罗斯',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(俄罗斯)'
                        ]
                    ],
                    [
                        'name' => '台湾',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(台湾)'
                        ]
                    ],
                    [
                        'name' => '加拿大',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(加拿大)'
                        ]
                    ],
                    [
                        'name' => '英国',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(英国)'
                        ]
                    ],
                    [
                        'name' => '德国',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(德国)'
                        ]
                    ],
                    [
                        'name' => '法国',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(法国)'
                        ]
                    ],
                    [
                        'name' => '马来西亚',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(马来西亚)'
                        ]
                    ],
                    [
                        'name' => '澳大利亚',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(澳大利亚)'
                        ]
                    ],
                    [
                        'name' => '印度',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(印度)'
                        ]
                    ],
                    [
                        'name' => '用户信息',
                        'type' => 'select',
                        'content' => [
                            'regex' => '(用户|剩余流量|过期时间)'
                        ]
                    ]
                ]
            ]
        ];

        return $Apps_Profiles;
    }
}
