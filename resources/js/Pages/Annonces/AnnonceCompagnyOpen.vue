<template>
    <div>
        <header>
            <img src="/storage/img/logo.png" alt="logo">
            <img src="/storage/img/list.png" alt="burger">
        </header>

        <div class="profile-title">
            <h1>Profile</h1>
        </div>
        <div>
            <h3>{{annonces.announcement_title}}</h3>
            <h4>Nom de l'entreprise</h4>
            <h2>{{annonces.localisation}}</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, maxime?</p>
        </div>
    </div>
</template>

<script>
export default {
    props:['annonces']
}
</script>

<style scoped>
    header{
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

    .profile-title{
        padding-top: 79px;
        background: linear-gradient(#E9F5F3,#CBD8EC);
        padding-bottom: 51px;
        box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.13);
    }

    h1{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
    }

</style>