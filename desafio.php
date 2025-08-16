<?php
// Criar um array
$estoque = array("caneta", "lapis", "borracha");

// Exibir o array antes da modificação
echo "Array antes da modificação: ";
print_r($estoque);
echo "<br>";

// Modificar um elemento do array
$estoque[1] = "marcador";
echo "Trocando lapis por marcador<br>";

// Exibir o array após a modificação
echo "Array após a modificação: ";
print_r($estoque);
echo "<br>";

// Inserir um novo elemento no final do array
$estoque[] = "grampeador";
echo "Array após inserir grampeador: ";
print_r($estoque);
echo "<br>";

// Inserir um novo elemento em uma posição específica
array_splice($estoque, 2, 0, "clips");
echo "Array após inserir clips na posição 2: ";
print_r($estoque);
echo "<br>";

// Remover um elemento do array usando unset
unset($estoque [1]);
echo "Array após remover o elemento na posição 1 (marcador): ";
print_r($estoque);
echo "<br>";

// Reindexar o array (opcional, se quiser que as chaves fiquem sequenciais)
$estoque = array_values($estoque);
echo "Array após reindexação: ";
print_r($estoque);
?>