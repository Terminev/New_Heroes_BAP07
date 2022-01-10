<template>
    <div>

        <Header>

        </Header>


        <div class="annonce-header">
            <div class="annonce-header-text">
                <h1>Nom de l'entreprise</h1>
                <h2>{{annonces.localisation}}</h2>
                <jet-button class="button-post background-blue">
                    POSTULER
                </jet-button>
                <a :href="'/annonce/'+annonces.id+'/delete'">
                    <jet-danger-button class="button-delete background-red" v-if="user.id == annonces.compagnies_id">
                        Supprimer L'annonce
                    </jet-danger-button>
                </a>
            </div>
            <div class="annonce-header-img">
                <!-- On pourra ajouter plus tard le système de favorie aussi sur cette page  -->
                <!-- <div v-if="$page.props.user">
                    <img v-if="annonces.compagnies_id ==  favorie.announcement_companies_table_id" class="blackheart"
                        src="/storage/img/favorite_heart.png" alt="favorite img">
                    <img v-else class="blackheart" src="/storage/img/blackheart.png" alt="No in favorite img">
                </div> -->
                <img class="logo-compagny" src="" alt="img profil compagnie">
                <a :href="'/annonce/'" class="flex button-back">
                    <img src="/storage/img/arrow_left.png" alt="favorite img"> Retour
                </a>
            </div>
        </div>

        <div class="annonce-content">
            <div>
                <h3>Type de contrat :</h3>
                <p>{{annonces.type_of_contract}} - {{annonces.time_work}}h / semaine</p>
            </div>
            <div>
                <h3>Service :</h3>
                <p>{{annonces.announcement_title}}</p>
            </div>
            <div>
                <h3>Domaine :</h3>
                <p>{{annonces.domaine}}</p>
            </div>
            <div>
                <h3>Temps de travail :</h3>
                <p>{{annonces.time_work}}h / semaine</p>
            </div>
            <div>
                <h3>Nombre de post ouvert :</h3>
                <p>Il reste {{annonces.number_of_jobs}} postes</p>
            </div>
            <div>
                <h3>Rémuneration :</h3>
                <p>{{annonces.pay}}€ / mois</p>
            </div>
            <div>
                <p>{{annonces.announcement_description}}</p>
            </div>
            <div class="align-button">
                <a :href="'/annonce/'+annonces.id+'/edit'" class="edit">Edit</a>
            </div>
        </div>
    </div>
</template>

<script>
    import Header from '@/Components/Header.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetDangerButton from '@/Jetstream/DangerButton.vue'

    export default {
        components: {
            Header,
            JetButton,
            JetDangerButton,
        },
        props: ['annonces', 'user'],

        data() {
            return {
                tab_in_favories: [],
            }
        },

        methods: {
            deleteAnnonce() {
                var id = this.annonces.id
                console.log(id)
                console.log(this.$inertia)
                this.$inertia.get(this.route('annonce_compagnie.destroy'), id)
            },

            // ChangeColor() {
            //     this.tab_in_favories = []
            //     console.log(this.favories.length)
            //     console.log(this.tab_in_favories)

            //     for (var l = 0; l < this.favories.length; l++) {
            //         if (this.user.id == this.favories[l].users_id) {
            //             this.tab_in_favories.push(this.favories[l].announcement_companies_table_id)
            //         }
            //     }
            // }
        },

        // mounted() {
        //     this.ChangeColor()
        // },

    }

</script>

<style scoped>
    .align-button {
        display: flex;
        justify-content: center;
    }

    .edit {
        background-color: #001598;
        width: 50%;
        color: white;
        border-radius: 4px;
        text-align: center;
    }

    header {
        display: flex;
        position: fixed;
        height: 63px;
        background: white;
        align-items: center;
        width: 100%;
        justify-content: space-between;
        padding: 0 15px;
        box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.13);
    }

    .annonce-header {
        padding: 83px 23px 26px 23px;
        display: flex;
        justify-content: space-between;
        border-bottom: 5px solid #BDBBBB;
    }

    .annonce-header-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    h1 {
        font-size: 24px;
        font-weight: bold;
        text-align: left;
    }

    h3 {
        font-weight: bold;
        font-size: 12px;
        text-transform: uppercase;
    }

    p {
        font-size: 11px;
    }

    /* Contenu du haut de la page d'une annonce */

    .button-post,
    .button-delete {
        padding: 6px 43px;
        margin-top: 8px;
        font-size: 14px;
        background-color: #001598;
        color: #FFFFFF;
        border-radius: 4px;
        max-width: 146px;
    }

    .background-blue {
        background-color: #001598;
    }

    .background-red {
        background-color: rgb(192, 8, 8);
    }

    .annonce-header-img {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 12px;
    }

    .annonce-header-img .logo-compagny {
        max-width: 60px;
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    .button-back {
        color: #C9C9C9;
    }

    .button-back img {
        object-fit: contain;
        padding-right: 4px;
    }

    /* Contenu de la page annonce avec tous les éléments  */

    .annonce-content {
        padding: 4px 25px;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

</style>
