<template>
    <!-- J'ai enlevé le style du boutton pour en refaire un nouveau -->
    <button :type="type" class="">
        <slot></slot>
    </button>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    })
</script>
