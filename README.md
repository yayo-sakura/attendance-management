# 新勤怠管理アプリ
## 環境構築
Dockerビルド

1.git clone git@github.com:yayo-sakura/attendance-management.git

2.docker-compose up -d --build


＊MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.yml ファイルを編集してください。

Laravel環境構築

1.docker-compose exec php bash

2.composer install

3..env.exampleファイルから.envを作成し、環境変数を変更

4.php artisan key:generate

5.php artisan migrate

6.php artisan db:seed


## 使用技術

・PHP 8.4.3

・Laravel 8.83.8

・MySQL 8.0


## ER図
<img width="967" height="576" alt="image" src="https://github.com/user-attachments/assets/cf9edf09-f8c7-4b8f-be41-4c3479528568" />


## URL
・開発環境：[http://localhost/](http://localhost/)

・phpMyAdmin:[http://localhost:8080/](http://localhost:8080/)
