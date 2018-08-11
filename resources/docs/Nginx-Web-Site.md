---
title: Nginx 多站点配置
date: 2017-11-20 12:04:18
tags:
  - Nginx
  - Ubuntu
categories: 
	- 服务器配置
---

{% asset_img ubuntu.png ubuntu %}<!-- more -->

> 通常我都会在我的 Ubuntu 服务器中配置多个站点，为了自己方便顺手写下了这篇文章。如果你刚好需要，希望能帮助到你！

# 安装 Nginx

* 在 Ubuntu 系统中我都会使用 apt-get 命令来安装软件。

```
sudo apt-get install nginx
```

* 接下来可以创建两个目录进行多站点的设置，其中 domain-first.com 和domain-second.com 为你要设置的多站点的域名。

```
sudo mkdir /var/www/domain-first.com
sudo mkdir /var/www/domain-second.com
```

* 这里我们可以给 www 目录 www-data 的权限。

```
sudo chown -R www-data:www-data /var/www
```


* 在 one 和 two 两个目录下分别创建两个 html 文件，html 内容可以自己随便写到时候访问的时候能区分即可！

```
sudo vim /var/www/domain-first.com/index.html
sudo vim /var/www/domain-second.com/index.html
```

# 修改 Nginx 配置

* Nginx 的默认配置文件在 /etc/nginx/sites-available 下的一个名为 default 文件， 但是我们配置多站点可以将这个文件删除然后自己重新创建。

```
sudo rm -fr /etc/nginx/sites-available/default
```

* 接着我们为上面的两个域名 domain-first.com 和 domain-second.com 分别创建两个配置文件。

```
sudo vim /etc/nginx/sites-available/domain-first.com
sudo vim /etc/nginx/sites-available/domain-second.com
```

* 内容如下， 注意修改下面的 domain-first 分别为你要配置的域名。

```
server {
        listen 80;
        listen [::]:80;

        root /var/www/domain-first.com;
        index index.html index.htm index.nginx-debian.html;

        server_name domain-first.com www.domain-first.com;

        location / {
                try_files $uri $uri/ =404;
        }
}
```

* 配置完成后我们需要将这两个文件软链接到 /etc/nginx/sites-enabled 下。

```
sudo ln -s /etc/nginx/sites-available/domain-first.com /etc/nginx/sites-enabled/
sudo ln -s /etc/nginx/sites-available/domain-second.com /etc/nginx/sites-enabled/
```

* 所有设置都完成后我们可以执行如下命令查看配置文件是否正常。

```
sudo nginx -t
```

* 如果显示 OK 等字符说明 Nginx 配置正常可以重启 Nginx 服务器来让设置生效了。

```
sudo service nginx restart
```

* 好了 Nginx 的多站点配置就是这么简单，后续你要增加站点只要在 sites-available 目录下创建新的站点，然后软链接到 sites-enabled 后重启服务即可。