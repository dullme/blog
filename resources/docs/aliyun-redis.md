---
title: 在 ECS 中设置阿里云的 Redis 为公网访问
tags:
  - Redis
  - Aliyun
categories:
  - 服务器配置
date: 2017-11-30 11:27:56
---

> 目前阿里云数据库 Redis 需要通过 ECS 的内网进行连接访问。如果您本地需要通过公网访问云数据库 Redis，可以在 ECS Linux 云服务器中安装 rinetd 进行转发实现。

{% asset_img aliyun-redis.png %}<!-- more -->

# 前提条件

如果您需要从本地 PC 端访问 Redis 实例进行数据操作，可以通过在 ECS 上配置端口映射或者端口转发实现。但必须符合以下前提条件：

* 若 Redis 实例属于专有网络（VPC），ECS 必须与 Redis 实例属于同一个 VPC。
* 若 Redis 实例属于经典网络，ECS 必须与 Redis 实例属于同一节点（地域）。
* 若 Redis 实例开启了 IP 白名单，必须将 ECS 的内网地址加入白名单列表内。

# 安装 rinetd

* 在你的阿里云服务器上执行下面三条命令即可安装 rinetd。

```
wget http://www.boutell.com/rinetd/http/rinetd.tar.gz&&tar -xvf rinetd.tar.gz&&cd rinetd
sed -i 's/65536/65535/g' rinetd.c	
mkdir /usr/man&&make&&make install
```

* 创建配置文件 `sudo vim /etc/rinetd.conf` 输入以下内容。

```
0.0.0.0 6379 [Redis链接地址] 6379
logfile /var/log/rinetd.log
```

{% asset_img rinetd.png %}

# 启动 rinetd

* 直接在终端下输入下面命令就可以启动 rinetd

```
rinetd
```
> **注意**

>> * 您可以通过在终端下输入 `echo rinetd >>/etc/rc.local` 将 rinetd 设置为自启动。
>> * 若遇到绑定报错，可以执行 `pkill rinetd` 结束进程，再执行 `rinetd` 启动进程 rinetd。
>> * rinetd 正常启动后， 执行 `netstat -anp | grep 6379` 确认服务是否正常运行。

# 外网访问 Redis

* 输入以下命令进行连接

```
redis-cli -h [ip] -a [Redis实例ID]:[Redis密码]
```

{% asset_img client.png %}

> <font color="red"> **注意**：如果外网访问发现连接不上，请务必查看您的 ECS 有没有开放 6379 这个端口。</font>