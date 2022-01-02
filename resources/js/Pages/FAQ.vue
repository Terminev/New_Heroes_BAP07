<template>

<div class="containeur-faq">

 <header>
        <img src="/storage/img/logo.png" alt="logo">
        <img src="/storage/img/list.svg" alt="burger">
</header>

<img class="faqimg" src="/storage/img/faq-img.png" alt="faq-img">

<h1>
    FAQ
</h1>

<section class="question">

<div class="containeur">
    <div class="question-title" @click="Accordeon(1)" id="question1" >
        <h2>
            Question 1 ?
        </h2>
        <img src="/storage/img/plus.png" alt="plus">
    </div>
    <div class="question-reponse" id="reponse1" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
</div>



<div class="containeur">
    <div class="question-title" @click="Accordeon(2)" id="question2" >
        <h2>
            Question 2 ?
        </h2>
        <img src="/storage/img/plus.png" alt="plus">
    </div>
    <div class="question-reponse" id="reponse2" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
</div>


<div class="containeur">
    <div class="question-title" @click="Accordeon(3)" id="question3" >
        <h2>
            Question 3 ?
        </h2>
        <img src="/storage/img/plus.png" alt="plus">
    </div>
    <div class="question-reponse" id="reponse3" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
</div>


<div class="containeur">
    <div class="question-title" @click="Accordeon(4)" id="question4" >
        <h2>
            Question 4 ?
        </h2>
        <img src="/storage/img/plus.png" alt="plus">
    </div>
    <div class="question-reponse" id="reponse4" style="display:none; ">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque id impedit voluptatem maiores reprehenderit esse dignissimos quaerat, dicta voluptates in ratione mollitia suscipit optio libero iure molestiae. Corporis, tempora.
        </p>
    </div>
</div>

</section>






</div>
</template>


<style scoped>

section{
    width: 90%;
}


.question-title{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding: 10px;
    background-color: white;
    justify-content: center;
    margin: 16px auto;
    align-items: center;
}

.question-title h2{
    grid-column: 2/3;
    text-align: center;
}

.question-title img{
    grid-column: 3/4;
    margin: 0 auto;
}



.question-reponse{
    display: none;
}

p{
    background-color: rgb(197, 194, 194);
    text-align: center;
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

.containeur-faq{
    min-height: 100vh;
    background: linear-gradient(
#eaf5f3,
#c9d7eb);
display: flex;
align-items: center;
flex-direction: column;
}

h1{
    font-weight: 600;
    font-size: 30px;
}

.faqimg{
    margin: 30px 0;
}

</style>

<script>

    export default{
        components: {

        },

        data() {
            return {

            }
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
            }
        }
    }

</script>
