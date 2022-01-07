<template>
    <div>
       <Header>

       </Header>

        <div class="annonce-header">
            <div class="annonce-header-text">
                <h1>Nom de l'entreprise</h1>
                <h2>{{annonce.localisation}}</h2>
                <jet-button class="button-post background-blue">
                    POSTULER
                </jet-button>
                <jet-button v-if="user.id == annonce.compagnies_id" class="button-post background-red" @click="Delete">
                    Supprimer L'annonce
                </jet-button>
            </div>
            <div class="annonce-header-img">
                <img src="/storage/img/favorite_heart.png" alt="favorite img">
                <img class="logo-compagny" src="" alt="img profil compagnie">
                <a :href="'/annonce/'" class="flex button-back">
                    <img src="/storage/img/arrow_left.png" alt="favorite img"> Retour
                </a>
            </div>
        </div>

        <div class="annonce-content">
            <form @submit.prevent="submit">

                <div class="h-11 mt-8 mb-8">
                    <h3>Service :</h3>
                    <input id="announcement_title" type="text" placeholder="Service" class="block w-full"
                    required :value="annonce.announcement_title" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Type de contrat :</h3>
                    <input id="type_of_contract" type="text" placeholder="CDD/CDI" class="block w-full"
                     required :value="annonce.type_of_contract" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Où se situe votre entreprise:</h3>
                    <input id="localisation" type="text" placeholder="localisation" class="block w-full"
                    required :value="annonce.localisation" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Domaine d'activité :</h3>
                    <input id="domaine" type="text" placeholder="Dans quelle domaine vous cherchez"
                        class="block w-full" required :value="annonce.domaine" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Temps de travail :</h3>
                    <input id="time_work" type="number" placeholder="Combien d'heure par semaine"
                        class="block w-full" required :value="annonce.time_work" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Nombre de post ouvert :</h3>
                    <input id="number_of_jobs" type="number" placeholder="nombre de post resant"
                        class="block w-full"  required :value="annonce.number_of_jobs"
                         />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Rémuneration :</h3>
                    <input id="pay" type="number" placeholder="Salaire/mois" class="block w-full"
                        required :value="annonce.pay"  />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <!-- Il faudra changer cette input pour mettre le truc html où on peut styliser directement dans le site  -->
                    <h3>Déscription du post :</h3>
                    <textarea id="announcement_description"
                        placeholder="Inscrivez ici tous ce qui vous passe par la tête" class="block w-full"
                        required :value="annonce.annonce_description"
                        />
                </div>
            </form>
            <div class="align-button">
                <input type="submit" value="Modifer Annonce" class="edit">
            </div>
        </div>
    </div>
</template>

<script>
    import Header from '@/Components/Header.vue';
    export default {
        components : {
            Header
        },
        props: ['annonce', 'user'],

        data(){
            return{
                form: []
            }
        },

        methods: {
            submit() {
                console.log('test')
                this.form = []

                var compagnies_id = this.user.id
                var announcement_title = document.getElementById('announcement_title').value
                var domaine = document.getElementById('domaine').value
                var localisation = document.getElementById('localisation').value
                var announcement_description = document.getElementById('announcement_description').value
                var pay = document.getElementById('pay').value
                var type_of_contract = document.getElementById('type_of_contract').value
                var time_work = document.getElementById('time_work').value
                var number_of_jobs = document.getElementById('number_of_jobs').value

                console.log(this.form)

                this.form.push({
                    'compagnies_id': compagnies_id,
                    'announcement_title': announcement_title,
                    'domaine': domaine,
                    'localisation': localisation,
                    'announcement_description': announcement_description,
                    'pay': pay,
                    'type_of_contract': type_of_contract,
                    'time_work': time_work,
                    'number_of_jobs': number_of_jobs,
                })
        }
    }

}
</script>

<style scoped>

.align-button{
    display: flex;
    justify-content: center;
}

.edit{
    background-color: #001598;
    width: 50%;
    color: white;
    border-radius:4px ;
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

    .button-post {
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
