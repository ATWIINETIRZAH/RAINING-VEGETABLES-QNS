// we start by craeting a function that will return the second largest number
function second_largest_number($arrray) {
  // rsort is a function used to arrange the numbers in descending order
  rsort($arrray);
  return $arrray[1];
}

// we initaiate an array 
$numbersss = [5,18,9,56,22,49,87,64];
echo second_largest_number($numbersss);
