<template>
<!-- <section id="filtre">
        <img src="/storage/img/logo.png" alt="logo">
        <label for="check" id="burger" @click="Burger()">
            <span></span>
            <span></span>
            <span></span>
        </label> -->


        <section id="filtre">
            <div class="contain-button">
                <button>
                    Réinitialiser
                </button>
                <img class="close" id="close" src="/storage/img/close.png" alt="close">
            </div>
            <div class="group-contain">
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
                <div class="contain-button">
                    <button>
                        Réinitialiser
                    </button>
                </div>
            </div>
            <div class="group-contain">
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
                 <div class="contain-button">
             <button>
                Réinitialiser
            </button>
            </div>
            </div>

            <div class="group-contain">
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
                 <div class="contain-button">
            <button>
                Réinitialiser
            </button>
            </div>
            </div>

            <div class="group-contain">
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
                 <div class="contain-button">
            <button>
                Réinitialiser
            </button>
            </div>
            </div>

            <div class="group-contain">
                <div class="contain-title-logos">
                    <div class="title-logo">
                        <img class="logos-annonces" src="/storage/img/salaire.png" alt="salaire">
                        <h2>
                            Salaire
                        </h2>
                    </div>
                    <p>-</p>
                </div>
                <div class="contain-input-price">
                    <input class="input-price" type="number" placeholder="Min">
                    <input class="input-price" type="number" placeholder="Max">
                </div>
            </div>

            <div class="group-contain">
                <div class="contain-title-logos">
                    <div class="title-logo">
                        <img class="logos-annonces" src="/storage/img/faq.png" alt="sport">
                        <input type="text" placeholder="Sport Pratiqués">
                    </div>
                    <p>-</p>
                </div>
            </div>
        </section>
<!-- </section> -->



</template>

<style scoped>

.open > #filtre{
    clip-path: inset(0 0 0 0);
}

    .close{
        position: absolute;
        right: 20px;
    }

    .contain-button {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 15px 0 auto;
    }

    button {
        color: rgba(0, 21, 152, 1);
        border: 1px solid rgba(0, 21, 152, 1);
        border-radius: 4px;
        width: 104px;
    }

    .group-contain {
        margin: 30px auto;
    }

    .contain-input-price {
        display: flex;
        justify-content: space-around;
        padding-top: 15px;
    }

    .input-price {
        width: 107px;
        height: 22px;
        border-color: #878f95;
    }

    input::placeholder {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contains-range {
        display: flex;
        justify-content: center;
    }

    .range {
        height: 2px;
        width: 80%;
        margin: 30px auto;
    }

    .logos-annonces {
        width: 15px;
        height: 15px;
    }

    .contains-input {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        padding-top: 15px;
    }

    input {
        border-radius: 4px;
        border-color: #9080fd;
    }

    .bloc-plus {
        width: 26px;
        height: 26px;
        border-radius: 2px;
        background-color: #001598;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contain-title-logos {
        display: flex;
        justify-content: space-between;
        width: 90%;
        margin: 0 auto;
        align-items: center;
    }

    .title-logo {
        padding-left: 10px;
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .open> #filtre {
        clip-path: inset(0 0 0 0);
    }

    #filtre {
        min-height: 100vh;
        width: 100%;
        position: fixed;
        right: 0;
        top: 63px;
        flex-direction: column;
        background-color: #f5f5f5;
        clip-path: inset(0 0 0 100%);
        transition: 0.3s ease;
        /* overflow-y: hidden; */
    }

    /* #filtre {
        width: 100%;
        height: 63px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-left: 15px;
        padding-right: 15px;
        background-color: white;
    } */


    /* #burger {
        display: flex;
        flex-direction: column;
        width: 70px;
        cursor: pointer;
        transform: scale(0.4);
        z-index: 1;
    } */

    /* #burger span {
        background: rgb(0, 0, 0);
        border-radius: 10px;
        height: 7px;
        margin: 7px 0;
        transition: .4s cubic-bezier(0.68, -0.6, 0.32, 1.6);

    }


    span:nth-of-type(1) {
        width: 50%;

    }

    span:nth-of-type(2) {
        width: 100%;
    }


    span:nth-of-type(3) {
        width: 75%;

    }



    .open span:nth-of-type(1) {
        transform-origin: bottom;
        transform: rotatez(45deg) translate(8px, 0px)
    }


    .open span:nth-of-type(2) {

        transform-origin: top;
        transform: rotatez(-45deg)
    }


    .open span:nth-of-type(3) {

        transform-origin: bottom;
        width: 50%;
        transform: translate(30px, -11px) rotatez(45deg);

    } */

</style>
<script>
    export default {
        methods: {
            Burger() {
                var filtre = document.getElementById('filtre')
                // var filtre = document.getElementById('containeur')
                console.log(filtre)

                filtre.classList.toggle('open')

            },
            
        }
    }

</script>
