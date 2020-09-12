<?php

print_r($_POST);


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'a2plcpnl0751.prod.iad2.secureserver.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'cadastro@grupoaritana.com.br';                     // SMTP username
    $mail->Password   = 'ari@@2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('cadastro@grupoaritana.com.br', 'Cadastro de Consignado');
    $mail->addAddress('cadastro@grupoaritana.com.br', 'Cadastro de Consignado');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    if($_POST['arq_rg'] != ""){
        $mail->addAttachment($_POST['arq_rg']);    // Optional name
    }

    if($_POST['arq_cpf'] != ""){
        $mail->addAttachment($_POST['arq_cpf']);    // Optional name
    }

    if($_POST['arq_compro'] != "") {
        $mail->addAttachment($_POST['arq_compro']);    // Optional name
    }

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Cadastro de: ' . $_POST['nm_completo'];
    $mail->Body    = '
    <html>
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <div style="font-size: 12px;">
                Dados Pessoais

                <p>Nome Completo: ' . $_POST['nm_completo'] . ' </p></p>
                <p>CPF: ' . $_POST['cpf'] . ' </p>
                <p>RG: ' . $_POST['rg'] . ' </p>
                <p>Data de Nascimento: ' . $_POST['dt_nasc'] . ' </p>
                <p>Estado Civil:' . $_POST['estado_civil'] . ' </p>
                <p>Mae: ' . $_POST['mae'] . ' </p>
                <p>Pai: ' . $_POST['pai'] . ' </p>
                <p>Email: ' . $_POST['email'] . ' </p>
                <p>Telefone: ' . $_POST['tel'] . ' </p>
                <p>Endereço: ' . $_POST['ps_end'] . ' </p>
                <p>Bairro: ' . $_POST['ps_bairro'] . ' </p>
                <p>Cidade: ' . $_POST['ps_cid'] . ' </p>
                <p>Estado: ' . $_POST['ps_uf'] . ' </p>
                <p>Cep: ' . $_POST['ps_cep'] . ' </p>
                <p>Tipo de Residencia: ' . $_POST['ps_resi'] . ' </p>
                <p>Tempo de Residencia: ' . $_POST['ps_temp_resi'] . ' </p>
                <p>Possui Cartão de Credito: ' . $_POST['cartao'] . ' </p>
                
                Dados Profissionais
                
                <p>Empresa: ' . $_POST['prof_nm'] . ' </p>
                <p>Endereço:' . $_POST['prof_end'] . ' </p>
                <p>Cidade:' . $_POST['prof_cid'] . ' </p>
                <p>Bairro:' . $_POST['prof_bairro'] . ' </p>
                <p>Estado:' . $_POST['prof_uf'] . ' </p>
                <p>CEP:' . $_POST['prof_cep'] . ' </p>
                <p>Data de Admissão:' . $_POST['prof_admis'] . ' </p>
                <p>Função:' . $_POST['prof_fun'] . ' </p>
                
                Referencias Pessoais
                
                <p>Nome: ' . $_POST['ref_nm1'] . ' </p>
                <p>Telefone: ' . $_POST['ref_tel1'] . ' </p>
                <p>Nome: ' . $_POST['ref_nm2'] . ' </p>
                <p>Telefone: ' . $_POST['ref_tel2'] . ' </p>
                <p>Nome: ' . $_POST['ref_nm3'] . ' </p>
                <p>Telefone: ' . $_POST['ref_nm3'] . ' </p>
            
            </div>
        </body>
    </html>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
