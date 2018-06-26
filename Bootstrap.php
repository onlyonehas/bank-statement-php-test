<?php
/**
 * @author Hassan
 * @package test
 *
 */
class Bootstrap
{
	public static function main($argv)
	{
		print_r('Reading file .. '.$argv[1]); 
		$fileName=$argv[1];
		if($argv){
			self::readingFile($fileName);	
		}else{
			echo 'Please provide valid path e.g. "C:\Users\hassa_000\Desktop\PHP test Task\statement.php"';

		}
	}


	public function readingFile($fileName) {
		$formattedName=split("'", $fileName);
		echo $formattedName;
		$currentPath=getcwd().'\\'.$formattedName;
		echo($currentPath);
		echo  "...\n";
		if ($handle = readfile($currentPath)) {
		    while (false !== ($entry = readpath($handle))) {
		      echo $entry.'/n';
		    }
		closedir($handle);
		}
    	
	}


}
Bootstrap::main($argv);


