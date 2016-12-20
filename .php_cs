<?php

$year = date('Y');

$header = <<<EOF
The file is part of the rpnanhai/HuaMi

(c) $year rpnanhai <rpnanhai@gamil.com>

This source file is subject to the MIT license that is bundled
with this source code in the file LICENSE.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('vendor')
    ->in(__DIR__)
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);
;

$fixers = array(
    '@PSR2' => true,
    'header_comment' => array('header' => $header),
    'no_empty_statement' => true, //多余的分号
    'no_extra_consecutive_blank_lines' => true, //多余空白行
    'include' => true, //include 和文件路径之间需要有一个空格，文件路径不需要用括号括起来；
    'no_trailing_comma_in_list_call'  => true, //删除 list 语句中多余的逗号；
    'no_leading_namespace_whitespace' => true, //命名空间前面不应该有空格；
    'array_syntax'  => array('syntax' => 'short'), //数组 【】 php版本大于5.4
    'no_blank_lines_after_class_opening' => true, //类开始标签后不应该有空白行；
    'no_blank_lines_after_phpdoc' => true, //PHP 文档块开始开始元素下面不应该有空白行；
    'object_operator_without_whitespace' => true, //(->) 两端不应有空格；
    'binary_operator_spaces'    => true, //二进制操作符两端至少有一个空格；
    'phpdoc_indent'             => true, //phpdoc 应该保持缩进；
    'phpdoc_no_access'          => true, //@access 不应该出现在 phpdoc 中；
    'phpdoc_no_package'         => true,
    'phpdoc_scalar'             => true, //phpdoc 标量类型声明时应该使用 int 而不是 integer，bool 而不是 boolean，float 而不是 real 或者 double；
    'phpdoc_to_comment'         => true, //文档块应该都是结构化的元素；
    'phpdoc_trim'               => true,
    'phpdoc_no_alias_tag'       => array('type' => 'var'),// @type 需要使用 @var 代替；
    'phpdoc_var_without_name'   => true, //@var 和 @type 注释中不应该包含变量名；
    'no_leading_import_slash'   => true, //删除 use 前的空行；
    'no_extra_consecutive_blank_lines'  => array('use'), //删除 use 语句块中的空行；
    'self_accessor'             => true, //在当前类中使用 self 代替类名；
    'no_trailing_comma_in_singleline_array' => true, //PHP 单行数组最后一个元素后面不应该有空格；
    'single_blank_line_before_namespace' => true,//命名空间声明前应该有一个空白行；
    'single_quote'      => true,    //简单字符串应该使用单引号代替双引号；
    'binary_operator_spaces'    => array('align_equals' => true,'align_double_arrow' => true), //等号 => 对齐   symfony是不对齐的
    'no_singleline_whitespace_before_semicolons' => true, //禁止只有单行空格和分号的写法；
    'cast_spaces'   =>   true, //变量和修饰符之间应该有一个空格；
    'standardize_not_equals' => true, //使用 <> 代替 !=；
    'concat_space' => array('spacing' => 'one'), //点连接符左右两边有一个的空格；symfony是没空格
    'ternary_operator_spaces'   => true, //三元运算符之间的空格标准化
    'trim_array_spaces' => true, //数组需要格式化成和函数/方法参数类似，上下没有空白行；
    'unary_operator_spaces' => true, //一元运算符和运算数需要相邻;
    'no_whitespace_in_blank_line' => true, //删除空白行中多余的空格；
    'no_multiline_whitespace_before_semicolons' => true, //分号前的空格
    'no_unused_imports' => true, //删除没用到的use

);



return PhpCsFixer\Config::create()
    ->setRules($fixers)
    ->setFinder($finder)
    ->setUsingCache(false);
