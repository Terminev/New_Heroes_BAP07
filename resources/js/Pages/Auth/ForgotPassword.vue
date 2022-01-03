<template>
    <Head title="Forgot Password" />

    <header>
        <img src="storage/img/logo.png" alt="logo">
        <img src="storage/img/list.png" alt="burger">
    </header>

    <jet-authentication-card>
        
        <h1>Mot de passe oublié</h1>

        <div class="forgot-psw-text">
            <p>Vous avez oubliez votre mot de passe ?</p>
            <p>Aucun problème. Il suffit de nous communiquer votre adresse mail et nous vous enverrons un lien de réinitialisation du mot de passe qui vous permettra d'en choisir un nouveau.</p>
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <jet-validation-errors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <jet-label for="email" value="Email" />
                <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
            </div>

            <div class="button flex items-center justify-center mt-4">
                <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Réinitialiser votre mot de passe
                </jet-button>
            </div>
        </form>
    </jet-authentication-card>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head } from '@inertiajs/inertia-vue3';
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'

    export default defineComponent({
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetLabel,
            JetValidationErrors
        },

        props: {
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: ''
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('password.email'))
            }
        }
    })
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

    h1{
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .forgot-psw-text{
        text-align: justify;
        max-width: 290px;
        display: flex;
        flex-direction: column;
        gap: 16px;
        padding-bottom: 64px;
    }

    .button{
        background-color: #0D6EFD;
        border-radius: 4px;
        padding: 12px;
        color: white;
    }

</style>