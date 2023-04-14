<?php

// 面试题编码调试

class Itv
{
    // 正则考察
    public function pattern($id_number = "513436196903107115")
    {
        $pattern = "/^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})(\d|X)$/";
        if (preg_match($pattern, $id_number, $matches)) {
            $birth_date = $matches[2] . "-" . $matches[3] . "-" . $matches[4];
            echo "The birth date is: " . $birth_date;
        } else {
            echo "Invalid ID number";
        }
    }

    // 格式转换方式
    public function formatNumber($number = 1234567890)
    {
        echo number_format($number) . PHP_EOL;
        echo preg_replace('/(?<=\d)(?=(\d{3})+(?!\d))/u', ',', $number) . PHP_EOL;
        echo strrev(implode(',', str_split(strrev($number), 3))) . PHP_EOL;
        // echo str_replace("000", ",", sprintf("%'.09d", $number)). PHP_EOL;
        echo $this->formatNumberHandle($number);
    }

    public function formatNumberHandle($num)
    {
        if (strlen($num) <= 3) {
            return $num;
        } else {
            return $this->formatNumberHandle(substr($num, 0, -3)) . ',' . substr($num, -3);
        }
    }

    // Reverse a string using only strlen

    // 文件页面、行数、单词
    public function fileHandle()
    {
        // 获取文件
        $file_path = "path/to/novel.txt";
        $search_term = "hello";

        // 读取文件内容
        $file_handle = fopen($file_path, "r");

        // 初始化页码、行数、位置
        $page_num = 1;
        $row_num = 1;
        $word_num = 1;

        // 遍历文件内容
        while (!feof($file_handle)) {
            $line = fgets($file_handle);

            // 内容搜索匹配
            if (strpos($line, $search_term) !== false) {
                // 输出页码、行数、位置
                echo $search_term . ": p" . $page_num . ",r" . $row_num . ",w" . $word_num . ";";
            }

            // 检查行是否包含页码
            if (strpos($line, "PAGE") !== false) {
                // 增加页码，重置行数、位置计数
                $page_num++;
                $row_num = 1;
                $word_num = 1;
            } else {
                // 行数增加、位置计数重置
                $row_num++;
                $word_num = 1;
            }

            // 遍历每个文字
            $words = explode(" ", $line);
            foreach ($words as $word) {
                // 检索匹配
                if (strpos($word, $search_term) !== false) {
                    // 输出页码、行数、位置
                    echo $search_term . ": p" . $page_num . ",r" . $row_num . ",w" . $word_num . ";";
                }

                $word_num++;
            }
        }
    }
}

$itv = new Itv();
$itv->reverseString();
