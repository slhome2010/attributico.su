<?php

	$filename = $_GET['file'];
	if (!preg_match("/\.(xml|txt|pdf|png|gif|jpg|jpeg|exe|doc|xls|ppt|zip|mp3|)$/",$filename)) {
		exit('Error: Unavalible file extension ' . $filename . '!');
	}
	$file_extension = strtolower(substr(strrchr($filename,"."),1));
	
	switch( $file_extension )
	{
          case "pdf": $ctype="application/pdf"; break;
          case "exe": $ctype="application/octet-stream"; break;
          case "zip": $ctype="application/zip"; break;
          case "doc": $ctype="application/msword"; break;
          case "xls": $ctype="application/vnd.ms-excel"; break;
          case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
          case "mp3": $ctype="audio/mp3"; break;
          case "gif": $ctype="image/gif"; break;
          case "png": $ctype="image/png"; break;  
          case "jpeg":
          case "jpg": $ctype="image/jpg"; break;
          default:    $ctype="application/force-download";
	}
	
	if (!headers_sent()) {
		if (file_exists($filename)) {
			header('Content-Type: '.$ctype.'; charset=utf-8');
			header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($filename));

			if (ob_get_level()) {
				ob_end_clean();
			}

			readfile($filename, 'rb');

			exit();
		} else {
			exit('Error: Could not find file ' . $filename . '!');
		}
	} else {
		exit('Error: Headers already sent out!');
	}