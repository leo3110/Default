//seleção de tela via Get
elseif (isset($_GET['tela'])&&checkTela($_GET['tela'])) {
  $_SESSION['op']=$_GET['tela'];
  include 'GUI/'.$_GET['tela'].'.php';
}
