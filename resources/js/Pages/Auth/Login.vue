<template>
    <Head title="Log in" />

    <header>
        <img src="storage/img/logo.png" alt="logo">
        <img src="storage/img/list.png" alt="burger">
    </header>

    <jet-authentication-card>
        <h1>Connexion</h1>
        <template #logo>
            <jet-authentication-card-logo />
        </template>

        <img src="storage/img/logo_login.png" alt="img logo connection">

        <jet-validation-errors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>


        <form @submit.prevent="submit">
            <jet-button class="button-login">
                LOGIN
            </jet-button>

            <div class="">
                <div class="img-container">
                    <img src="/storage/img/person-circle.png" alt="login">
                </div>
                <jet-input id="email" type="email" class="mt-1 block w-full" placeholder="email" v-model="form.email" required autofocus />
            </div>

            <div class="">
                <div class="img-container">
                    <img src="/storage/img/lock.png" alt="login">
                </div>
                <jet-input id="password" type="password" class="mt-1 block w-full" placeholder="mot de passe" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block remember-button">
                <label class="remember-button-content">
                    <jet-checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-center flex-col password-forgot">
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Mot de passe oublié ?
                </Link>
                <Link v-if="canResetPassword" :href="route('register')" class="underline text-sm mt-5 text-gray-600 hover:text-gray-900">
                    Vous n'avez pas de compte inscrivez-vous ?
                </Link>
            </div>
        </form>
    </jet-authentication-card>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    })
</script>

<style scoped>


    h1{
        font-size: 30px;
        font-weight: bold;
        text-shadow: 0px 4px 4px rgb(16,16,16,0.25);
    }

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

    .button-login{
        font-size: 24px;
        font-weight: bold;

        margin: 30px 0;
        text-shadow: 0px 4px 4px rgb(16,16,16,0.25);
    }

    .remember-button-content{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        text-shadow: 0px 4px 4px rgb(16,16,16,0.25);
    }


    form{
        font-size: 24px;
        color: #101010;
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .password-forgot{
        font-size: 14px;
    }


    header{
        display: flex;
        position: fixed;
        height: 63px;
        background: white;
        align-items: center;
        width: 100%;
        justify-content: space-between;
        padding: 0 15px;
    }

    .input-container{
        display: flex;
        height: 46px;
        border-radius: 4px;
        background: linear-gradient(#C6E3DE,#81A4D0);
    }

    .input-container .input{
        margin: 2px 2px 2px 0px;
    }

    .img-container{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 31px;
        height: auto;
        margin: 2px;
        background: linear-gradient(#E9F5F3,#CBD8EC);
    }

    .text-color{
        color: #0094FF;
    }

    .remember-button-content{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        text-shadow: 0px 4px 4px rgb(16,16,16,0.25);
    }
</style>
