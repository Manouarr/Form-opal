
  function test() {
    const inputNumber = parseInt(document.getElementById("input-number").value, 10);
    const textContainer = document.getElementById("text-container");
  
    
    if (inputNumber === 0) {
      textContainer.innerHTML = "";
      return;
    }

    const longueurHauteur = [];
  
    for (let i = 0; i < inputNumber; i++) {
      longueurHauteur.push('<input type="number" name="nombre" placeholder="number">');
    }
  
    // Insérer les éléments de texte dans le conteneur de texte
    textContainer.innerHTML = elements.join("<br>");
  }
  
  





