<?php
//chdir('..');
include_once './src/Epi.php';
Epi::setPath('base', './src');
Epi::init('api');

/*라우팅*/
getRoute()->get('/', 'showEndpoints');//시작점(말단) - ex)c언어 main메서드 
getRoute()->run();
/*
 * ******************************************************************************************
 * Define functions and classes which are executed by EpiCode based on the $_['routes'] array
 * ******************************************************************************************
 */

function showEndpoints()
{
	/*$str="이연재";
	  echo "$str"; str이 출력
	  echo '$str'; 이연재가 출력*/

	echo '빠라바라밤 API <br>';
    echo '<ul>
          <li><a href="/">/</a> -> (home)</li>
          <li><a href="/version">/version</a> -> (print the version of the api)</li>
          <li><a href="/users">/users</a> -> (print each user)</li>
        </ul>';
}

?>

