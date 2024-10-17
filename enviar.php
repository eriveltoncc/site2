<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    // Validação básica
    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        // Definindo o destinatário do email
        $to = "erivelton.cassaro@gmail.com";  // Coloque aqui o email que vai receber a mensagem
        $subject = "Mensagem de contato do site CloudVantage";
        
        // Corpo do email
        $body = "Nome: $nome\n";
        $body .= "Email: $email\n";
        $body .= "Mensagem: \n$mensagem";
        
        // Cabeçalhos do email
        $headers = "From: $email";

        // Enviando o email
        if (mail($to, $subject, $body, $headers)) {
            echo "Sua mensagem foi enviada com sucesso!";
        } else {
            echo "Houve um problema ao enviar sua mensagem. Tente novamente.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>
