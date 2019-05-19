# origami-wp-hexo

> Origami wp hexo是一个适用于Origami的WordPress转换Hexo的解决方案

## 使用方法

1. 将origami-export整个文件夹复制至WordPress的文件夹中，并确保权限设置正确。
2. 若您也使用Drone CI即可将blog-source推送到其他仓库，并激活drone以及设置secret即可完成使用，默认为[hexo-theme-suka](https://github.com/SukkaW/hexo-theme-suka)主题，若需其他主题请自行编辑.drone.yml文件
3. 若您未使用Drone CI，您就需要参照.drone.yml编写对应的配置文件。

## secret介绍

| secret               | 例子 | 功能 |
| ------               | ---- | --- |
| wordpress_url        | https://blog.ixk.me | WordPress源站的地址 |
| password             | 123456 | WordPress用户密码(默认读取ID为1的用户) |
| deploy_url           | https://github.com/syfxlin/xxx.git | blog-source仓库地址 |
| deploy_user_name     | syfxlin | Git用户名 |
| deploy_user_email    | syfxlin@gmail.com | Git邮箱地址 |
| deploy_user_password | 123456 | Git密码 |
