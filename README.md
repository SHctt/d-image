# 修改env文件

```
mv example.env .env
vi .env
```

设定docker-compose文件；
修改数据库相关设定后“：wq”保存；

## 启动环境

```
docker-compose up -d
```

## 导入数据库文件

访问相应的端口，进入phpmyadmin导入数据库；

## 安装面板
```
docker-compose exec php /bin/bash
```
进入php容器执行相关安装操作

```
composer install
cp config/.config.example.php config/.config.php
cp config/appprofile.example.php config/appprofile.php
vi config/.config.php
```
修改面板配置


```
chmod -R 755 storage
chmod -R 777 /mnt/app/www/storage/framework/smarty/compile/
```
设定相关权限

```
php xcat User createAdmin
php xcat Tool initQQWry
php xcat ClientDownload
```
初始化站点设置

## 使用
设定部分定时任务；

*/1 * * * * /usr/local/bin/php /mnt/app/www/xcat  Job SendMail
*/1 * * * * /usr/local/bin/php /mnt/app/www/xcat  Job CheckJob
0 */1 * * * /usr/local/bin/php /mnt/app/www/xcat  Job UserJob
0 0 * * * /usr/local/bin/php -n /mnt/app/www/xcat Job DailyJob
30 23 * * * /usr/local/bin/php /mnt/app/www/xcat sendDiaryMail

5 0 * * * /usr/local/bin/php /mnt/app/www/xcat FinanceMail day
6 0 * * 0 /usr/local/bin/php /mnt/app/www/xcat FinanceMail week
7 0 1 * * /usr/local/bin/php /mnt/app/www/xcat FinanceMail month

*/1 * * * * /usr/local/bin/php /mnt/app/www/xcat DetectGFW

0 1 * * * /usr/local/bin/php -n /mnt/app/www/xcat Backup simple
