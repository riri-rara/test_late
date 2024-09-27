```mermaid
erDiagram
    USERS {
        bigInt id PK
        varchar name
        varchar email
        varchar password
        timestamp created_at
        timestamp updated_at
    }

    CATEGORIES {
        bigInt id PK
        varchar content
        timestamp created_at
        timestamp updated_at
    }

    CONTACTS {
        bigInt id PK
        bigInt category_id FK
        varchar first_name
        varchar last_name
        tinyInt gender
        varchar email
        varchar tell
        varchar address
        varchar building
        text detail
        timestamp created_at
        timestamp updated_at
    }

    CONTACTS ||--o{ CATEGORIES : "belongs to"
    CONTACTS ||--o{ USERS : "created by"


Fastionably_Late

環境構築

 Dockerビルド
1. `git clone リンク`
2. `docker-compose up -d --build`

MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて `docker-compose.yml` ファイルを編集してください。

 Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. fortify導入
6. php artisan migrate

使用技術
- PHP 8.0
- Laravel 10.0
- MySQL 8.0
-nginx:1.21.1
 URL
- 開発環境: [http://localhost](http://localhost/)
- phpMyAdmin: [http://localhost:8080](http://localhost:8080/)
