import './bootstrap';

/**Animation du titre, apparition mot par mot
 * 
 * @param {string} selector 
 */
function animateTitle(selector){
    const title = document.querySelector(selector);
    if(title === null){
        console.error('Impossible de trouver l\' élément' + selector);
        return
    }

    // On construit un tableau qui contient la nouvelle structure:
    //Récupérations des enfants:
    const children = Array.from(title.childNodes)
    //Tableau qui contiendra les éléments à mettre en place:
    let elements = []
    children.forEach(child => {
        if(child.nodeType === Node.TEXT_NODE){
            const words = child.textContent.split(' ');
            let spans = words.map(wrapWord);
            //Création d'espace entre les mots:
             
            //Pour ajouter les éléments au tableau: 
            elements = elements.concat(
                injectElementBetweenItems(spans, document.createTextNode(' '))
            )
            
        } else {
            elements.push(child)
        }
    })
    console.log(elements);
    //On utilise ce tableau et on injecte dans title:
    title.innerHTML = '';
    elements.forEach(el => {
        title.appendChild(el)
    })
    //Récupération des <span> qui sont enfants d'un <Span>, que l'on va convertir en un tableau:
    Array.from(title.querySelectorAll('span span')).forEach((span, k) => {
        //Ajout d'une animation (délai):
        span.style.animationDelay = (k * .1) + 's'
    })
}

/**
 * Fct qui va entourer le mot de deux <span>
 * 
 * @param {string} word 
 */
function wrapWord (word){
    const span = document.createElement('span');
    const span2 = document.createElement('span');
    //Ajouter le <span> 2 dans le <span> 1:
    span.appendChild(span2);
    span2.innerHTML = word;

    return span 
}

/**
 * element à injecter entre chaque element du tableau
 * 
 * @param {HTMLElement} arr 
 * @param {Node} 
 * @return {Node[]} 
 */

function injectElementBetweenItems (arr, element){
    return arr.map((item, k) => {
        if(k === arr.length -1){
            return [item]
        }
        return [item, element.cloneNode()]
    }).reduce((acc, pair) => {
        acc = acc.concat(pair)
        return acc;
    },  [])
}

animateTitle('.title');