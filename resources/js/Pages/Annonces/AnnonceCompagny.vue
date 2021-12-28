<template>
    <div>
        <h1>Annonces</h1>
        <div class="annonces-container" v-for="annonce in annonces" :key="annonce.id">
            <a :href="'/annonce/'+annonce.id">
                <img src="" alt="img profil compagnie">
                <div>
                    <h3>{{annonce.announcement_title}}</h3>
                    <h4>Nom de l'entreprise</h4>
                    <p class="">{{annonce.localisation}}</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, maxime?</p>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
    export default{
        props:['annonces']
    }
</script>

<style scoped>
    h1{
        font-size: 50px;
        font-weight: bold;
    }
</style>