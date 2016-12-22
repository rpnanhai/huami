HuaMi
=====

花密(PHP CLI 版本),一个密码生成管理工具，原理和思路详见<a href="https://flowerpassword.com/" target="_blank">花密官网</a>

[![Build Status](https://travis-ci.org/rpnanhai/huami.svg?branch=master)](https://travis-ci.org/rpnanhai/huami)
[![StyleCI](https://styleci.io/repos/76835858/shield?branch=master)](https://styleci.io/repos/76835858)
[![Coverage Status](https://coveralls.io/repos/github/rpnanhai/huami/badge.svg?branch=master)](https://coveralls.io/github/rpnanhai/huami?branch=master)
[![Latest Stable Version](https://poser.pugx.org/rpnanhai/huami/v/stable)](https://packagist.org/packages/rpnanhai/huami)
[![Total Downloads](https://poser.pugx.org/rpnanhai/huami/downloads)](https://packagist.org/packages/rpnanhai/huami)
[![License](https://poser.pugx.org/rpnanhai/huami/license)](https://packagist.org/packages/rpnanhai/huami)


## 安装

```shell
    $ composer global require rpnanhai/huami
```

如果你的 ``~/.composer/vendor/bin`` 没添加到 ``PATH`` 可以:

```shell
    $ export PATH="$PATH:$HOME/.composer/vendor/bin"
```

## 使用

```
Usage:
  huami <password> <key>

Arguments:
  password              your unforget password
  key                   the web sign

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
  a password generate tool
```

例子：

```shell
    $ huami 123 qq
```

如果你是mac系统的话，密码会自动复制到你的粘贴板^v^。

另外如需设置自己的加密key，在项目根目录把 ``config.ini.bak`` 修改为 ``config.ini`` ，内容格式如下：

```
[huami]
strOne=rpnanhai
strTwo=huami
strThree=abcdef123456set
```

安卓版本推荐这个[花密](https://play.google.com/store/apps/details?id=com.zxc.huami&hl=zh_CN)


## License

MIT






