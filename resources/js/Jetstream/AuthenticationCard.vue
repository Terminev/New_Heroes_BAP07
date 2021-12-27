<template>
    <div class="h-screen">

        <!-- Ici j'ai enlevé le logo de base  -->
        <!-- <div>
            <slot name="logo" />
        </div> -->

        <div class="flex flex-col items-center justify-center bg-linear-main h-screen">
            <slot />
        </div>
    </div>
</template>

<style scoped>

    /* J'ai ajouté a la carte d'identification le background linear donné dans la maquette  */
    .bg-linear-main{
        background: linear-gradient(0.55turn, #C6E3DE, #81A4D0);
    }
</style>