# php-zip

function dircopyzip($dir_name,$zip_dir,$zip_name,$tmpdir){

Compressed zip folder.

Using the expansion modules-ZipArchive.
Using the expansion modules-PharData.

Example of use
dircopyzip("./file","./backup/","backup".date("Y-m-d-H-i")".zip","./tmp/");

フォルダをzipに圧縮をします。

拡張モジュール PharData を使用します。
拡張モジュール ZipArchive を使用します。

これらの拡張モジュールがインストールされてない場合、動作しません。
使用例
dircopyzip("./file","./backup/","backup".date("Y-m-d-H-i")".zip","./tmp/");

2017 だいすけだいすけ
