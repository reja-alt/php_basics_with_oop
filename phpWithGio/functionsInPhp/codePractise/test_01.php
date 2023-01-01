<?php
    const BR = '<br>';
    function sys_dump($var, $isExit = false)
    {
        var_dump(is_array($var));
        $preStyle = 'padding: 10px; background-color: #f2f2f2; border: 1px solid #ddd; border-radius: 5px;';
        if ($var && (is_array($var) || is_object($var))) {
            echo '<pre style="' . $preStyle . '">';
            if (is_array($var)) {
                print_r($var);
                echo '</pre>';
            } else if (is_object($var)) {
                echo (new \Reflectionclass($var));
                echo '</pre>';
            }
        } else {
            echo '<pre style="' . $preStyle . '">';
            var_dump($var);
            echo '</pre>';
        }
        if ($isExit) {
            exit();
        }
    }  

    $numbers = [43,546,65,675];
    sys_dump($numbers);

    function sys_write_file($file, $contents)
    {
        if (file_exists($file) && $contents != '') {
            $fp = fopen($file, 'w+');
            if (flock($fp, LOCK_EX)) {
                // return 1;
                fwrite($fp, $contents);
                flock($fp, LOCK_UN);
                return true;
            } else {
                return false;
            }
        } else {
            throw new \Exception('Invalid file or invalid written contents!');
        }
        return false;
    }

    echo sys_write_file('file.php', "print something");

    function sys_download_file($path, $name = null, $isRemote = false, $proxy = '')
    {
    
        $fileRelativePath = $path;
        $savedFileName = $name;
        if (!$savedFileName) {
            $file = pathinfo($path);
            if (!empty($file['extension'])) {
                $savedFileName = $file['basename'];
            } else {
                $errMsg = 'Extension get failed, parameter \'name\' is required!';
                throw new \Exception($errMsg);
                return false;
            }
        }
    
        // 如果是远程文件，先下载到本地
        if ($isRemote) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $path);
            if ($proxy != '') {
                curl_setopt($ch, CURLOPT_PROXY, $proxy);
            }
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
            $fileContent = curl_exec($ch);
            curl_close($ch);
    
            // 写入临时文件
            $fileRelativePath = tempnam(sys_get_temp_dir(), 'DL');
            $fp = @fopen($fileRelativePath, 'w+');
            fwrite($fp, $fileContent);
        }
    
        // 执行下载
        if (is_file($fileRelativePath)) {
            header('Content-Description: File Transfer');
            header('Content-type: application/octet-stream');
            header('Content-Length:' . filesize($fileRelativePath));
            if (preg_match('/MSIE/', $_SERVER['HTTP_USER_AGENT'])) { // for IE
                header('Content-Disposition: attachment; filename="' . rawurlencode($savedFileName) . '"');
            } else {
                header('Content-Disposition: attachment; filename="' . $savedFileName . '"');
            }
            readfile($fileRelativePath);
            if ($isRemote) {
                unlink($fileRelativePath); // 删除下载远程文件时对应的临时文件
            }
            return true;
        } else {
            throw new \Exception('Invalid file: ' . $fileRelativePath);
            return false;
        }
    }

    function sys_mkdir($path, $mod = 0777)
    {
        if (!is_dir($path)) {
            return (mkdir($path, $mod, true)) ? true : false;
        }
        return false;
    }

    var_dump(sys_mkdir('D:\Sastho Seba\test183'));

    function sys_substr($str, $length, $start = 0, $showEllipsis = false)
    {
        $strFullLength = 0; // 字符串完整长度
        $finalStr = '';
        if (function_exists('mb_substr') && function_exists('mb_strlen')) {
            $strFullLength = mb_strlen($str, 'utf8');
            $finalStr = mb_substr($str, $start, min($length, $strFullLength), 'utf8');
        } else {
            // header('Content-Type:text/html;charset=utf8');
            $arr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
            $strFullLength = count($arr);
            $finalStr = join('', array_slice($arr, $start, min($length, $strFullLength)));
        }
        if ($showEllipsis && $length < $strFullLength) {
            $finalStr .= '...';
        }
        return $finalStr;
    }   

    echo sys_substr("Welcome to the online tutorials!", 5) . '<br>';

    function sys_date($format, $timestamp = -6, $zone = 8)
    {
        // var_dump(intval($timestamp));
        $timestamp = intval($timestamp) > 0 ? intval($timestamp) : time();
        return gmdate($format, $timestamp + $zone * 3600);
    }
    echo sys_date('M d Y H:i:s') . BR;

    function sys_idcard($id)
    {
        $idcardInfo = [];
    
        // 验证长度
        $len = strlen($id);
        // return $len;
        // if ($len != 15 && $len != 18) {
        //     return false;
        // }
    
        // 验证所属区域
        $allArea = array(
            11 => "北京",  12 => "天津", 13 => "河北",   14 => "山西", 15 => "内蒙古", 21 => "辽宁",
            22 => "吉林",  23 => "黑龙江", 31 => "上海",  32 => "江苏",  33 => "浙江", 34 => "安徽",
            35 => "福建",  36 => "江西", 37 => "山东", 41 => "河南", 42 => "湖北",  43 => "湖南",
            44 => "广东", 45 => "广西",  46 => "海南", 50 => "重庆", 51 => "四川", 52 => "贵州",
            53 => "云南", 54 => "西藏", 61 => "陕西", 62 => "甘肃", 63 => "青海", 64 => "宁夏",
            65 => "新疆", 71 => "台湾", 81 => "香港", 82 => "澳门", 91 => "国外"
        );
        $getSubStr = substr($id, 0, 2);
        $idcardInfo['province'] = $allArea[substr($id, 0, 2)];
        // return $idcardInfo;
        // return !$idcardInfo['province'];
        if (!$idcardInfo['province']) {
            return false;
        }
    
        // 验证出生日期
        $isValidBirthdayDate = function($birthday) {
            return $birthday;
            $birthday = strlen($birthday) == 6 ? intval('19' . $birthday) : intval($birthday);
            
            $year = substr($birthday, 0, 4);
            $currYear = intval(date('Y'));
            if ($year < ($currYear - 110) || $year > $currYear) {
                return false; // 出生年份大于今年或小于110岁，都是无效的
            }
            return $birthday == date('Ymd', strtotime($birthday)) ?: false;
        };
        // return $len;
        $birthday = $len == 18 ? substr($id, 6, 8) : substr($id, 6, 6);
        // return $birthday;
        if ($isValidBirthdayDate($birthday)) {
            $idcardInfo['birthday'] = date('Y年m月d日', strtotime($birthday));
        } else {
            return false;
        }
    
        // 根据身份证号长度采用不同规则进行校验
        if ($len == 18) {
    
            // 验证身份证校验码，根据国家标准GB 11643-1999
            // $factor 加权因子
            // $verifyCodeList 校验码对应值
            $isValidVirifyCode = function($id) {
                $factor = [7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2];
                $verifyCodeList = ['1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'];
                $id17 = substr($id, 0, 17);
                $sum = 0;
                $len = strlen($id17);
                for ($i = 0; $i < $len; $i++) {
                    $sum += $id17[$i] * $factor[$i];
                }
                $mode = $sum % 11;
                return $verifyCodeList[$mode] == strtoupper(substr($id, 17, 1)) ?: false;
            };
            if (!$isValidVirifyCode($id)) {
                return false;
            }
    
        } else if ($len == 15) {
    
        }
    
        // 获取性别信息
        // 18 位身份证是滴 17 位；15 位身份证是滴 15 位
        $sexId = $len == 18 ? substr($id, 16, 1) : substr($id, 14, 1);
        $idcardInfo['sex'] = $sexId % 2 == 0 ? '女' : '男';
    
        // 合法身份证号码，返回身所包含的具体信息
        return $idcardInfo;
    }

    var_dump(sys_idcard(825094394657456787));
?>