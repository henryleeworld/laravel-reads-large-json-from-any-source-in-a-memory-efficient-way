# Laravel 10 從任何來源以記憶體高效方式讀取大尺寸的 JavaScript Object Notation (JSON)

引入 cerbero 的 json-parser 套件來擴增從任何來源以記憶體高效方式讀取大尺寸的 JavaScript Object Notation (JSON)，JSON 文件廣泛用於線上資料交換，尤其是以具象狀態傳輸為基礎的網頁服務出現後，更是如此。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/parse` 來轉換隨機使用者填充資料。

----

## 畫面截圖
![](https://i.imgur.com/4Y7Lekm.png)
> JSON 可維護階層式結構，因此更易於將相關資料保存在單一文件中，並呈現複雜的關聯性