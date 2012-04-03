<?PHP
  function fileFilter ( $strEntry )
  {
    if ( is_file ( $strEntry ) && ! is_link ( $strEntry )
         && ( substr ( $strEntry, -4 ) === '.php'
         || substr ( $strEntry, -5 ) === '.html' ) )
    {
      return $strEntry;
    }
    else
    {
      return FALSE;
    }
  }

  $arDir = scandir( './' );

  $arFiles = array_filter ( $arDir, 'fileFilter' );

  // Anwendungsbeispiel
  print ( '<pre>' );

  var_dump ( $arFiles );

  print ( '</pre>' );
?> 