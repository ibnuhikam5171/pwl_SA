<!Doctype html>
<html>
<body>

	<?php
	$teks="Ali Ma'ruf senang belajar PHP!<br>";
	echo "<h2>PHP mudah digunakan</h2>";
	echo("Hello world!<br>");
	echo $teks;
	echo "teks", "ini", "dibuat","banyak parameter"; 
	?>
</body>
</html>


<!Doctype html>
<html>
<body>
	<?php
	$txt1 = "Belajar PHP";
	$txt2 = "Fakultas Ilmu Komputer";
	$x = 5;
	$y = 4;
	$ret=print("Hello World!");
	print"<h2>".$txt1."</h2>";
	print "Belajar Pemrograman Web di ".$txt2."<br>";
	print $x + $y;
	?>
</body>
</html>

$siswa = array('Arif','Beta','Cici');
echo '<pre>';
	print_r($siswa);
echo '</pre>';

<?php 
$nama = 'Agus';
var_dump($nama); // Hasil string(4) "Agus"

$siswa = array (
	'nama' => array("Arif",'Beta','Cici'),
	'jurusan' => 'informatika',
	'semester' => 1,
	1 =>'Jakarta',
	2 => 'Surabaya'
);

echo'<pre>'; var_dump($siswa); echo '</pre>';
?>

<!DOCTYPE html>
<html>
<body>
 
<?php
//ini teks yg tdk dieksekusi oleh engine php
/*
Ini adalah blok 
baris 
komentar 
*/
?>
 
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<?php
function fungsi1() {
  $x = 5; // local scope
  echo "<p>Variable x  di dlm fungsi: $x</p>";
} 
fungsi1();
// menggunakan  variabel x di luar fungsi  akan mengakibatkan error
echo "<p>Variable x di luar fungsi : $x</p>";
?>
</body>
</html>



<?php
	$x = 5;
	$y = 10;

	function fungsi1() {
		   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		   $y = $x + $y;
	}
	fungsi1();
	echo $y; // hasil = 15
?>


<?php 
	function fungsi1() {
		static $x = 0;
		echo $x;
		$x++;
	}

	fungsi1();
	fungsi1();
	fungsi1();
?>


<?php 
	$x= "Hello World!";
	$y = "Hello World!";

	echo $x;
	echo"<br>";
	echo $y;
?>

<?php
	$x = 5985;
	var_dump($x);
?>

<?php
	$x = 10.365;
	var_dump($x);
?>

$x = true;
	$y = false;
var_dump($x);

<?php 
	$mobil=array("Mitsubishi","Daihatsu","Toyota");
	var_dump($mobil);

?>


<?php
class Car {
	public $color;
	public $model;
	public function__construct($color,$model){
		$this->color=$color;
		$this->model=$model;
	}
	public function message(){
		return "My car is a". $this->color. "".$this->model. "!";
	}
}

$myCar = new Car("black", "Volvo");
echo $myCar ->message();
echo"<br>";
$myCar = new Car("red", "Toyota");
echo $myCar-> message();
?>

<?php 
	$x = "Hello World!";
	$x = null;
	var_dump($x);
?>

$conn = mysqli_connect(localhost,"root","admin","buku");
$fp = fopen("index.php",'r');


<?php 
	define("SALAM", "Selamat Pagi");

	define("mobil",[
		"Honda",
		"Daihatsu",
		"Toyota"
	]);

	function fungsi1(){
		echo SALAM;
	}

	fungsi1();

echo mobil[0];
 ?>