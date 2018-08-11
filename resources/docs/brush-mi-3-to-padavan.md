---
title: 小米路由器3 刷 Padavan 老毛子固件实现路由器科学上网
tags:
  - Padavan
  - 小米
categories:
  - 路由器
date: 2017-11-24 17:36:40
---


# 准备

* [VirtualBox](https://www.virtualbox.org)
* 已经处理好的虚拟机文件 [百度网盘](http://pan.baidu.com/s/1kUG2Nzh)

# 编译固件

* 打开下载的虚拟机文件后你会看到如下画面，如果你看到的画面不是英文可以输入大写的L切换为英文。

![](/brush-mi-3-to-padavan/prometheus.png)

* 选择 Final operations 下面的 Firmware，即输入 4 则会出现下面界面。

![](/brush-mi-3-to-padavan/firmware.png)

* 接着选择 Build a firmware，即输入 3 编译固件，此过程可能需要较长时间请耐心等待，直到看到如下提示表示编译成功。

![](/brush-mi-3-to-padavan/firmware_success.png)

# 刷机

* 固件编译完成后我们可以看到 Toolchain：OK Firmware：MI-3_3.4.3.9-099.trx 接着输入 4 Flash a firmware 进行刷机。

![](/brush-mi-3-to-padavan/flash.png)

* 当你看到下图时需要注意，如果你选择 1 输入 root 和密码，提示错误时请选择 2 更新你的 IP 地址，这里密码为 SSH 的密码，如果不知道怎么获取密码请看我之前写的[小米路由器3 获取 SSH 权限](https://erocode.com/2017/11/24/ssh-mi-3/)来设置密码，IP 地址为 192.168.31.1。

![](/brush-mi-3-to-padavan/update.png)

* 如果显示 Do you want to backup all partitions? (y/n) 时请输入 y。

![](/brush-mi-3-to-padavan/backup.png)

* 当你看到类似下面的信息时恭喜你刷机成功了！

![](/brush-mi-3-to-padavan/success.png)

# 更新固件为中文

* 进入地址 192.168.1.1 找到下图的位置进行固件更新，[中文固件下载](https://erocode.com/2017/11/24/brush-mi-3-to-padavan/MI-3_3.4.3.9-099.trx)

![](/brush-mi-3-to-padavan/update_file.png)

* 更新后如果无法进入 192.168.1.1 则换成 192.168.123.1 即可

* 之后你可以设置 Shadowsocks 科学上网了

![](/brush-mi-3-to-padavan/padavan.png)

# 提示

* 默认的 Wi-Fi 密码为 1234567890 有人给我微信打赏留言问问题麻烦留下联系方式，以便我加你好友！