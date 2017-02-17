function dircopyzip($dir_name,$zip_dir,$zip_name,$tmpdir){// 作成zip元 圧縮先dir zipファイル名 有効で適当なリレクトリ
	if(!is_dir($zip_dir)){
		mkdir($zip_dir, 0744, true);
	}
	$phar = new PharData($tmpdir."tmp.tar");
	$zip = new ZipArchive();
	if($zip->open($zip_dir.$zip_name, ZipArchive::CREATE) === true) {
		$it_dir = new RecursiveDirectoryIterator($dir_name);
		$it_file = new RecursiveIteratorIterator($it_dir);
		foreach ($it_file as $fileinfo) {
			if($fileinfo->isFile()){
				$path = $fileinfo->getPathname();
				$zip->addFile($path,$path);
			}
		}
	$zip->close();
	}
}