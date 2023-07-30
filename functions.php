add_filter('gettext', 'change_vendor_string');

function change_vendor_string($translated) {
    $translated = str_ireplace('Old String 1', 'New String 1 here', $translated);
    $translated = str_ireplace('Old String 2', 'New String 2 here', $translated);
	  $translated = str_ireplace('Old String 3', 'New String 3 here', $translated);
	  $translated = str_ireplace('Old String 4', 'New String 4 here', $translated);
    return $translated;
}
