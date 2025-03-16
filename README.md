# P.A.N.D.A - Laravel版 🥋📊

武道・格闘技教室（Dojo）向けの管理システム。  
道場の生徒管理、出席管理、評価管理、通知機能を提供し、指導者の負担を軽減する。
ブラジル国立高等専門学校（高専）での卒業作品として PHP、HTML、CSSを用いて開発した、
P.A.N.D.A (Programa de Acompanhamento e Notificação para Dojos e Atividades)をLaravelを用いて再構築したもの

## 🌟 特徴
- **Laravel で開発**: モダンなPHPフレームワークを使用
- **生徒管理**: 生徒の登録・編集・削除
- **出席管理**: 授業ごとの出席確認
- **評価管理**: 昇級試験の記録と合否判定
- **通知機能**: 生徒・保護者への連絡送信

---

## 📂 プロジェクト構成

```
📂 laravel-PANDA/
 ├── app/             # アプリケーションのロジック
 ├── bootstrap/       # フレームワークのブートストラップ
 ├── config/          # 設定ファイル
 ├── database/        # マイグレーション、シーディング
 ├── public/          # 静的ファイル（CSS, JS, 画像）
 ├── resources/       # ビュー（Bladeテンプレート） & フロントエンド
 ├── routes/          # ルート定義 (web.php, api.php)
 ├── storage/         # ログやキャッシュ
 ├── tests/           # テストコード
 ├── .env.example     # 環境変数設定サンプル
 ├── artisan          # Artisan CLI
 ├── composer.json    # PHPパッケージ管理
 ├── README.md        # 本ドキュメント
 └── ...
```

---

## 🚀 環境構築 & セットアップ

### **1️⃣ クローン & 環境設定**
```bash
git clone https://github.com/YujiSK/laravel-PANDA.git
cd laravel-PANDA
cp .env.example .env
```

### **2️⃣ 依存関係のインストール**
```bash
composer install
npm install
```

### **3️⃣ アプリキーの生成**
```bash
php artisan key:generate
```

### **4️⃣ データベース設定**
`.env` ファイルを編集し、DB接続情報を設定。  
設定後、以下のコマンドを実行してマイグレーションを実行：
```bash
php artisan migrate --seed
```

### **5️⃣ サーバー起動**
```bash
php artisan serve
```
ブラウザで `http://127.0.0.1:8000` にアクセス！

---

## 🏆 **プロジェクト概要**

### 🎯 **コンセプト**
P.A.N.D.Aは、道場運営を効率化するためのWebシステムです。  
小規模道場向けに無料で提供し、従来の紙ベースの管理をデジタル化します。

### 🚀 **主な機能**
1. **生徒管理**（登録・編集・削除）
2. **出席管理**（授業ごとの出席記録）
3. **評価管理**（昇級試験、合否判定）
4. **通知機能**（先生→生徒/保護者への連絡）
5. **役割管理**（管理者、先生、生徒）

---

## 📌 改善可能性
✅ **月謝管理機能の追加**（支払い履歴）  
✅ **出席データの統計表示**（ダッシュボード強化）  
✅ **モバイル対応の最適化**（スマホUI改善）  

---

## 🌍 **デモサイト**
🔗 **URL:** [準備中]  

---

## 📧 **お問い合わせ**
📩 Email: [yujikavano@gmail.com]  
💼 LinkedIn: [[linkedin.com](https://www.linkedin.com/in/yuji-sunagawa-7036b3248/)]  
