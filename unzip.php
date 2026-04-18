<?php

  require_once('pclzip.lib.php');
  $archive = new PclZip('site-localhost-20151109-141753.zip');
  if ($archive->extract() == 0) {
    die("Error : ".$archive->errorInfo(true));
  }



?> 