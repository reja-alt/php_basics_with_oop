<?php
    function sys_ip_location($ip)
    {
        $clientIpInfo = [];

        // 淘宝接口
        $apiTaobao = 'http://ip.taobao.com//service/getIpInfo.php?ip=';
        $result1 = json_decode(sys_curl($apiTaobao . $ip), true);
        if ($result1['data'] && !is_string($result1['data'])) {
            $clientIpInfo = [
                'country' => $result1['data']['country'],
                'location' => $result1['data']['region'] . $result1['data']['city'],
                'isp' => $result1['data']['isp'],
                'ip' => $result1['data']['ip']
            ];
        }

        // 新浪接口
        if (!$clientIpInfo) {
            $apiSina = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=';
            $result2 = sys_curl($apiSina . $ip);
            $arr = explode('=', $result2);
            $result2 = json_decode(rtrim($arr[1], ';'), true);
            if ($result2['ret'] == 1) {
                $clientIpInfo = [
                    'country' => $result2['country'],
                    'location' => $result2['province'] . $result2['city'],
                    'isp' => $result2['isp'],
                    // 'ip' => $result2['ip']
                ];
            }
        }

        return $clientIpInfo ?: ['ip' => $ip, 'message' => 'unknown'];
    }
    echo sys_ip_location('1200');
?>
<!-- <!doctype html>
<html>

<head>
    <title>PHP Custom Functions</title>
</head>

<body>

    <h1>PHP Custom Functions</h1>

    <p>The following function allows PHP to easily convert a numeric rating to a visual rating:</p>

    <?php

        // Define a function to visually output a rating
        // $rating - number - the rating to display
        // $total - number - what is the rating out of
        // $color - string - what colour shoudl the stars be
        // $alternate - string - if specified the stars will be displayed using two colours
        function rating_stars ($rating, $total = 5, $color = 'black', $alternate = false) {

            // Start the result with a div using the specified colour
            $html = '<div style="color:'.$color.'">';

            // Loop based on the $total parameter
            for ($i = 0; $i < $total; $i++)
            {

                // If an alternate colour is specified use two different colours for the on and off stars
                if ($alternate) {

                    if ($rating > $i) {
                        $html .= '&#9733; ';
                    } else {
                        $html .= '<span style="color:'.$alternate.'">&#9733;</span> ';
                    }

                // If no alternate is specifed us ful and outlined stars for on and off
                } else {

                    if ($rating > $i) {
                        $html .= '&#9733; ';
                    } else {
                        $html .= '&#9734; ';
                    }
                }
            }

            // Close the original div
            $html .= '</div>';

            // Return the HTML result
            return $html;

        }
        
        echo rating_stars (3);

        echo '<br>';

        echo rating_stars (9, 10);

        echo '<br>';

        $stars = rating_stars (2, 20, 'red', 'grey');
        echo $stars;

        echo '<br>';

        echo rating_stars (4, 5, 'red', 'green');

        echo '<br>';

        echo rating_stars (3, 10, 'blue', 'purple');

        ?>

</body>

</html> -->