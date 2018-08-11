---
title: 利用 Shadowsocks 科学上网
date: 2017-11-18 13:27:47
tags:
	- Shadowsocks
	- Proxifier
	- iTerm2
	- oh-my-zsh
categories: 
	- 科学上网
---

> 城里的人想出去，城外的人想进来 ---《围城》

# Mac OS

* 首先我们需要一把梯子爬出去，在墙内很多事情都没法做，你懂的！爬墙用到的梯子有很多这里我选择 [ShadowsocksX-NG](https://github.com/shadowsocks/ShadowsocksX-NG) 您也可以上 Github 自行搜索。

{% asset_img ShadowsocksX-NG.png ShadowsocksX-NG %}

* 当然 Shadowsocks 只是一把梯子，你需要一个出去的通道搭载 Shadowsocks 的服务器，[秋水逸冰](https://teddysun.com/)有一篇文章专门介绍如何在服务器上搭建 Shadowsocks。当然如果你实在想要可以尝试联系我！<!-- more -->

* 安装好后您需要配置您的 ShadowsocksX-NG 具体可以看下图。

{% asset_img ShadowsocksX-NG-config.png 配置ShadowsocksX-NG %}

## 终端下科学上网

* Mac OS 的终端我极力推荐 [iTerm2](https://www.iterm2.com/)。

{% asset_img iterm2.png iTerm2 %}

* 安装 oh-my-zsh 让你的终端变的无比的美妙，打开终端执行如下命令即可。

{% asset_img ohmyz.png ohmyz %}

```
sh -c "$(curl -fsSL https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"
```

* 在用户目录下修改 .zshrc 文件。

```
vim ~/.zshrc
```

* 在最后面添加下面代码。

```
# ShadowsocksX-NG 终端下科学上网
export http_proxy=http://127.0.0.1:1087
export https_proxy=http://127.0.0.1:1087
```

{% asset_img zshrc.png 配置文件.zshrc %}

最后执行 `source .zshrc`  重新加载 .zshrc 文件，让设置生效。

# Windows

* 首先在 Github 上搜索 [Shadowsocks-windows](https://github.com/shadowsocks/shadowsocks-windows) 下载后打开即可，具体设置和 Mac OS 类似，开启后可以对所有浏览器访问网站生效，也就是软件没办法达到翻墙的效果。如果想软件也能翻墙我推荐 [Proxifier](https://www.proxifier.com/) 来搭配 Shadowsocks

{% asset_img Proxifier.png Proxifier %}

* Shadowsocks + Proxifier 只是对 TCP 协议有效，但是一些游戏基本是用 UDP 协议的所以想要愉快的玩游戏（比如吃鸡）就需要另辟蹊径了！

* 目前我玩吃鸡是利用路由器开启UDP模式翻墙，那些所谓的吃鸡加速器无非也是做了类似的效果来达到加速的目的。

{% asset_img Padavan.png 小米路由器3刷Padavan后ss翻墙 %}