<template>
    <div>
        <Header>

        </Header>
        <h1>Recherche d’un sportif</h1>
        <div class="search-annonce">
            <input id="research" type="text" placeholder="Recherche..." @change="search()">
            <div class="img-container">
                <img src="/storage/img/logo_search.png" alt="settings button">
            </div>
        </div>
        <h2 id="Error">Aucun résultat trouvé</h2>
        <div class="annonces-container" v-for="annonce in tab_search" :key="annonce.id">
            <a :href="'/annonce/'+annonce.id">
                <img src="" alt="img profil compagnie">
                <div>
                    <div class="flex justify-between pr-2">
                        <h3>{{annonce.announcement_title}}</h3>
                        <img src="/storage/img/favorite_heart.png" alt="favorite img">
                    </div>
                    <h4>Nom de l'entreprise</h4>
                    <h5>{{annonce.localisation}}</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, maxime?</p>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
    import Header from '@/Components/Header.vue'
    export default{
        components:{
            Header
        },
        data(){
            return{
                tab_search:this.annonces,
                tab_reset:[]
            }
        },
        props:['annonces'],
        methods:{
            search(){
                if(this.tab_search = []){
                    this.tab_search = this.annonces
                }
                this.tab_reset = this.tab_search
                this.tab_search = []
                var param_search = document.getElementById('research').value.toUpperCase()
                for(var i = 0; i<this.tab_reset.length; i++){
                    if (this.tab_reset[i].announcement_title.toUpperCase() == param_search){
                        this.tab_search.push(this.tab_reset[i])
                    }
                }
                if(this.tab_search.length == 0){
                    document.getElementById('Error').style.display='flex'
                    this.tab_search=this.annonces
                }else{
                    document.getElementById('Error').style.display='none'
                }
                console.log(this.tab_search.length)
            }
        }
    }


</script>

<style scoped>

    header{
        display: flex;
        position: fixed;
        height: 63px;
        background: white;
        align-items: center;
        max-width: 375px;
        width: 100%;
        justify-content: space-between;
        padding: 0 15px;
        box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.13);
    }

    h1{
        padding-top: 79px;
        padding-bottom: 16px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    h3{
        font-size: 20px;
        font-weight: bold;
    }

    h4{
        font-size: 16px;
        color: #0094FF;
    }

    h5{
        font-size: 14px;
        font-weight: 600;
        padding-top: 4px;
    }

    p{
        font-size: 14px;
        padding-top: 4px;
    }

    .search-annonce{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-annonce span{
        max-width: 194px;
        width: 100%;
    }

    .img-container{
        background-color: #001598;
        height: 34px;
        width: 34px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 4px;
        margin-left: 8px;
    }

    .img-container img{
        object-fit: contain;
        max-width: 123px;
        width: 100%;
    }

    #Error{
        display: none;
        justify-content: center;
        align-items: center;
        padding-top: 20px;
        font-weight: bold;
    }

    .annonces-container{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 16px 14px;
        max-width: 348px;
        width: 100%;
        border-radius: 3px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.12);
    }

    .annonces-container a{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .annonces-container img{
        border-radius: 3px;
        object-fit: contain;
    }

    .annonces-container div{
        padding-left: 8px;
    }
</style>
