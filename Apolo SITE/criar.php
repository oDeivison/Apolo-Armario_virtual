<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style/criar.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <title>Apolo - Criar</title>
</head>
<body>
    <nav>
        <a href="home.php" title="Apolo"><h1>Apolo</h1></a>
        <ul>
            <li><a href="home.php" title="Home">Home</a></li>
            <li><a href="#" title="Closet" style="text-decoration: underline;">Closet</a>
                    <ul class="dropCloset">
                        <li><a href="closet.php">Closet</a></li>
                        <li><a href="criar.php">Criar</a></li>
                    </ul>
            </li>
            <li><a href="perfil.php"><img src="img/user.png" alt="user" title="Perfil"></a></li>
        </ul>
    </nav>
    <h1 class="TituloCriar">Criar</h1>
<main>

    <div class="carrossel">

<div class="pecas">
  <div class="swiper" >
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/CAMISA-BRANCA.png" alt="Camisa branca">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/camisa-franca.png" alt="Camisa frança">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/pano-de-chao.png" alt="Corinthians">
          </div>
        </div>
      </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <p class="nomes" id="nomeCamisa1">camisa 1</p>
  
  </div>
   <div class="pecas">
     <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="project-img">
              <img class="imagem-150" src="img/calca-cargo-preto.png" alt="Calça cargo preto">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-img">
              <img class="imagem-150" src="img/calca-cargo-bege.png" alt="Calça cargo bege">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-img">
              <img class="imagem-150" src="img/bermuda jordan.png" alt="Bermuda Jordan">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-img">
              <img class="imagem-150" src="img/bermuda jeans branca.png" alt="Bermuda Jeans Branca">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-img">
              <img class="imagem-150" src="img/bermuda cargo.png" alt="Bermuda cargo">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-img">
              <img class="imagem-150" src="img/calca adidas preta.png" alt="Calca Adidas Preta">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-img">
              <img class="imagem-150" src="img/calca adidas branca.png" alt="Calca Adidas branca">
            </div>
          </div>
        </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
      </div>
      <p class="nomes" id="nomeCalca1">calca 1</p>
   </div>

 <div class="pecas">
   <div class="swiper">
      <div class="swiper-wrapper">
        
        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/nike-precision.png" alt="Nike Precision">
          </div>
        </div>
      
        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/nike air force preto.png" alt="Puma Suede">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/nike renew.png" alt="Nike Renew">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/puma x bmw.png" alt="Puma x BMW">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/chinelo havaianas santos.png" alt="Chinelo Havaianas Santos">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="project-img">
            <img class="imagem-150" src="img/nike-airmax-nuaxis.png" alt="Air Max Nuaxis">
          </div>
        </div>
        
      </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
    <p class="nomes" id="nomeTenis1">tenis 1</p>
 </div>
</div>

<div class="main2">
<div class="teste">
<a href="closet.php" class="n">CLOSET</a>
<a href="" class="n" class="open-button" id="openPopupBtn">CRIAR OUTFIT</a>

<div class="popup"  id="popup">
  <div class="popup-content">

      <div class="popup-header">
          <h2 class="popup-title">Criar</h2>
          <span class="close-btn" id="closePopupBtn">&times;</span>
      </div>

      <div class="popup-body">

      <form action="userCriar.php" method="POST" class="formulario">

        <label for="ioutfit" class="label">NOME DO OUTFIT</label><br>
        <input type="text" id="ioutfit" name="outfit" placeholder="Outifit midia 1" required>

        <input type="hidden" name="urlCamisa" id="urlCamisa" value="">
        <input type="hidden" name="urlCalca" id="urlCalca" value="">
        <input type="hidden" name="urlTenis" id="urlTenis" value="">

        <button class="BtnSalvar" type="submit">Salvar</button>

      </form >

        <div class="imagems">
          <img src="img/camisa-branca.png" alt="camisa branca" class="img-popup" id="camisa-popup">
          <img src="img/calca-cargo-preto.png" alt="calca cargo bege" class="img-popup" id="calca-popup">
          <img src="img/balenciaga.png" alt="balenciaga" class="img-popup" id="tenis-popup">
        </div>
        

      </div>
  </div>
</div>

</main> 
     <footer>
        <p>Deivison Miranda Gomes</p>
        <p>Gabriel Vassalo Souza</p>
        <p>Julio Cesar de Lima Dos Santos</p>
        <p>Eduardo Donizete de Oliveira</p>
        
    </footer>

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
  // Inicializa o swiper para o primeiro carrossel (camisa)
  var swiper1 = new Swiper(".pecas:nth-child(1) .swiper", {
    loop: true,
    navigation: {
      nextEl: ".pecas:nth-child(1) .swiper-button-next",
      prevEl: ".pecas:nth-child(1) .swiper-button-prev",
    },
  });

  // Atualiza o nome ao trocar o slide para o primeiro carrossel
  swiper1.on('slideChangeTransitionEnd', function () {
    const activeSlide = swiper1.slides[swiper1.activeIndex];
    const activeImage = activeSlide.querySelector('img');
    if (activeImage) {
      const imageAlt = activeImage.alt;
      document.getElementById('nomeCamisa1').textContent = imageAlt;
      const urlImagemCamisa = activeImage.src;
      document.getElementById('urlCamisa').value = urlImagemCamisa;
      const imgElement = document.getElementById("camisa-popup");
      imgElement.src = urlImagemCamisa;

    }
  });

  // Inicializa o nome com o alt do slide inicial para o primeiro carrossel
  const initialSlide1 = swiper1.slides[swiper1.activeIndex];
  const initialImage1 = initialSlide1.querySelector('img');
  if (initialImage1) {
    document.getElementById('nomeCamisa1').textContent = initialImage1.alt;
  }

  // Inicializa o swiper para o segundo carrossel (calça)
  var swiper2 = new Swiper(".pecas:nth-child(2) .swiper", {
    loop: true,
    navigation: {
      nextEl: ".pecas:nth-child(2) .swiper-button-next",
      prevEl: ".pecas:nth-child(2) .swiper-button-prev",
    },
  });

  // Atualiza o nome ao trocar o slide para o segundo carrossel
  swiper2.on('slideChangeTransitionEnd', function () {
    const activeSlide = swiper2.slides[swiper2.activeIndex];
    const activeImage = activeSlide.querySelector('img');
    if (activeImage) {
      const imageAlt = activeImage.alt;
      const urlImagemCalca = activeImage.src;
      document.getElementById('urlCalca').value = urlImagemCalca;
      document.getElementById('nomeCalca1').textContent = imageAlt;
      const imgElement = document.getElementById("calca-popup");
      imgElement.src = urlImagemCalca;
      
    }
  });

  // Inicializa o nome com o alt do slide inicial para o segundo carrossel
  const initialSlide2 = swiper2.slides[swiper2.activeIndex];
  const initialImage2 = initialSlide2.querySelector('img');
  if (initialImage2) {
    document.getElementById('nomeCalca1').textContent = initialImage2.alt;
  }

  // Inicializa o swiper para o terceiro carrossel (tênis)
  var swiper3 = new Swiper(".pecas:nth-child(3) .swiper", {
    loop: true,
    navigation: {
      nextEl: ".pecas:nth-child(3) .swiper-button-next",
      prevEl: ".pecas:nth-child(3) .swiper-button-prev",
    },
  });

  // Atualiza o nome ao trocar o slide para o terceiro carrossel
  swiper3.on('slideChangeTransitionEnd', function () {
    const activeSlide = swiper3.slides[swiper3.activeIndex];
    const activeImage = activeSlide.querySelector('img');
    if (activeImage) {
      const imageAlt = activeImage.alt;
      const urlImagemTenis = activeImage.src;
      document.getElementById('urlTenis').value = urlImagemTenis;
      document.getElementById('nomeTenis1').textContent = imageAlt;
      const imgElement = document.getElementById("tenis-popup");
      imgElement.src = urlImagemTenis;
      
    }
  });

  // Inicializa o nome com o alt do slide inicial para o terceiro carrossel
  const initialSlide3 = swiper3.slides[swiper3.activeIndex];
  const initialImage3 = initialSlide3.querySelector('img');
  if (initialImage3) {
    document.getElementById('nomeTenis1').textContent = initialImage3.alt;
  }

  
});
        
      document.addEventListener('DOMContentLoaded', function() {

        // Elementos do popup
        const popup = document.getElementById("popup");
        const openBtn = document.getElementById("openPopupBtn");
        const closeBtn = document.getElementById("closePopupBtn");

        // GARANTE que o popup esteja oculto no carregamento
        if (popup) {
            popup.classList.remove("show");
            popup.style.display = "none";
        }

        // Abrir popup
        if (openBtn) {
            openBtn.addEventListener("click", function(e) {
                e.preventDefault(); 
                if (popup) {
                    popup.style.display = "";
                    popup.classList.add("show");
                }
            });
        }

        // Fechar popup no botão X
        if (closeBtn) {
            closeBtn.addEventListener("click", function() {
                if (popup) {
                    popup.classList.remove("show");
                    setTimeout(function() {
                        popup.style.display = "none";
                    }, 100);
                }
            });
        }

        // Fechar popup ao clicar fora
        window.addEventListener("click", function(e) {
            if (e.target === popup) {
                popup.classList.remove("show");
                setTimeout(function() {
                    popup.style.display = "none";
                }, 100);
            }
        });

        // Fechar com ESC
        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape" && popup && popup.classList.contains("show")) {
                popup.classList.remove("show");
                setTimeout(function() {
                    popup.style.display = "none";
                }, 100);
            }
        });

    });
</script>



</body>
</html>