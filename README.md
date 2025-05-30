# 顧客管理システム

## 目的

営業先を管理するシステム

## 環境構築方法

git clone git@github.com:yagidaisuke-l/customer_management.git

cd customer_management

cp .env.example .env

composer install

php artisan sail:install

※mysqlを選択する

./vendor/bin/sail up