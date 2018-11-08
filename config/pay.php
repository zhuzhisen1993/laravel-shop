<?php

return [
    'alipay' => [
        'app_id'         => '2016092000556104',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0oI1YmiaQCpnZfggfujtmHqekYdiTkuPkzupgxPoFXcamk/znCkm2t3WDu9iA1+OSCs9wZu0Zd5uscTigqlU4IaZTV1JoqSRSGUSPE1Zs3QkIIeIUOtC5zTiJMof8sgu/lLTPfFniCPzWsSqxgxZSCx9VvBofO1mklA46AZUP3T8GwKi8NS/o3GTMLd/RtV4hguPhpP67vVzYPMB6Z+nPRIou8HVJ0hz0Z+wH9Y9KJEjrNOrMvEOXW7/VeHOL2SjRw7+COujaZhc2QyGcP+xQhvMW9tttAe0r0G0QwomcHkFdFhHznGBY83G2545Ew/yCFUF2JbAmyYzSpiNBE/X9wIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAwMoNKojEw31q+NbS1lG08dcrma7zgATMyQr4RLT211u4SoT6ezIjCAddUjyW8TytZ7sdVoBrxFJPL5W6aiQgj48Zpw4uPMCiIJyMUvdBX0YjTMMt8rNhZM3suFdxsa6Mio4V2QBXXVuMssKy6ip6OY95igTgObXcyLHZpLQko78cyqgrDk8uPAS+55v9T7unuXzsX7W/yKORRMnuh7Q8RfvkNN2us1SmAy+rKS5dC140D8SZDCP+rn7eMjBi+Jf3hoMvnP1aSCoM4xKkvp7iPjshpB6uyMjyeFdixFdjEx0dnWPZzTdnp/OO/S68eS2PxvD6LBaDNZb3fF+0HLVCvQIDAQABAoIBAQCYbGdCdMXUpck4mmgxiIIeHvfa1wav9ZuPa/vkHot2s46eZErBsl8eDuyKg1r3ufiDpd3JMVmC62yt+5xaJNwVhJdMjBqkb8z/KaaMRe7Ki+KG413loEtlbqY1DPXX/GAjf7joS6vHJQW1o9fe6dyeu7/lDnvVROMdTff8j2zUhHi/40DLOtsRUMWckciVVPM26HEEhJvW6XlbuUywovCN0Hp8U+Vdh12o4lfIWmtb1gZKs/NIfURZ3X8u+qGPJUypbRp7JrKluGGXF85W+G1UWOFRk5oG1yC3PX7H54U9pdeu4pv15YtFwnTfSxdZW4U+tmXzygtJyJtb8HHUZiOhAoGBAPeC3LKv/NAtOe42Ny44CXJzUyhqqy0czuZGQ+U7374/mpMJWoa+zsTP9M44yxIAeq2XaylPzmqa5Z32wYN/xtdwWJRHNLvnygXg7yCpYIvcOduZm4dJr6CokV9ldAaRCiMH8j1faX7PJ1fN/oyEdVXZl6RfsFrbtbsqUyJn2W3ZAoGBAMdmu7D54AJyg+R5QE08nXCY4t9UIEP9HOJX6V26NMKO1f578Hl5Ty+K90+lzsTDoLjYq9EnQJTYvcqvy9p32Wbh8J+r9m3tJOLevKtNkXAQwoOdOvps90fZdMTZgjy9Ji01AXbCRa9cYOlL0Ic0pwAL1aYLKkbJT9Ye0MOBDRmFAoGAAmIRK+tD3OFCmIePGnPRq3duyonUYhfP6imtB6z+538HRvklFP0LUpvJ+J5VXjQA+mDl2Dz7eM1K/q1ciZ6WVIaxY6QX3uNJb6sNwlu/ITmamQGunKvZ9AsLc0avykxlM5ck/vBHPMBT2aWTGNlBo/T3X87IDOfmpQmwSTmEv2kCgYBGiTnV1d5/HyE23gl4CPwsi3idxbWQN2ZTTwPXSvpE5KAgYJllbxsq1z665w1on0cofETzPK5kuPMSUvOKuaCm+z/SS9NleWD1/BLDijHrcZJNWn41ffxPZ0YeKE8gy0xI65oz928NJGGHxXDjkyWMJ6ORFBwFZEsglFAHCIyovQKBgGrdNe5Upp7xJ7jE0KfJojA2/syqM6s8dgZICa0sHq4wxKUYAobUV+3CJl6UN07+LPR6ZPE+5kCagBIuDvBLwMT9yA5ynEr9QgIA4owQLPp7Jm1avcXDXep3KDdo1QlWzolJBKO927hFE/10MqvGBh7jYd+36sAThUFQUwZptg8h',
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