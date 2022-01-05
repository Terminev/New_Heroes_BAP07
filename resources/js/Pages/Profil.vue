<template>

<Header>

</Header>

<div class="blue-bloc">
<h1>
    {{user.last_name}} {{user.name}}
</h1>
</div>

<div class="circle-profil">

</div>


<div class="sport">
    <h3>
        Cyclisme
    </h3>
</div>



<section class="containeur">

<div class="logos">
    <img src="/storage/img/instagram.png" alt="insta">
    <img src="/storage/img/twitter.png" alt="twitter">
    <img src="/storage/img/linkedin.png" alt="lkd">
</div>

<div class="description-profil">
<p>Biographie</p>
</div>

<div class="description-profil">
<p>Description du projet</p>
</div>

<div class="activity-domaine" @click="Accordeon(1)" id="question1">
<h2>
    Domaine d'activité
</h2>
<img src="/storage/img/plus.png" alt="+">
</div>
<div class="question-reponse" id="reponse1" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
<div class="activity-domaine" @click="Accordeon(2)" id="question2">
<h2>
    Contrat type
</h2>
<img src="/storage/img/plus.png" alt="+">
</div>
<div class="question-reponse" id="reponse2" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
<div class="activity-domaine" @click="Accordeon(3)" id="question3">
<h2>
    Poste
</h2>
<img src="/storage/img/plus.png" alt="+">
</div>
<div class="question-reponse" id="reponse3" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
<div class="activity-domaine" @click="Accordeon(4)" id="question4">
<h2>
    Lieu de travail
</h2>
<img src="/storage/img/plus.png" alt="+">
</div>
<div class="question-reponse" id="reponse4" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
<div class="activity-domaine"  @click="Accordeon(5)" id="question5">
<h2>
    Salaire
</h2>
<img src="/storage/img/plus.png" alt="+">
</div>
<div class="question-reponse" id="reponse5" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
<div class="activity-domaine"  @click="Accordeon(6)" id="question6">
<h2>
    Possibilité de mobilité
</h2>
<img src="/storage/img/plus.png" alt="+">
</div>
<div class="question-reponse" id="reponse6" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
<button>
    Recrutez
</button>
</section>

</template>

<style scoped>

.logos{
    display: flex;
    justify-content: space-around;
    width: 100%;
}

.question-reponse{
    margin-top: 10px;
}

.question-reponse p{
    background-color: rgb(197, 194, 194);
    text-align: center;
    width: 90%;
    margin: 0 auto;
    padding: 10px;
}

.sport{
    text-align: center;
    margin-top: 100px;
}

.sport h3 {
    font-weight: 400;
    color: rgba(0, 21, 152, 1);
    font-size: 20px;
}

button{
    background-color: #0d6efd;
    width: 80%;
    height: 46px;
    margin-top: 15px;
    padding-left: 5px;
    padding-right: 5px;
    color: white;
    margin-bottom: 20px;
}

.activity-domaine{
    width: 90%;
    padding: 15px;
    border-radius: 5px;
    background-color: rgba(242, 242, 242, 1);
    margin: 20px auto 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
}

.activity-domaine img{
    align-items: right;
}

.containeur{
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin-top: 25px;
    align-items: center;
}

.description-profil{
    width: 90%;
    height: 150px;
    background-color: rgba(242, 242, 242, 1);
    border-radius: 5px;
    margin-top: 11px;
    padding: 10px;

}

h1{
    font-size: 30px;
    font-weight: 600;
    text-align: center;
}

.circle-profil{
    width: 137px;
    height: 141px;
    border-radius: 50%;
    background-image: url('/storage/img/cycliste.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    border: 4px solid rgba(0, 22, 163, 1);
    position: absolute;
    top: 120px;
    left: 120px;
}

.blue-bloc{
    position: relative;
    width: 100%;
    height: 120px;
    background-color: #eaf5f3;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
    padding-top: 10px;
}


</style>

<script>
import Header from '@/Components/Header.vue'
    export default{
        props:['user'],
        components: {
        Header
        },
        methods: {
            Accordeon(id){
                if(id == 1){
                    var question = document.getElementById('question1')
                    var etat = document.getElementById('reponse1')

                    if(etat.style.getPropertyValue('display') == 'none'){
                        etat.style.display = 'flex'

                    }else{
                        etat.style.display = 'none'
                    }
                }
                if(id == 2){
                    var question = document.getElementById('question2')
                    var etat = document.getElementById('reponse2')

                    if(etat.style.getPropertyValue('display') == 'none'){
                        etat.style.display = 'flex'

                    }else{
                        etat.style.display = 'none'
                    }
                }
                if(id == 3){
                    var question = document.getElementById('question3')
                    var etat = document.getElementById('reponse3')

                    if(etat.style.getPropertyValue('display') == 'none'){
                        etat.style.display = 'flex'

                    }else{
                        etat.style.display = 'none'
                    }
                }
                if(id == 4){
                    var question = document.getElementById('question4')
                    var etat = document.getElementById('reponse4')

                    if(etat.style.getPropertyValue('display') == 'none'){
                        etat.style.display = 'flex'

                    }else{
                        etat.style.display = 'none'
                    }
                }
                 if(id == 5){
                    var question = document.getElementById('question5')
                    var etat = document.getElementById('reponse5')

                    if(etat.style.getPropertyValue('display') == 'none'){
                        etat.style.display = 'flex'

                    }else{
                        etat.style.display = 'none'
                    }
                }
                 if(id == 6){
                    var question = document.getElementById('question6')
                    var etat = document.getElementById('reponse6')

                    if(etat.style.getPropertyValue('display') == 'none'){
                        etat.style.display = 'flex'

                    }else{
                        etat.style.display = 'none'
                    }
                }
            }
        }
}
</script>
