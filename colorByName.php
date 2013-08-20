function getColor($string) {
  return substr(strrev(sha1($string)), 0, 6);
} 
