<template>
    <div class="">

        <!-- Ici j'ai enlevé le logo de base  -->
        <!-- <div>
            <slot name="logo" />
        </div> -->

        <div class="flex flex-col items-center justify-center bg-linear-main">
            <slot />
        </div>
    </div>
</template>

<style scoped>

    /* J'ai ajouté a la carte d'identification le background linear donné dans la maquette  */
    .bg-linear-main{
        background: linear-gradient(0.55turn, #E9F5F3, #CBD8EC);
        height: 100vh;
        padding-top: 117px;
    }
</style>