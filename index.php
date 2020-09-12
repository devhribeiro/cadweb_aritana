<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro Aritana SJ</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <div style="margin-top: 10px">
            <img src="/assets/img/logo.png" width="150px">
            <h3 style="color: #333;">Cadastro de Consignado</h3>
        </div>

        <form action="push.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome Completo - Não utilize acentuação!</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nm_completo">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">CPF</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="000.000.000-00" name="cpf">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">RG</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0.000.000 ES" name="rg">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Data de Nascimento</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="00/00/000" name="dt_nasc">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Estado Civil</label>
                <select class="form-control" id="exampleFormControlSelect1" name="estado_civil">
                    <option>Solteiro(a)</option>
                    <option>Casado(a)</option>
                    <option>Divorciado(a)</option>
                    <option>Viuvo(a)</option>
                    <option>União Estavel</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Mãe</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="mae">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Pai</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="pai">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="email">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Telefone</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(27) XXXXX-XXXX" name="tel">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Endereço</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="ps_end">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Bairro</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="ps_bairro">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Cidade</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="ps_cid">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Estado</label>
                <select class="form-control" id="exampleFormControlSelect1" name="ps_uf">
                    <option>Espirito Santo</option>
                    <option>Bahia</option>
                    <option>Minas Gerais</option>
                    <option>Rio de Janeiro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Cep</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="EX: 29.162-080" name="ps_cep">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Tipo de Residêcia</label>
                <select class="form-control" id="exampleFormControlSelect1" name="ps_resi">
                    <option>Propria</option>
                    <option>Alugada</option>
                    <option>Cedida</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Tempo de Residencia</label>
                <select class="form-control" id="exampleFormControlSelect1" name="ps_temp_resi" >
                    <option>0 a 6 Meses</option>
                    <option>7 a 12 Meses</option>
                    <option>Acima de 13 Meses</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Possui Catão de Credito</label>
                <select class="form-control" id="exampleFormControlSelect2" name="cartao">
                    <option>Sim</option>
                    <option>Não</option>
                </select>
            </div>

            <h3 style="color: #333;">Dados Profissionais</h3>

            <div class="form-group">
                <label for="exampleFormControlInput1">Empresa</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="prof_nm">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Endereço</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="prof_end">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Cidade</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="prof_cid">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Bairro</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="prof_bairro">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Estado</label>
                <select class="form-control" id="exampleFormControlSelect1" name="prof_uf">
                    <option>Espirito Santo</option>
                    <option>Bahia</option>
                    <option>Minas Gerais</option>
                    <option>Rio de Janeiro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Cep</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="EX: 29.162-080" name="prof_cep">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Data Admissão</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="EX: 29.162-080" name="prof_admis">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Função</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="EX: 29.162-080" name="prof_fun">
            </div>

            <h3 style="color: #333;">Referencia Pessoais</h3>

            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="ref_nm1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Telefone</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(27) XXXXX-XXXX" name="ref_tel1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="ref_nm2">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Telefone</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(27) XXXXX-XXXX" name="ref_tel2">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="ref_nm3">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Telefone</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(27) XXXXX-XXXX" name="ref_nm3">
            </div>

            <div class="custom-file" style="margin-bottom: 10px; margin-top: 20px;">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="arq_rg">
                <label class="custom-file-label" for="validatedCustomFile">Documento de Identidade</label>
                <!-- <div class="invalid-feedback">Erro ao carregar Identidade</div> -->
            </div>

            <div class="custom-file" style="margin-bottom: 10px;">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="arq_cpf">
                <label class="custom-file-label" for="validatedCustomFile">Documento Cpf</label>
                <!-- <div class="invalid-feedback">Erro ao carregar Identidade</div> -->
            </div>

            <div class="custom-file" style="margin-bottom: 10px;">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="arq_compro">
                <label class="custom-file-label" for="validatedCustomFile">Comprovante de Residencia</label>
                <!-- <div class="invalid-feedback">Erro ao carregar Identidade</div> -->
            </div>

            <div style="display: flex; align-items: center; margin-bottom: 50px;">
                <div class="form-check" style="display: flex; justify-content: center; align-items: center;">
                    <label for="exampleFormControlInput1" style="font-size: 10px;">Confirmo que as informações aqui repassadas são veridicas</label>
                    <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..." name="aceite">
                </div>

                <button type="submit" class="btn btn-primary" style="width: 40%; margin-left: 20px;">Enviar</button>
            </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>