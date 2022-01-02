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







</div>
</template>


<style scoped>

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
