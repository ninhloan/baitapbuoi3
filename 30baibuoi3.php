
 <!-- Cau 6 sắp xếp một mảng theo thứ tự tăng dần. -->
 <?php
 echo"<br>Cau 6:";
 function sapXepTangDan($mang){
    sort($mang);
    return $mang;
 }
 $myarray= array(5,8,9,12,1,4,345,35);
 $mangDaSapXep= sapXepTangDan($myarray);
 echo"<pre>"; 
 print_r($mangDaSapXep);
 echo"</pre>";
 

 //Cau 7 Hàm tính giai thừa của một số nguyên dương 
echo"<br> Cau 7:";
function tinhGiaiThua($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * tinhGiaiThua($n - 1);
    }
}
$x= 5;
$ketQua = tinhGiaiThua($x);
echo "<br> Giai thừa của " . $x . "! là " . $ketQua;
//Cau 8 tìm số nguyên tố trong một khoảng cho trước.
echo"<br>Cau 8:";
function is_prime($n) {
    // Kiểm tra xem $n có phải là số nguyên tố hay không
    if ($n < 2) {
      return false;
    }
    for ($i = 2; $i * $i <= $n; $i++) {
      if ($n % $i == 0) {
        return false;
      }
    }
    return true;
  }
  
  function find_primes($a, $b) {
    // Tìm các số nguyên tố trong khoảng [$a, $b]
    $primes = array();
    for ($i = $a; $i <= $b; $i++) {
      if (is_prime($i)) {
        $primes[] = $i;
      }
    }
    return $primes;
  }
  // Ví dụ: tìm các số nguyên tố trong khoảng [10, 20]
  $primes = find_primes(10, 20);
  echo "<br> Các số nguyên tố trong khoảng [10, 20] là: ";
  foreach ($primes as $prime) {
    echo $prime . " ";
  }
  echo "<br>";
  
// Cau 9 tính tổng của các số trong một mảng.
echo"<br> Cau 9:";
function sumArray($arr) {
    return array_sum($arr);
}

$numbers = [1, 2, 3, 4, 5];
$total = sumArray($numbers);
echo "<br>Tổng của các số trong mảng: $total";

  
// Cau 10 in ra các số Fibonacci trong một khoảng cho trước.
echo"<br><br>cau10";
function fibonacci($n) {
    // Tính số Fibonacci thứ $n
    if ($n == 0) {
      return 0;
    }
    if ($n == 1) {
      return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
  
  function print_fibonacci($a, $b) {
    // In ra các số Fibonacci trong khoảng [$a, $b]
    $i = 0;
    while (true) {
      $fib = fibonacci($i);
      if ($fib < $a) {
        $i++;
        continue;
      }
      if ($fib > $b) {
        break;
      }
      echo $fib . " ";
      $i++;
    }
   
  }
  
  // Ví dụ:
  echo" <br>in ra các số Fibonacci trong khoảng [10, 100]:";
  print_fibonacci(10, 100);
  
// Cau 11 kiểm tra xem một số có phải là số Armstrong hay không.
echo"<br><br>cau11";
function is_armstrong($n) {
    // Kiểm tra xem $n có phải là số Armstrong hay không
    // Số Armstrong là số bằng tổng lũy thừa bậc k của các chữ số của nó, với k là số chữ số của nó
    $sum = 0;
    $temp = $n;
    $k = strlen($n);
    while ($temp > 0) {
      $digit = $temp % 10;
      $sum += pow($digit, $k);
      $temp = floor($temp / 10);
    }
    return $sum == $n;
  }
  // Ví dụ: kiểm tra xem 153 có phải là số Armstrong hay không
  if (is_armstrong(153)) {
    echo "<br>153 là số Armstrong";
  } else {
    echo "<br>153 không phải là số Armstrong";
  }
  
//Chèn một phần tử vào một mảng ở vị trí bất kỳ
echo "<br> Câu 12:";
function insertElementAtIndex($array, $element, $index) {
    array_splice($array, $index, 0, $element);
    return $array;
}

// Sử dụng hàm
$myArray = [1, 2, 3, 4, 5];
$newArray = insertElementAtIndex($myArray, 10, 2);
print_r($newArray);
//Loại bỏ các phần tử trùng lặp trong một mảng:
Echo "<br>Câu 13:";
function removeDuplicates($array) {
    $result = array_keys(array_flip($array));
    return $result;
}

// Sử dụng hàm
$myArray = [1, 2, 2, 3, 4, 4, 5];
$newArray = removeDuplicates($myArray);
print_r($newArray);
//Tìm vị trí của một phần tử trong một mảng:
Echo "<br>Câu 14:";
function findElementPosition($array, $element) {
    $position = array_search($element, $array);
    echo "Vị trí của phần tử $element là: $position";
    return $position;
}

// Sử dụng hàm
$myArray = [1, 2, 3, 4, 5];
$element = 3;
findElementPosition($myArray, $element);
//Đảo ngược một chuỗi
Echo "<br>Câu 15:";

function reverseString($str) {
    return strrev($str);
}

// Sử dụng hàm
$myString = "Hello, world!";
$reversedString = reverseString($myString);
echo $reversedString;
//Tính số lượng phần tử trong một mảng:
Echo "<br>Câu 16:";

function countElements($array) {
    $count = count($array);
    echo "Số lượng phần tử trong mảng là: $count";
    return $count;
}
// Sử dụng hàm
$myArray = [1, 2, 3, 4, 5];
 countElements($myArray);
//Kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không:
Echo "<br>Câu 17:";
function isPalindrome($str) {
    if($str == strrev($str)) {
        echo "Chuỗi là chuỗi Palindrome";
    } else {
        echo "Chuỗi không phải là chuỗi Palindrome";
    }
    return strrev($str) ;
}

$string = "radar";
isPalindrome($string); 
//Đếm số lần xuất hiện của một phần tử trong một mảng:
echo"<br><br>18";
function countElementOccurrences($array, $element) {
    $occurrences = array_count_values($array);
    if(isset($occurrences[$element])) {
        return $occurrences[$element];
    } else {
        return 0;
    }
}

// Sử dụng hàm
$myArray = [1, 2, 2, 3, 4, 4, 5, 2];
$element = 2;
$occurrenceCount = countElementOccurrences($myArray, $element);
echo "Số lần xuất hiện của phần tử $element là: $occurrenceCount";
//Sắp xếp một mảng theo thứ tự giảm dần:
echo"<br><br>19";
function sortDescending($array) {
    arsort($array);
    return $array;
}

// Sử dụng hàm
$myArray = [3, 1, 5, 2, 4];
$newArray = sortDescending($myArray);
print_r($newArray);
//Thêm một phần tử vào đầu hoặc cuối của một mảng:
echo"<br><br>20";
function addElementToBeginning($array, $element) {
    array_unshift($array, $element);
    return $array;
}

function addElementToEnd($array, $element) {
    array_push($array, $element);
    return $array;
}

// Sử dụng hàm
$myArray = [2, 3, 4];
$newArrayBeginning = addElementToBeginning($myArray, 1);
$newArrayEnd = addElementToEnd($myArray, 5);
print_r($newArrayBeginning);
print_r($newArrayEnd);
//Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo"<br><br> 21 ";
function findSecondLargest($arr) {
  rsort($arr);
  return $arr[1]; 
}
$arr = [5, 2, 8, 3, 10];
echo findSecondLargest($arr);
//Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo"<br><br> 22 ";
function gcd($a, $b) {
  return ($a % $b) ? gcd($b, $a % $b) : $b;
}

function gcd_lcm($a, $b) {
  $gcd = gcd($a, $b);
  $lcm = ($a * $b) / $gcd;
  return array($gcd, $lcm);
}
$nums = [12, 18]; 
list($gcd, $lcm) = gcd_lcm($nums[0], $nums[1]);
echo "GCD: $gcd, LCM: $lcm";
//Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo"<br><br>23 ";
function isPerfect($num) {
  $sum = 0;
  for($i = 1; $i < $num; $i++) {
    if($num % $i == 0) {
      $sum += $i; 
    }
  }
  return $sum == $num;
}
// Example
echo isPerfect(6) ?"Yes" : "No";
//Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo"<br><br> 24";
function largestOdd($arr) {
  rsort($arr);
  foreach ($arr as $n) {
    if ($n % 2 != 0) {
      return $n;
    }
  }
}
// Example
$arr = [2, 5, 3, 8];
echo largestOdd($arr); // Outputs 5

//Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo"<br><br>25";
function isPrime($num) {
  if ($num < 2) return false; 
  for($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) return false; 
  }
  return true;
}
// Example
echo isPrime(11) ? "Yes" : "No";

//Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo"<br><br>26";
function largestPositive($arr) {
  $largest = 0;
  foreach ($arr as $n) {
    if ($n > $largest && $n > 0) {
      $largest = $n;
    }
  }
  return $largest;
}
$arr = [2, -3, 10, -8];
echo largestPositive($arr);
//Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo"<br><br>27 ";
function largestNegative($arr) {
  $largest = 0;
  foreach ($arr as $n) {
    if ($n < $largest && $n < 0) {
      $largest = $n; 
    }
  }
  return $largest; 
}
$arr = [-2, 3, -5, 8];
echo largestNegative($arr);
//Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.

echo"<br><br>28 ";
function sumOdd($n) {
  $sum = 0;
  for($i = 1; $i <= $n; $i+=2) {
    $sum +=$i;
  }
  return $sum;
}
echo sumOdd(6);
//Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo"<br><br>29";
function perfectSquares($min, $max) {
  $squares = [];
  for($i = $min; $i * $i <= $max; $i++) {
    $squares[] = $i * $i;
  }
  return $squares;
}

// Example
print_r(perfectSquares(1, 30)); // Outputs [1, 4, 9, 16, 25]
//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo"<br><br>30";
function isSubstring($str, $sub) {
  return strpos($str, $sub) !== false; 
}
echo isSubstring("hello", "ell") ? "Yes" : "No";


?>

