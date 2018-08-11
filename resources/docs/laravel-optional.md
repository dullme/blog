---
title: Laravel 5.5 新函数 optional
tags:
  - 函数
  - PHP
categories:
  - Laravel
date: 2017-11-28 14:46:17
---

> 在 Laravel 5.5 中提供了一个新的方法 optional 它可以让我们少写很多判断。


{% asset_img optional.png %}<!-- more -->

# 辅助函数

* 我们经常需要对数据进行判断是否存在，如果 `$result->user` 不存在下面这条就会报错。

```
$nickname = $result->user->nickname;
```

* 为了避免上面的报错我们都会这么写，如果 `$result` 中存在 user 则返回 user 的 nickname 如果不存在返回 null。

```
$nickname = isset($result->user) ? $result->user->nickname : null;
```

* 但是在 Laravel 5.5 中我们可以这么写，得到的结果和上面一致，是不是很简单。

```
optional($result->user)->nickname
```

* 有了 `optional()` 这个方法当你不知道这个对象是否为 null 的时候，我们可以加上它来防止程序报错！

