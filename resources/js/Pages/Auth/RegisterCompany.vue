<template>

    <Head title="Register" />

    <header>
        <img src="/storage/img/logo.png" alt="logo">
        <img src="/storage/img/list.svg" alt="burger">
    </header>

    <jet-authentication-card>
        <template #logo>
            <jet-authentication-card-logo />
            <h1>INSCRIPTION</h1>
        </template>


        <jet-validation-errors class="mb-4" />


        <form @submit.prevent="submit">

            <div class="border flex h-11 rounded">
                <div class="containeurimage">
                    <img class="age" src="/storage/img/age-group.png" alt="login">
                </div>
                <jet-input id="company_name" type="text" placeholder="Company_name" class="block w-full"
                    v-model="form.company_name" required autocomplete="company_name" />
            </div>

            <div class="border flex h-11 rounded">
                <div class="containeurimage">
                    <img src="/storage/img/login2.png" alt="login">
                </div>
                <jet-input id="name_representing" type="text" placeholder="Name Representing" class="block w-full"
                    v-model="form.name_representing" required autofocus autocomplete="name" />
            </div>

            <div class="border flex h-11 rounded">
                <div class="containeurimage">
                    <img src="/storage/img/login2.png" alt="login">
                </div>
                <jet-input id="siret" type="text" placeholder="Siret" class="block w-full" v-model="form.siret" required
                    autofocus autocomplete="name" />
            </div>



            <div class="border flex h-11 rounded">
                <div class="containeurimage">
                    <img src="/storage/img/telephone.png" alt="login">
                </div>
                <jet-input id="phone" type="number" placeholder="Phone Number" class="block w-full" v-model="form.phone"
                    required autofocus autocomplete="name" />
            </div>

            <div class="border flex h-11 rounded">
                <div class="containeurimage">
                    <img src="/storage/img/@.png" alt="login">
                </div>
                <jet-input id="email" type="email" placeholder="E-mail" class="block w-full" v-model="form.email"
                    required />
            </div>



            <div class="border flex h-11">
                <div class="containeurimage">
                    <img src="/storage/img/lock.png" alt="login">
                </div>
                <jet-input id="password" type="password" placeholder="Password" class="block w-full"
                    v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="border flex h-11 rounded">
                <div class="containeurimage">
                    <img src="/storage/img/lock.png" alt="login">
                </div>
                <jet-input id="password_confirmation" type="password" placeholder="Password Confirmation"
                    class="block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                <jet-label for="terms">
                    <div class="flex items-center">
                        <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />

                        <div class="ml-2">
                            I agree to the <a target="_blank" :href="route('terms.show')"
                                class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a
                                target="_blank" :href="route('policy.show')"
                                class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                        </div>
                    </div>
                </jet-label>
            </div>

            <div class="submit flex items-center justify-end flex-col-reverse">
                <Link :href="route('login')"
                    class="login text-center underline text-sm text-black-900 hover:text-black-900">
                Vous avez déja un compte ? Connectez-vous
                </Link>

                <jet-button class="w-full flex justify-center" :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing">
                    CREER UN COMPTE
                </jet-button>
            </div>
        </form>
    </jet-authentication-card>
</template>



<script>
    import {
        defineComponent
    } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import {
        Head,
        Link
    } from '@inertiajs/inertia-vue3';

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

        data() {
            return {
                form: this.$inertia.form({
                    company_name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                    name_representing: '',
                    siret: '',
                    phone: '',
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    })

</script>


<style scoped>
    h1 {
        font-weight: bold;
        font-size: 30px;
    }

    /* form{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
} */

    form {
        padding: 30px 0;
        padding-left: 50px;
        padding-right: 50px;
    }

    jet-input {
        width: 257, 68px;
    }

    .containeurimage {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 31px;
        height: 100%;
        background: linear-gradient(#bbd9db, #8aacd1);
    }

    .border {
        margin-bottom: 15px;
    }

    .age {
        width: 24px;
        height: auto;
    }

    .submit {
        margin-top: 65px;
    }

    .login {
        padding-top: 30px;
    }

    header {
        width: 100%;
        height: 63px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-left: 15px;
        padding-right: 15px;
    }

</style>
