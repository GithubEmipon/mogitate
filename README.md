# mogitate

## 環境構築

**Docker ビルド**

1. `git clone git@github.com:GithubEmipon/mogitate.git
2. DockerDesktop アプリを立ち上げる
3. `docker-compose up -d --build`

mysql:
platform: linux/x86_64(この文追加)
image: mysql:8.0.26
environment:

````

**Laravel環境構築**
1. `docker-compose exec php bash`
2. `composer install`
3. 「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
4. .envに以下の環境変数を追加
``` text
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
````

5. アプリケーションキーの作成

```bash
php artisan key:generate
```

6. マイグレーションの実行

```bash
php artisan migrate
```

7. シーディングの実行

```bash
php artisan db:seed
```
8. シンボリックリンクの実行　
```bash
php artisan storage :link
```
## 使用技術(実行環境)

- PHP8.3.0
- Laravel8.83.27
- MySQL8.0.26

## ER 図

別紙

## URL

- 開発環境：http://localhost/products/register
- 開発環境：http://localhost/products

- phpMyAdmin:：http://localhost:8080/
