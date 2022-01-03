<template>
    <Head title="Log in" />

    <header>
        <img src="storage/img/logo.png" alt="logo">
        <img src="storage/img/list.png" alt="burger">
    </header>

    <jet-authentication-card>
        <h1>S'IDENTIFIER</h1>
        <template #logo>
            <jet-authentication-card-logo />
        </template>

        <jet-validation-errors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>


        <form @submit.prevent="submit">

            <div class="rounded">
                <div class="input-container">
                    <div class="img-container">
                        <img src="/storage/img/@.png" alt="login">
                    </div>
                    <jet-input id="email" type="email" class="w-full input" placeholder="Adress e-email" v-model="form.email" required autofocus />
                </div>
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/lock.png" alt="login">
                </div>
                <jet-input id="password" type="password" class="w-full input" placeholder="mot de passe" v-model="form.password" required autocomplete="current-password" />
            </div>

            <jet-button class="button-login">
                S'IDENTIFIER
            </jet-button>

            <div class="block remember-button mt-8">
                <label class="remember-button-content">
                    <jet-checkbox class="border-black" name="remember" v-model:checked="form.remember" />
                    <span class="ml-2">Souvenez-vous de moi</span>
                </label>
            </div>

            <div class="flex items-center justify-center flex-col password-forgot">
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm hover:text-gray-900">
                    Mot de passe oublié ?
                </Link>
                <Link v-if="canResetPassword" :href="route('register')" class="text-sm mt-8 hover:text-gray-900">
                    Nouveau du New Heroes ? <span class="font-bold">Inscrivez-vous</span>
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
        font-size: 16px;
        margin: 20px 0;
        padding: 12px;
        color: #f5f5f5;
        background: #0D6EFD;
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

    .remember-button-content{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
    }
</style>