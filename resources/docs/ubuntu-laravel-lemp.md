---
title: Ubuntu 下配置 Laravel LEMP 环境
date: 2017-11-21 09:24:47
tags:
  - Nginx
  - Ubuntu
  - Laravel
categories: 
	- 服务器配置
---

# 更新 Ubuntu 仓库
```
sudo apt-get update
```

# 安装语言包

```
sudo apt-get install -y language-pack-en-base
```
<!-- more -->
# 设置语言

```
sudo locale-gen en_US.UTF-8
```

# 添加PPA安装PHP7.1（如果你的Ubuntu是 14.04 ）

```
sudo apt-get install software-properties-common
sudo LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php
sudo apt-get update
```

# 安装PHP7.1

```
sudo apt-get -y install php7.1
```

# 安装 Laravel 所需的模块

```
sudo apt-get -y install php7.1-mysql
sudo apt-get install php7.1-fpm
sudo apt-get install php7.1-curl php7.1-xml php7.1-mcrypt php7.1-json php7.1-gd php7.1-mbstring
```

# 安装 Mysql

```
sudo apt-get install mysql-server-5.7
```

# 安装 Nginx

```
sudo apt-get install nginx
```

# 配置 Nginx 和 PHP 让 Laravel 正确运行

* 将 cgi.fix_pathinfo=1 这一行去掉注释并且改为 0

```
sudo vim /etc/php/7.1/fpm/php.ini
```

{% asset_img php.png %}

* 修改 php fpm 中 listen 为 listen = /var/run/php/php7.1-fpm.sock

```
sudo vim /etc/php/7.1/fpm/pool.d/www.conf
```

{% asset_img www.png %}

* 修改 nginx 的配置文件

```
sudo vim /etc/nginx/sites-available/default
```

```
root /var/www/laravel/public;

index index.php index.html index.htm index.nginx-debian.html;

location / {
                # First attempt to serve request as file, then
                # as directory, then fall back to displaying a 404.
                # try_files $uri $uri/ =404;
                try_files $uri $uri/ /index.php?$query_string;
        }

location ~ \.php$ {
                try_files $uri /index.php =404;
                fastcgi_split_path_info ^(.+\.php)(/.+)$;
                fastcgi_pass unix:/var/run/php/php7.1-fpm.sock;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                include fastcgi_params;
        }
```

* 检测 Nginx 并重启

```
sudo service nginx reload
sudo service nginx restart
```

# 创建目录并设置用户组

```
sudo mkdir /var/www
sudo chown www-data:www-data /var/www
sudo chown -R www-data:www-data /var/www/laravel
```
