// 1. Mudar texto
function mudarTexto() {
    document.getElementById('meuTexto').innerText = 'Olá, Mundo!';
  }
  
  // 2. Mudar cor de fundo
  function mudarCorFundo() {
    document.body.style.backgroundColor = 'blue';
  }
  
  // 3. Contador
  let contador = 0;
  function mudarContador(valor) {
    contador += valor;
    document.getElementById('contador').innerText = contador;
  }
  
  // 4. Adicionar item à lista
  function adicionarItem() {
    const texto = document.getElementById('itemTexto').value;
    if (texto.trim() !== '') {
      const li = document.createElement('li');
      li.innerText = texto;
      document.getElementById('lista').appendChild(li);
      document.getElementById('itemTexto').value = '';
    }
  }
  
  // 5. Mostrar/Esconder imagem
  function toggleImagem() {
    const imagem = document.getElementById('imagemToggle');
    imagem.style.display = imagem.style.display === 'none' ? 'block' : 'none';
  }
  
  // 6. Alternar imagem
  const imagens = [
    {
      src: "https://static.todamateria.com.br/upload/57/bf/57bf869193e1b-tamandua-bandeira.jpg",
      alt: "Tamanduá-bandeira"
    },
    {
      src: "https://i0.wp.com/blog.bioparquedorio.com.br/wp-content/uploads/2020/07/Curiosidades_Macaco_Prego_Peito_Amarelo.jpg?w=1280&ssl=1",
      alt: "Macaco prego"
    }
  ];
  
  let indexImagem = 0;
  
  function alternarImagem() {
    const img = document.getElementById('imagemAlternar');
    indexImagem = (indexImagem + 1) % imagens.length;
    img.src = imagens[indexImagem].src;
    img.alt = imagens[indexImagem].alt;
  }
  
  // 7. Lista de tarefas com botão remover
  function adicionarTarefa() {
    const texto = document.getElementById('tarefaTexto').value;
    if (texto.trim() !== '') {
      const li = document.createElement('li');
      li.innerText = texto;
  
      const botaoRemover = document.cre
    }
}