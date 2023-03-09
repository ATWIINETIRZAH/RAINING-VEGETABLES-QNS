// we start by creating a function
function Anagrams($str1, $str2) {

  // we have to remove spaces and change the strings to lowercase and remove any punctuation
  // we use the strtolower and preg_replace functions

  $str1 = strtolower(preg_replace("/[^a-z]+/", "", $str1));
  $str2 = strtolower(preg_replace("/[^a-z]+/", "", $str2));

  // we then sort the characters and compare them 
  return (count_chars($str1, 1) == count_chars($str2, 1));
}

// we then use an if loop to state whether the strings are anagrams or not
if (Anagrams("a gentleman", "elegant man")) {
  echo "These two strings are anagrams.";

} else {
  echo "These two strings are not anagrams.";

}
