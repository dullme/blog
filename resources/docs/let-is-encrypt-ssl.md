---
title: 配置 Let's Encrypt SSL 免费证书让网站以 https 方式访问
tags:
  - Let's Encrypt
  - SSL
categories:
  - 服务器配置
date: 2017-11-20 16:37:52
---


{% asset_img let_is_encrypt.png Lets Encrypt %}<!-- more -->

> Let's Encrypt 是一个于2015年三季度推出的数字证书认证机构，将通过旨在消除当前手动创建和安装证书的复杂过程的自动化流程，并推广使万维网服务器的加密连接无所不在，为安全网站提供免费的SSL/TLS证书。

# 准备工作

* 一个域名。
* 一台服务器 这里我使用 Ubuntu。
* 将域名指向服务器。
* 对服务器进行站点配置可以看我之前的文章 [Nginx 多站点配置](https://erocode.com/2017/11/20/Nginx-Web-Site/)。

# 安装 Certbot

{% asset_img certbot.png Certbot %}

* Certbot 是一个操作简便的自动客户端，为您的 Web 服务器提取和部署 SSL/TLS 证书。Certbot 由 EFF 等开发，作为 Let's Encrypt 的客户，之前被称为“官方 Let's Encrypt 客户端”。Certbot 还将与任何其他支持ACME协议的 CA 一起工作。

* 首先在你的 Ubuntu 系统上添加 Package Repository 并更新你的数据源。

```
sudo add-apt-repository ppa:certbot/certbot
sudo apt-get update
```

* 安装 Nginx 版本的 Certbot。

```
sudo apt-get install python-certbot-nginx
```

# 配置 SSL 证书

* 执行下面的命令即可配置 SSL 证书， 其中 domian-first 为你的域名。

```
sudo certbot --nginx -d domian-first.com -d www.domian-first.com
```

* 接下来会提示你输入你的邮箱、同意协议、是否接受邮件消息。

{% asset_img certificate.png %}

* 选择是否直接跳转到 https 如果选择 2 以 http 方式访问则直接会跳转到 https。

{% asset_img https.png %}

* 最后如果你看到如下信息则说明 SSL 证书配置成功了！你现在就可以尝试访问你的网站。

{% asset_img success.png %}

# 更新证书

* Let's Encrypt 的证书一般有效期为 90 天, 我们使用的是 Certbot 在到期之前它会自动帮我们去更新证书，为了验证自动更新是否生效，我们可以执行下面命令来检查，如果没有报错就说明自动更新会正常执行。

```
sudo certbot renew --dry-run
```