---
title: Git 命令集
date: 2018-05-10 17:10:00
tags:
  - Git
categories: 
	- Git
---

## 基本操作
初始化版本 init = initialized
`git init` 

查看当前仓库的状态
`git status` 

添加单个文件或全部文件同时支持通配符
`git add [File]`	 `git add .`

提交代码
`git commit -m“Some description information"`

查看已经提交的内容,退出按Q
`git log`

查看每次操作的日志,退出按Q
`git reflog`

## 修正
修正错误的 commit
`git reset --hard [Hash]` 回滚到某个版本
`git reset --soft [Hash]` 回滚到某个版本 保留当时的修改
`git add .`
`git commit --amend`	修改提交时候的描述`

查看修正错误后的变化
`git show [Hash]`

从缓存区中删除已经 add 后的文件或文件夹
`git rm --cached [File]`
`git rm -r --cached [Directory]`

忽略文件或文件夹
在目录下面创建 .gitignore 文件后设置相应的忽略规则即可

恢复文件的修改
`git checkout -- [File]`

## 分支
查看当前已有的分支
`git branch`

创建分支
`git branch [branchName]`

切换到分支
`git checkout [branchName]`

创建并切换到该分支
`git checkout -b [branchName]`

创建并切换到该远程分支
`git checkout -b [branchName] origin/[branchName]`

合并分支
`git merge [branchName]`

删除分支
`git branch -d [branchName]`

## 冲突
查看冲突的内容
`git diff [File]`

手动修改冲突的内容后执行
`git add .`
`git commit`

## 快捷方式
命令行方式添加 Git alias 配置后 git s = git status
`git config --global alias.s status`

命令行方式删除 Git alias
`git config --global --unset alias.s`

直接编辑 Git 配置文件 根目录下修改 .gitconfig 在 [alias] 下添加快捷方式
[image:5746DDDE-5F73-4F99-8755-1C84AA93118A-1618-0000020DD0ED9CDB/QQ20170719-174431@2x.png]

## 提交代码到GitHub
```
git remote add origin [git path]
git push -u origin master
```

## 放弃修改
`git reset --hard origin/master`

## 设置标签
git tag -a v1.0 -m "诸葛策略初始版本"
git push origin v1.5

## git库所在的文件夹中的文件大致有4种状态
Untracked: 未跟踪, 此文件在文件夹中, 但并没有加入到git库, 不参与版本控制. 通过git add 状态变为Staged.

Unmodify: 文件已经入库, 未修改, 即版本库中的文件快照内容与文件夹中完全一致. 这种类型的文件有两种去处, 如果它被修改, 而变为Modified. 如果使用git rm移出版本库, 则成为Untracked文件

Modified: 文件已修改, 仅仅是修改, 并没有进行其他的操作. 这个文件也有两个去处, 通过git add可进入暂存staged状态, 使用git checkout 则丢弃修改过, 返回到unmodify状态, 这个git checkout即从库中取出文件, 覆盖当前修改

Staged: 暂存状态. 执行git commit则将修改同步到库中, 这时库中的文件和本地文件又变为一致, 文件为Unmodify状态. 执行git reset HEAD filename取消暂存, 文件状态为Modified
