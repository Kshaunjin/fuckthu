# 靠北東海神器

<h2>取得Facebook資料</h2>
使用Facebook Graph Api來取得所有「恐怖故事大賽的資料」，關於Graph Api的詳細使用方式可參考Facebook官方說明文件。

<h2>更新資料方式</h2>
使用startup.sh腳本執行getData2.py，運用Facebook Graph Api 取得資料後進行排序，執行完畢會產生data.json，再透過open.php存入資料庫。

<h2>呈現方式</h2>
index.php搭配選取使用的fuction選擇要的資料內容。

<h3>使用套件</h3>
CSS
Bootstrap
