# Mapサーバ

画像を動的に生成してopen street mapにoverlayするサンプルです。

以下に環境の構築手順を記述します。

## 環境構築

[Docker](https://docs.docker.com/get-docker/)入ってない場合はインストールが必要です。(macは下記コマンドでインストール可)

```sh
$ brew install docker
```

下記のコマンドでサーバが起動します。

```sh
$ docker-compose up -d
```

[localhost](http://localhost:8080/)にアクセスして確認ができます。
