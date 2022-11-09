<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$sql ="SELECT imagem FROM usuarios ";
echo '<table class="table table-bordered">';    
echo '<thead>';
    echo '<tr>';
        echo '<th>Produtos</th>';
    echo '</tr>';
echo '</thead>';
$result = mysqli_query($conexao, $sql);
if (mysqli_num_rows($result) > 0) 
while($row = mysqli_fetch_assoc($result))
{
echo '<tr>';
echo '<img src="'.$row['imagem'].'">';
echo '</tr>';
}       
echo '</table>';    

?>