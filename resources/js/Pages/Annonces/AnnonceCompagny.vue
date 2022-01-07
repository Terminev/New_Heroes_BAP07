<template>
    <div>
        <Header>

        </Header>

        <!-- Le systeme de filtre des annonces  -->

        <section id="filtre">
            <div class="contain-button">
                <button>
                    Réinitialiser
                </button>
                <img class="close" id="close" @click="filterClose()" src="/storage/img/close.png" alt="close">
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
                    <input type="text" v-model="form.domaine" placeholder="Domaine d'activité"
                        v-on:keyup.enter="addDomain()" id="addDomainValue">
                    <div class="bloc-plus">
                        <img src="/storage/img/add.png" alt="+">
                    </div>
                </div>
                <div class="containeurDomains">
                    <div class="domain" v-for="show in afficher" :key="show" :id="show">
                        {{show}}
                        <img class="closeAdd" @click="destroy(show)" src="/storage/img/closewhite.png" alt="close">
                    </div>
                </div>
                <div class="contain-button">
                    <button @click="destroyAllContain()">
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


        <!-- Le contenu de la page annonce -->


        <h1>Recherche d’un sportif</h1>
        <div class="search-annonce">
            <img src="/storage/img/favorite_heart.png" class="mr-8" alt="favorite img"
                @click="showFavorite($page.props.user.id)" v-if="$page.props.user">
            <input id="research" type="text" placeholder="Recherche..." @change="search()">
            <div class="img-container">
                <img id="search" @click="filter()" src="/storage/img/logo_search.png" alt="settings button">
            </div>
        </div>

        <div v-if="$page.props.user.entreprise == 1" class="add-annonce text-center pt-2">
            <a :href="'/annonce/create'">Ajouter une annonce</a>
        </div>

        <h2 id="Error">Aucun résultat trouvé</h2>

        <div class="annonces-container" v-for="annonce in tab_search" :key="annonce.id">
            <img v-if="tab_in_favories.includes(annonce.id)" class="blackheart mr-8 mt-2 mb-2"
                src="/storage/img/favorite_heart.png" alt="favorite img"
                @click="favorite(annonce.id, $page.props.user.id )">
            <img v-else class="blackheart mr-8 mt-2 mb-2" src="/storage/img/blackheart.png" alt="favorite img"
                @click="favorite(annonce.id, $page.props.user.id )">
            <a :href="'/annonce/'+annonce.id">
                <img src="" class="annonce-img" alt="img profil compagnie">
                <div class="annonce-text">
                    <div class="flex justify-between pr-2">
                        <h3>{{annonce.announcement_title}}</h3>
                    </div>
                    <h4>{{user.company_name}}</h4>
                    <h5>{{annonce.localisation}}</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, alias.<!-- {{annonce.announcement_description}} -->
                    </p>
                </div>
            </a>
        </div>
    </div>

</template>

<script>
    import Header from '@/Components/Header.vue'

    export default {
        components: {
            // name : '#app',
            Header,
        },

        data() {
            return {
                tab_search: this.annonces,
                tab_reset: [],
                tab_in_favories: [],
                form: [],
                afficher: [],
                form: this.$inertia.form({
                    domaine: ""
                }),
            }
        },

        props: ['annonces', 'favories', 'user'],


        methods: {

            search() {
                if (this.tab_search = []) {
                    this.tab_search = this.annonces
                }
                this.tab_reset = this.tab_search
                this.tab_search = []
                var param_search = document.getElementById('research').value.toUpperCase()
                for (var i = 0; i < this.tab_reset.length; i++) {
                    if (this.tab_reset[i].announcement_title.toUpperCase() == param_search) {
                        this.tab_search.push(this.tab_reset[i])
                    }
                }
                if (this.tab_search.length == 0) {
                    document.getElementById('Error').style.display = 'flex'
                    this.tab_search = this.annonces
                } else {
                    document.getElementById('Error').style.display = 'none'
                }
                console.log(this.tab_search.length)
            },

            favorite(id, user_id) {
                this.form = []
                this.form.push({
                    'users_id': user_id,
                    'announcement_companies_table_id': id,
                })
                console.log(this.form[0])
                this.$inertia.post(this.route('favorite.store'), this.form)
                setTimeout(this.ChangeColor(), 1000)
            },

            showFavorite(id) {

                this.tab_search = []
                for (var j = 0; j < this.favories.length; j++) {
                    console.log('id :')
                    console.log(id)
                    console.log('favorite user :')
                    console.log(this.favories[j].users_id)
                    if (this.favories[j].users_id == id) {
                        console.log('Je suis dans le if')
                        this.tab_search.push(this.annonces[this.favories[j].announcement_companies_table_id - 1])
                    }
                }
                console.log(this.tab_search)
                console.log(this.annonces)
            },

            filter() {
                var filtre = document.getElementById('filtre')

                filtre.classList.add('open-filter')

            },

            filterClose() {
                var filtre = document.getElementById('filtre')

                filtre.classList.remove('open-filter')
            },

            addDomain() {
                this.afficher.push(this.form.domaine);
                console.log(this.afficher);
                this.form.domaine = ""
            },

            destroyAllContain() {
                this.afficher = []
            },

            destroy(id_domain) {
                console.log(id_domain)
                for (var i = 0; i < this.afficher.length; i++) {
                    console.log(this.afficher[i]);
                    if (this.afficher[i] == id_domain) {
                        console.log("dans le if");
                        this.afficher[i].splice(this.afficher[i].indexOf(id_domain), 1)
                    }
                }
            },

            ChangeColor() {
                this.tab_in_favories = []
                for (var l = 0; l < this.favories.length; l++) {
                    if (this.user.id == this.favories[l].users_id) {
                        this.tab_in_favories.push(this.favories[l].announcement_companies_table_id)
                    }
                }
            }
        },
        mounted() {
            this.ChangeColor()
        },
    }

</script>

<style scoped>
    .closeAdd {
        width: 8px;
        height: 8px;
        margin-left: 10px;
    }

    .domain {
        min-width: fit-content;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 5px 10px;
        border-radius: 15px;
        color: white;
        background-color: #001598;
    }

    .containeurDomains {
        width: 90%;
        gap: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding-left: 20px;
        padding-right: 20px;
        margin: 10px auto;
    }

    h1 {
        padding-top: 25px;
        padding-bottom: 16px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    h3 {
        font-size: 20px;
        font-weight: bold;
    }

    h4 {
        font-size: 16px;
        color: #0094FF;
    }

    h5 {
        font-size: 14px;
        font-weight: 600;
        padding-top: 4px;
    }

    p {
        font-size: 14px;
        padding-top: 4px;
    }

    .search-annonce {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-annonce span {
        max-width: 194px;
        width: 100%;
    }

    .blackheart {
        width: 15px;
    }

    .img-container {
        background-color: #001598;
        height: 34px;
        width: 34px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 4px;
        margin-left: 8px;
    }

    .img-container img {
        object-fit: contain;
        max-width: 123px;
        width: 100%;
    }

    #Error {
        display: none;
        justify-content: center;
        align-items: center;
        padding-top: 20px;
        font-weight: bold;
    }

    .add-annonce {
        display: flex;
        justify-content: center;
        padding: 6px 0px;
        margin: 16px auto;
        font-size: 14px;
        border-radius: 4px;
        max-width: 223px;
        background-color: #001598;
        color: #FFFFFF;
    }



    /* Cards Annonces Compagny */



    .annonces-container {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: center;
        margin: 16px auto;
        max-width: 348px;
        width: 100%;
        border-radius: 3px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.12);
    }

    .annonces-container a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .annonces-container img {
        border-radius: 3px;
        object-fit: contain;
    }

    .annonces-container div {
        padding-left: 8px;
    }

    .annonce-img {
        max-width: 121px;
        width: 100%;
    }

    .annonce-text {
        max-width: 100%;
        width: 100%;
    }



    .contains-range {
        display: flex;
        justify-content: center;
    }

    .range {
        height: 2px;
        width: 80%;
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

    .open-filter {
        clip-path: inset(0 0 0 0) !important;
    }

    .close {
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

    #filtre {
        min-height: 100vh;
        width: 100%;
        position: fixed;
        right: 0;
        top: 0;
        flex-direction: column;
        background-color: #f5f5f5;
        clip-path: inset(0 0 0 100%);
        transition: 0.3s ease;
        z-index: 24;
        overflow-y: scroll;
    }

</style>
