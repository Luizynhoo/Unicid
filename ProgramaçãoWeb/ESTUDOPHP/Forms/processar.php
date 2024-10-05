<?php
/*
* $_GET é uma superglobal em PHP que é usada para coletar dados
* enviados para um script via URL. Isso geralmente acontece quando
* você usa um formulário HTML com o método GET.
*
* isset() é uma função em PHP que verifica se uma variável foi
* definida e não é nula. Em outras palavras, ele verifica se a
* variável existe e tem um valor. É uma boa prática usar isset()
* para evitar erros ao acessar variáveis que podem não existir.
*/
if (isset($_GET['nome'], $_GET['nascimento'], $_GET['peso'],
 $_GET['altura'], $_GET['sexo'])) {
 /*
 * Recebendo os dados e sanitizando
 *
 * A função htmlspecialchars() em PHP é uma ferramenta essencial
 * para a segurança e o tratamento de dados em aplicações web.
 * Ela é usada para converter caracteres especiais em suas
 * representações HTML, evitando que eles sejam interpretados como
 * código HTML ou JavaScript. Isso é particularmente importante ao
 * exibir dados de usuários em uma página web, para evitar
 * ataques de injeção de código
 */
 $nome = htmlspecialchars($_GET['nome']);
 $nascimento = htmlspecialchars($_GET['nascimento']);
 /*
 * A função floatval() em PHP é utilizada para converter
 * uma variável em um valor de ponto flutuante (número
 * decimal). Essa função é especialmente útil quando você
 * precisa garantir que um valor que pode ser uma string
 * ou um número inteiro seja tratado como um número de ponto
 * flutuante em suas operações.
 */
 $peso = floatval($_GET['peso']);
 $altura = floatval($_GET['altura']);
 $sexo = htmlspecialchars($_GET['sexo']);
 // Cálculo da idade
 /*
 * O objeto DateTime facilita a manipulação e
 * comparação de datas em PHP.
 */
 $dataNascimento = new DateTime($nascimento);
 // DateTime() traz a data e hora atuais
 $hoje = new DateTime();
 /*
 * Esta linha calcula a diferença entre a data de
 * hoje ($hoje) e a data de nascimento
 * ($dataNascimento) em anos completos.
 */
 $idade = $hoje->diff($dataNascimento)->y;
 // Cálculo do IMC
 $imc = $peso / ($altura ** 2);
 // Exibindo os resultados
 echo "Nome: $nome<br>";
 /*
 * O operador -> é usado para acessar métodos (funções) de
 * um objeto. Neste caso, estamos chamando o método format()
 * do objeto DateTime.
 * O método format('d/F/y') formata a data de acordo com os
 * especificadores que passamos:
 * d: Exibe o dia do mês com dois dígitos (por exemplo, 01, 02, ..., 31).
 * F: Exibe o nome completo do mês (por exemplo, janeiro, fevereiro, etc.).
 * y: Exibe o ano com dois dígitos (por exemplo, 24 para 2024).
 */
 echo "Data de Nascimento: $dataNascimento->format('d/F/y')<br>";
 echo "Sexo: $sexo<br>";
 echo "Idade: $idade anos<br>";
 echo "Peso: $peso Kg<br>";
 echo "Altura: $altura m<br>";
 echo "IMC: " . number_format($imc, 2) . "<br>";
 // Classificação do IMC
 if ($imc < 18.5) {
 echo "Classificação: Abaixo do peso<br>";
 } elseif ($imc < 24.9) {
 echo "Classificação: Peso normal<br>";
 } elseif ($imc < 29.9) {
 echo "Classificação: Sobrepeso<br>";
 } else {
 echo "Classificação: Obesidade<br>";
 }
} else {
 echo "Dados incompletos!";
}
?>
