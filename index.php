<?php
//chdir('..');
include_once './src/Epi.php';
Epi::setPath('base', './src');
Epi::init('api');


/*<?php
echo "Hello World, 안녕 주부타<br />"; //echo는 프린트
echo "<div style='color:red'>하이루~</div>";

for( $i =0; $i<100; $i++){
		echo "아하하하하하하하핳<br>";
		?>
		우하하<?=$i?><br>//php에서 가장 많이 사용하는 것 : 변수 출력
		<?php
}

phpinfo(); //서버에 있는 php 정보를 모두 보여줌
?>*/