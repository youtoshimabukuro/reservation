# Rese

![image](https://github.com/user-attachments/assets/5df39df8-7921-4a8c-a59e-c80f43f59d0e)

### 作成した目的  
外部の飲食店予約サービスは手数料を取られるので自社で予約サービスを持ちたい。

### アプリケーションURL

### 機能一覧  
会員登録機能  
ログイン機能  
ログアウト機能  
飲食店エリア検索  
飲食店ジャンル検索  
飲食店、店舗名検索  
飲食店予約機能  
ユーザー飲食店予約情報取得  
飲食店お気に入り追加機能  
飲食店予約変更機能  
飲食店追加機能  
飲食店情報変更機能  

### 使用技術
Laravel 8.x  
PHP  
MySQL  

### テーブル設計

### ER図

![スクリーンショット 2024-10-24 004645](https://github.com/user-attachments/assets/94b5ec43-4907-4a5a-a707-8acd141fb411)

### 環境構築

#### Dockerビルド

1. git clone git@github.com:youtoshimabukuro/reservation.git  
2. DockerDesktopアプリを立ち上げる  
3. 名前の変更がなければカウントディレクトリをreservationにする  
4. docker-compose up -d --build  

以降カウントディレクトリはdocker-compose up -d --buildを行ったディレクトリの前提で説明を進めます。

#### Laravel環境構築

1. docker-compose exec php bash 'phpコンテナ内に入るためのコマンド

2からはphpコンテナ内でのコマンド実行 ※1で成功していればphpコンテナ内に入っています

2. composer install 'composerのインストール  
3. composer -v 'composerがインストールが出来ているか確認。成功していれば以下の表示が出ます。

   ![スクリーンショット 2024-10-11 025617](https://github.com/user-attachments/assets/827c3977-2b1f-418c-8d47-639ae9d7104e)

4. cp .env.example .env '.env.exampleファイルをコピーし新たに.envファイルを作成  
5. code .  
6. srcディレクトリ内の.envファイルを開く  
7. 以下のように変更

   ![スクリーンショット 2024-10-11 031118](https://github.com/user-attachments/assets/06954734-22a5-4810-b62a-d13b22fe0a04)

   もし以下のようなエラーがでた場合はexitコマンドを入力しカウントディレクトリへ移動  
   次のコマンドを実行してください sudo chmod -R 777 src/.env  
   またパスワードを求められた際はパスワードを入力  

   ![スクリーンショット 2024-10-11 031624](https://github.com/user-attachments/assets/44db8615-3d09-4c9c-ae2b-cee9e8172b61)

8. php artisan key:generate  
9. ブラウザでlocalhostと検索。成功していれば以下のような画面になります。

   ![スクリーンショット 2024-10-24 005420(2)](https://github.com/user-attachments/assets/0bbce52d-8156-44e2-a3c9-f892537202eb)

   もし以下のようなエラーがでた場合はexitコマンドを入力しカウントディレクトリへ移動  
   次のコマンドを実行してください sudo chmod -R 777 src/*  
   またパスワードが求められた際はパスワードを入力

   ![スクリーンショット 2024-10-11 035146](https://github.com/user-attachments/assets/c12284bc-1027-464f-9ed8-eb7f2f01e3df)

#### 店舗データの追加

1.カウントディレクトリでdocker-compose exec php bashを入力しphpコンテナに入り下記のコマンドを実行する  
  php artisan db:seed

#### 追加店舗の画像フォルダ作成

1.src/storage/app/public下にphotographディレクトリを作成

2.カウントディレクトリでdocker-compose exec php bashを入力しphpコンテナに入り下記のコマンドを実行する  
  php artisan storage:link

##### Rese管理者ログイン方法  
メールアドレス　rese@test.com  
パスワード  reservation_pass
