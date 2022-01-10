//seleção de tela via Get
elseif (isset($_GET['tela'])&&checkTela($_GET['tela'])) {
  $_SESSION['op']=$_GET['tela'];
  include 'GUI/'.$_GET['tela'].'.php';
}
//limita telas acessíveis
define('Telas', ['home','tela1','tela2']);
function checkTela($a){
	foreach (tela as $key) {
		if ($key == $a) {
			return $a;
		}
		return "home";
	}
}
