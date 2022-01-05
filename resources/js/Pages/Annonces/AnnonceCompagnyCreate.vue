<template>
    <div>
        <Header> </Header>

        <h1>Je creer une annonce</h1>
        <a :href="'/annonce/'" class="flex button-back">
            <img src="/storage/img/arrow_left.png" alt="favorite img" /> Retour
        </a>

        <div class="annonce-content">
            <div>
                <h3>Type de contrat :</h3>
                <!-- <p>{{annonces.type_of_contract}}</p> -->
            </div>
            <div>
                <h3>Domaine du contrat :</h3>
                <!-- <p>{{annonces.domaine}}</p> -->
            </div>
            <div>
                <h3>Service :</h3>
                <!-- <p>{{annonces.announcement_title}}</p> -->
            </div>
            <div>
                <h3>Temps de travail :</h3>
                <!-- <p>{{annonces.time_work}}</p> -->
            </div>
            <div>
                <h3>Nombre de post ouvert :</h3>
                <!-- <p>Il reste {{annonces.number_of_jobs}} postes</p> -->
            </div>
            <div>
                <h3>Rémuneration :</h3>
                <!-- <p>{{annonces.pay}}€ / mois</p> -->
            </div>
            <div>
                <!-- <p>{{annonces.announcement_description}}</p> -->
            </div>
        </div>

    </div>
</template>

<script>
    import Header from "@/Components/Header.vue";

    export default {
        components: {
            Header,
        },
    };

</script>

<style scoped>
    h1 {
        padding-top: 25px;
        padding-bottom: 16px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    .button-back {
        color: #C9C9C9;
    }

    .button-back img {
        object-fit: contain;
        padding-right: 4px;
    }

</style>
