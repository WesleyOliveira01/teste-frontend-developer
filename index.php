
<?php
    if(isset($_POST['submit'])){
      include_once('./processar.php');

      $nome = $_POST['nome'];
  
      $email = $_POST['email'];
      
      $telefone = $_POST['telefone'];
      
      $mensagem = $_POST['mensagem'];
  
      $result = mysqli_query($conexao,"INSERT INTO usuario(nome,email,telefone,mensagem) VALUES ('$nome','$email','$telefone','$mensagem')");
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="styles/style.css" />
    <!--  FONTES  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- ICONES -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script src="main.js" defer></script>

    <title>CyberTech</title>
  </head>
  <body>
    <header class="cabecalho">
      <nav class="menu">
        <h1>CyberTech</h1>

        <div class="contato">
          <p>(11) 9 9999-9999</p>
        </div>
      </nav>

      <section class="headline_section">
        <div class="headline">
          <h1>Soluções de Tecnologia da Informação para a sua empresa!</h1>
          <h3>
            Desenvolvemos sites exclusivos e personalizados para ajudar sua
            empresa a ter sucesso online. Combinamos design criativo, tecnologia
            de ponta e estratégias eficazes para criar uma presença online forte
            e impactante.
          </h3>
        </div>

        <form action="index.php" method="post" class="formulario" id="formulario">
          <label for="">Fale conosco</label>
          <input type="text" name="nome" placeholder="NOME:" />
          <input type="email" name="email" placeholder="E-MAIL:" />
          <input type="tel" name="telefone" id="" placeholder="DDD + TELEFONE" />
          <textarea
            name="mensagem"
            id="mensagem"
            cols="30"
            rows="7"
            placeholder="Como podemos ajudar?"
          ></textarea>
          <input type="submit" name="submit" value="Enviar" />
        </form>
      </section>
    </header>
    <main>
      <section class="quem_somos">

        <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="placeholder..."  data-anima="left"/>

        <div class="quem_somos" data-anima="right">
          <h1>Quem Somos</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit unde
            non nemo ea aperiam ratione totam ab commodi reprehenderit enim sed
            rerum perferendis quidem error officia repellat necessitatibus,
            accusantium suscipit.
          </p>
        </div>
      </section>
      <section class="beneficios">
        <h1>Com este serviço você tem:</h1>
        <section data-anima="left">
          <div class="card_beneficio">
            <i class="fa-sharp fa-regular fa-eye"></i>
            <div>
              <h2>Aumento da visibilidade online</h2>
              <p>
                A criação de um site é fundamental para que uma empresa esteja
                presente na internet e, consequentemente, seja encontrada pelos
                seus potenciais clientes. 
              </p>
            </div>
          </div>
          <div class="card_beneficio">
            <i class="fa-sharp fa-solid fa-dumbbell"></i>
            <div>
              <h2>Fortalecimento da marca</h2>
              <p>
                er um site bem elaborado e atualizado contribui para a construção
                de uma marca sólida e confiável. Através do site, a empresa pode
                transmitir sua identidade visual, valores e propósito,
                fortalecendo a imagem da marca.
              </p>
            </div>
          </div>
          <div class="card_beneficio">
            <i class="fa-solid fa-chart-simple"></i>
            <div>
              <h2>Geração de novos negócios</h2>
              <p>
                Com um site, a empresa pode ampliar suas oportunidades de
                negócios. O site pode ser utilizado como uma ferramenta de vendas,
                permitindo que os clientes comprem diretamente do site, solicitem
                orçamentos ou agendem atendimentos.
              </p>
            </div>
          </div>
          <div class="card_beneficio">
            <i class="fa-solid fa-globe"></i>
            <div>
              <h2>Facilidade de comunicação</h2>
              <p>
                O site também facilita a comunicação entre a empresa e seus
                clientes. Através do site, os clientes podem enviar mensagens,
                fazer perguntas e solicitações, e a empresa pode responder de
                forma rápida e eficiente.
              </p>
            </div>
          </div>
          <div class="card_beneficio">
            <i class="fa-solid fa-database"></i>
            <div>
              <h2>Análise de dados</h2>
              <p>
                Com a criação de um site, a empresa pode utilizar ferramentas de
                análise para entender o comportamento dos seus clientes, o
                desempenho do site e identificar oportunidades de melhoria.
              </p>
            </div>
          </div>
          <div class="card_beneficio">
            <i class="fa-solid fa-arrow-up-wide-short"></i>
            <div>
              <h2>Vantagem competitiva</h2>
              <p>
                Em um mercado cada vez mais digital, ter um site é essencial para
                se manter competitivo. Empresas que investem em um site bem
                elaborado e funcional, tem uma vantagem sobre aquelas que não
                possuem presença online, e podem se destacar no mercado.
              </p>
            </div>
          </div>
        </section>
        <button><a href="#formulario">entre em contato</a></button>
      </section>

      <section class="perguntas_frequentes" data-anima="right">
        <h1>Perguntas Frequentes</h1>
        <details class="card_pergunta">
          <summary>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</summary>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, neque, quam molestias voluptas minima suscipit consequatur doloribus.</p>
        </details>
        <details class="card_pergunta">
          <summary>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</summary>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, neque, quam molestias voluptas minima suscipit consequatur doloribus.</p>
        </details>
        <details class="card_pergunta">
          <summary>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</summary>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, neque, quam molestias voluptas minima suscipit consequatur doloribus.</p>
        </details>
        <details class="card_pergunta">
           <summary>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</summary>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, neque, quam molestias voluptas minima suscipit consequatur doloribus.</p>
        </details>
        <details class="card_pergunta">
           <summary>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</summary>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, neque, quam molestias voluptas minima suscipit consequatur doloribus.</p>
        </details>
      </section>

      <section class="ultimo_contato">
        <div class="fale_conosco" data-anima="left">
          <h1>Solicite o seu orçamento!</h1>
          <p>chegou até aqui e ainda não se cadastrou? Aproveite.. </p>
        </div>
        <div class="entre_em_contato" data-anima="right">
          <h2>Fale com a nossa equipe sem compromisso, não perca a chance</h2>

          <button><a href="#formulario">entre em contato</a></button>
        </div>
      </section>

    </main>
    <footer>
      <p>CyberTech &copy; Todos os direitos reservados 2023</p>
      <p>CNPJ 99.999.999-0009-99 TERMOS DE USO</p>
    </footer>
  </body>
</html>
