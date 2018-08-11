---
title: 基于 Hexo 与 Dropbox 在 Ubuntu 服务器下搭建自己的博客系统
tags:
  - Hexo
  - Dropbox
  - Ubuntu
categories:
  - Blog
date: 2017-11-29 21:17:33
---


> 念念不忘，必有回响。有一口气，点一盏灯，有灯就有人。

{% asset_img hexo-dropbox.png %}<!-- more -->


# Hexo

* [Hexo](https://hexo.io) 是一个快速、简洁且高效的博客框架
* Node.js 所带来的超快生成速度，让上百个页面在几秒内瞬间完成渲染。
* Hexo 支持 GitHub Flavored Markdown 的所有功能，甚至可以整合 Octopress 的大多数插件。
* 只需一条指令即可部署到 GitHub Pages，Heroku 或其他网站。
* Hexo 拥有强大的插件系统，安装插件可以让 Hexo 支持 Jade，CoffeeScript。

# Dropbox

* [Dropbox](https://www.dropbox.com/) 是一款非常好用的免费网络文件同步工具。
* Dropbox 支持各大平台自动同步刷新。

# 安装 Git

* 首先安装 [Git](https://git-scm.com) 输入以下命令进行安装。

```
sudo apt-get install -y git
```

# 安装 Nvm

* 接下来需要安装 [Node.js](http://nodejs.org) 这里我通过安装 [nvm](https://github.com/creationix/nvm) 来管理 node。

* 使用 curl 或 wget 下载 nvm，在终端下输入下面命令的其中一条即可。

```
curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.6/install.sh | bash
wget -qO- https://raw.githubusercontent.com/creationix/nvm/v0.33.6/install.sh | bash
```

* 分别执行下面两条命令即可完成 nvm 的安装。

```
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && . "$NVM_DIR/nvm.sh"
```

* 用 nvm 安装 node 即可。

```
nvm install node
```

# 安装 Hexo

* 执行下面命令即可完成 Hexo 的安装。

```
npm install hexo-cli -g
```

* 如果你没有在服务器上配置 Apache 或 Nginx 的话建议先配置，可以参考我之前写的[Nginx 多站点配置](https://erocode.com/2017/11/20/Nginx-Web-Site/)当然你只需要配置一个站点即可。

* 在服务器上的 /var/www 目录下创建一个名为 blog 的文件夹并初始化为 Hexo 的目录。

```
sudo mkdir /var/www/blog
hexo init blog
```

* 当你看到 INFO  Start blogging with Hexo! 的时候表示 Hexo 已经初始化成功了。

{% asset_img hexo.png %}

* 创建第一篇博文，更多操作请自行翻阅 [Hexo](https://hexo.io) 的官方文档

```
cd /var/www/blog
hexo new blog-name
```

* Hexo 会在 `/var/www/blog/source/_posts` 下创建 blog-name.md 的文件。也就是说 _posts 这个目录下面的 .md 文件就是你需要编写的 markdown 文件。

{% asset_img posts.png %}

* 用 Hexo 编译 markdown 文件生成 html 文件，这些文件在 public 目录下面。

```
hexo g -d
```

{% asset_img public.png %}

* 接下来将 `/var/www/blog/public` 的目录设置为 Nginx 或者 Apache 的站点目录就可以访问你的网站了，效果如下。

{% asset_img blog.png %}

# 配置 Drobox

未完待续 ... ...


