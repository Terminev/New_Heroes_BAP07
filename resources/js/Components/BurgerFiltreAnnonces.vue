<template>



 <header id="nav">
         <img src="/storage/img/logo.png" alt="logo">
         <label for="check" id="burger" @click="Burger()">
            <span></span>
             <span></span>
            <span></span>
        </label>
        <section>
            <button>
                Réinitialiser
            </button>
            <div class="contain-title-logos">
            <div class="title-logo">
            <img class="logos-annonces" src="/storage/img/annonces.png" alt="annonces">
            <h2>
                Domaine d'activité
            </h2>
            </div>
            <p>-</p>
            </div>
            <div class="contains-input">
            <input type="text" placeholder="Domaine d'activité">
            <div class="bloc-plus">
                <img src="/storage/img/add.png" alt="+">
            </div>
            </div>

            <div class="contain-title-logos">
            <div class="title-logo">
            <img class="logos-annonces" src="/storage/img/Formation.png" alt="formations">
            <h2>
                Formations
            </h2>
            </div>
            <p>-</p>
            </div>
            <div class="contains-input">
            <input type="text" placeholder="Formations">
            </div>

            <div class="contain-title-logos">
            <div class="title-logo">
            <img class="logos-annonces" src="/storage/img/etudes.png" alt="etudes">
            <h2>
                Niveaux d'études
            </h2>
            </div>
            <p>-</p>
            </div>
            <div class="contains-input">
            <input type="text" placeholder="Niveaux d'études">
            </div>

            <div class="contain-title-logos">
            <div class="title-logo">
            <img class="logos-annonces" src="/storage/img/mention-legal.png" alt="mention-legal">
            <h2>
                Localisations
            </h2>
            </div>
            <p>-</p>
            </div>
            <div class="contains-input">
            <input type="text" placeholder="Ville">
            <div class="bloc-plus">
                <img src="/storage/img/add.png" alt="+">
            </div>
            </div>
            <div class="contains-range">
            <input class="range" type="range">
            </div>


            <div class="contain-title-logos">
            <div class="title-logo">
            <img class="logos-annonces" src="/storage/img/salaire.png" alt="salaire">
            <h2>
                Salaire
            </h2>
            </div>
            <p>-</p>
            </div>

            <div class="contain-title-logos">
            <div class="title-logo">
            <img class="logos-annonces" src="/storage/img/faq.png" alt="sport">
            <input type="text" placeholder="Sport Pratiqués">
            </div>
            <p>-</p>
            </div>
        </section>
</header>



</template>

<style scoped>

.contains-range{
    display: flex;
    justify-content: center;
}

.range{
    height: 2px;
    width: 80%;
}

.logos-annonces{
    width: 15px;
    height: 15px;
}

.contains-input{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

input{
    border-radius: 4px;
    border-color: #9080fd;
}

.bloc-plus{
    width: 26px;
    height: 26px;
    border-radius: 2px;
    background-color: #001598;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contain-title-logos{
    display: flex;
    justify-content: space-between;
    width: 90%;
    margin: 0 auto;
    align-items: center;
}

.title-logo{
    padding-left: 10px;
    display: flex;
    gap: 15px;
    align-items: center;
}

.open > section{
    clip-path: inset(0 0 0 0);
}

 section{
    height: 100vh;
    width: 100%;
    position: fixed;
    right: 0;
    top: 63px;
    flex-direction: column;
    background-color: #f5f5f5;
    clip-path: inset(0 0 0 100%);
    transition: 0.3s ease;
    overflow-y: hidden;
}

header{
    width: 100%;
    height: 63px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 15px;
    padding-right: 15px;
    background-color: white;
}


label{
 display:flex;
  flex-direction:column;
  width:70px;
  cursor:pointer;
  transform: scale(0.4);
  z-index: 1;
}

label span{
  background: rgb(0, 0, 0);
  border-radius:10px;
  height:7px;
  margin: 7px 0;
  transition: .4s  cubic-bezier(0.68, -0.6, 0.32, 1.6);

}


span:nth-of-type(1){
  width:50%;

}

span:nth-of-type(2){
  width:100%;
}


span:nth-of-type(3){
  width:75%;

}



.open span:nth-of-type(1){
  transform-origin:bottom;
  transform:rotatez(45deg) translate(8px,0px)
}


.open span:nth-of-type(2){

  transform-origin:top;
  transform:rotatez(-45deg)
}


.open span:nth-of-type(3){

  transform-origin:bottom;
  width:50%;
  transform: translate(30px,-11px) rotatez(45deg);

}
</style>
 <script>
    export default{
        methods: {
            Burger(){
            var nav = document.getElementById('nav')
            // var nav = document.getElementById('containeur')
            console.log(nav)

            nav.classList.toggle('open')

            }
        }
    }
</script>
