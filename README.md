# Recipe-Diary　- 模写コーディング

## プロジェクト概要
このプロジェクトは、[CodeJump様](https://www.codejump.com/) の模写コーディングです。  
HTML/CSSの学習を目的として、デザインカンプを元にコーディングしました。

## 使用技術
- Laravel
- Blade (Laravelのテンプレートエンジン)
- CSS
- Docker

## インストール方法

1. **リポジトリをクローン**
   ```sh
   git clone https://github.com/srgnair/Recipe-Diary.git
   cp .env.example .env
   cd Recipe-Diary

2. 環境変数の設定 (.env のコピー)
   ```
   cp .env.example .env

4.	コンテナ作成 & 起動
  	```
    docker compose up -d --build

6.	依存関係のインストール
    ```
  	docker compose exec app composer install
    docker compose exec app php artisan key:generate

7.	http://localhost にアクセス


## スクリーンショット

![Image](https://github.com/user-attachments/assets/a7756f12-9018-48d8-82c8-72acaf09deed)

![Image](https://github.com/user-attachments/assets/a8a24a6f-ee15-4f00-9397-c7e7a845edfd)

## ライセンス
このプロジェクトは学習目的のため、商用利用はご遠慮ください。
