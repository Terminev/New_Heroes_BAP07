<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-linear">
        <div>
            <slot name="logo" />
        </div>


            <slot />

    </div>
</template>


<style scoped>

.bg-linear{
    background: linear-gradient(
#eaf5f3,
#c9d7eb);
}
</style>
