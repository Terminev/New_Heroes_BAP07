<template>

<div class="mentions-legals-containeur">
<Header>

</Header>


<div class="mentions">

<h3>
    Mentions Légals
</h3>


<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae perferendis aliquid ex mollitia consectetur. Dolor unde sit asperiores dolores pariatur commodi alias doloremque deleniti quo! Aliquid saepe soluta distinctio repudiandae.
    Aliquam a suscipit eos, quia excepturi repellendus laboriosam quasi quam et nisi facere dignissimos neque animi necessitatibus minus quidem alias nesciunt iure praesentium minima accusantium corporis optio iusto nulla? Exercitationem.
    Expedita, deleniti corrupti! Deleniti impedit provident temporibus, nemo veritatis iure neque numquam explicabo voluptatibus ad earum atque? Laborum, ex iste aliquid voluptatem libero temporibus architecto nam dolor, commodi saepe alias!
    Nulla officia praesentium dicta autem aspernatur quas suscipit at? Architecto voluptatem minima dolorum officia consectetur a repellat perferendis possimus enim, animi doloremque mollitia. Facilis soluta iusto itaque qui ipsum quis!
    Debitis itaque odit a tempora sit qui beatae non, blanditiis numquam, magni quia aperiam accusantium magnam praesentium! Voluptates, itaque, dolore voluptatum temporibus odit quam, quos aut dolorum aspernatur repudiandae reiciendis.
</p>
</div>



</div>
</template>





<style scoped>


.mentions{
    width: 90%;
    margin: 20px auto 0 auto;
    min-height: 100vh;
    text-align: center;
    padding-bottom: 20px;
}

.mentions h3{
    font-weight: 400;
    width: 80%;
    margin: 20px auto;
    padding: 10px 0 10px 0;
    border: solid 1px black;
}

.mentions p{
    background-color: white;
    padding: 10px 20px;
}
.mentions-legals-containeur{
    min-height: 100vh;
     background: linear-gradient(
#eaf5f3,
#c9d7eb);
}


label{
 display:flex;
  flex-direction:column;
  width:70px;
  cursor:pointer;
  transform: scale(0.4);
}

label span{
  background: rgb(0, 0, 0);
  border-radius:10px;
  height:7px;
  margin: 7px 0;
  transition: .4s  cubic-bezier(0.68, -0.6, 0.32, 1.6);

}


span:nth-of-type(1){
  width:50%;

}

span:nth-of-type(2){
  width:100%;
}


span:nth-of-type(3){
  width:75%;

}


input[type="checkbox"]{
  display:none;
}


input[type="checkbox"]:checked ~ span:nth-of-type(1){
  transform-origin:bottom;
  transform:rotatez(45deg) translate(8px,0px)
}


input[type="checkbox"]:checked ~ span:nth-of-type(2){

  transform-origin:top;
  transform:rotatez(-45deg)
}


input[type="checkbox"]:checked ~ span:nth-of-type(3){

  transform-origin:bottom;
  width:50%;
  transform: translate(30px,-11px) rotatez(45deg);

}




</style>
<script>
    import Header from '@/Components/Header.vue'
    export default{
        components: {
        Header
        },
}
</script>
