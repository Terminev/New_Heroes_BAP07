<template>

    <Head title="Register" />
    <Header>

    </Header>

    <jet-authentication-card>
        <template #logo>
            <jet-authentication-card-logo />
            <h1>INSCRIPTION</h1>
        </template>


        <jet-validation-errors class="mb-4" />

        <form @submit.prevent="submit" v-if="!form.entreprise">

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/login2.png" alt="login">
                </div>
                <jet-input id="name" type="text" placeholder="First Name" class="block w-full" v-model="form.name"
                    required autofocus autocomplete="name" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/login2.png" alt="login">
                </div>
                <jet-input id="last_name" type="text" placeholder="Last Name" class="block w-full"
                    v-model="form.last_name" required autofocus autocomplete="name" />
            </div>


            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/map.png" alt="login">
                </div>
                <jet-input id="localisation" type="text" placeholder="Localisation" class="block w-full"
                    v-model="form.localisation" required autofocus autocomplete="name" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/telephone.png" alt="login">
                </div>
                <jet-input id="phone" type="number" placeholder="Phone Number" class="block w-full" v-model="form.phone"
                    required autofocus autocomplete="name" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/@.png" alt="login">
                </div>
                <jet-input id="email" type="email" placeholder="E-mail" class="block w-full" v-model="form.email"
                    required />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img class="age" src="/storage/img/age-group.png" alt="login">
                </div>
                <jet-input id="age" type="number" placeholder="Age" class="block w-full" v-model="form.age" required
                    autocomplete="new-password" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/lock.png" alt="login">
                </div>
                <jet-input id="password" type="password" placeholder="Password" class="block w-full"
                    v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="input-container">
                <div class="img-container">
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

        <form @submit.prevent="submit" v-if="form.entreprise">

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/login2.png" alt="login">
                </div>
                <jet-input id="company_name" type="text" placeholder="Company Name" class="block w-full"
                    v-model="form.company_name" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/login2.png" alt="login">
                </div>
                <jet-input id="siret" type="text" placeholder="Siret" class="block w-full" v-model="form.siret"
                    autofocus />
            </div>


            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/map.png" alt="login">
                </div>
                <jet-input id="localisation" type="text" placeholder="Localisation" class="block w-full"
                    v-model="form.localisation" required autofocus autocomplete="name" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/telephone.png" alt="login">
                </div>
                <jet-input id="phone" type="number" placeholder="Phone Number" class="block w-full" v-model="form.phone"
                    required autofocus autocomplete="name" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/@.png" alt="login">
                </div>
                <jet-input id="email" type="email" placeholder="E-mail" class="block w-full" v-model="form.email"
                    required />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img class="age" src="/storage/img/age-group.png" alt="login">
                </div>
                <jet-input id="number_employe" type="number" placeholder="number employe" class="block w-full"
                    v-model="form.number_employe" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/map.png" alt="login">
                </div>
                <jet-input id="name_representing" type="text" placeholder="Name representing" class="block w-full"
                    v-model="form.name_representing" />
            </div>

            <div class="input-container">
                <div class="img-container">
                    <img src="/storage/img/map.png" alt="login">
                </div>
                <jet-input id="industry" type="text" placeholder="Industry" class="block w-full"
                    v-model="form.industry" />
            </div>


            <div class="input-container border flex h-11">
                <div class="img-container">
                    <img src="/storage/img/lock.png" alt="login">
                </div>
                <jet-input id="password" type="password" placeholder="Password" class="block w-full"
                    v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="input-container">
                <div class="img-container">

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
        <div>
            <label for="entreprise" class="mr-2">Vous êtes une entreprise ?</label>
            <input id="entreprise" type="checkbox" @change="ChangeEntreprise()" v-model="form.entreprise">
        </div>
    </jet-authentication-card>
</template>

<script>
    import Header from '@/Components/Header.vue'
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
            Header,
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
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                    last_name: '',
                    localisation: '',
                    phone: '',
                    age: null,
                    company_name: '',
                    siret: '',
                    number_employe: null,
                    name_representing: '',
                    industry: '',
                    entreprise: false
                }),
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
                console.log(this.form)
            },
            ChangeEntreprise() {
                if (this.entreprise == false) {
                    this.entreprise = true
                } else {
                    this.entreprise = false
                }
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
        font-size: 24px;
        color: #101010;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    jet-input {
        width: 257, 68px;
    }

    .input-container {
        display: flex;
        height: 46px;
        border-radius: 4px;
        background: linear-gradient(#C6E3DE, #81A4D0);
    }

    .input-container input {
        margin: 2px 2px 2px 0px;
    }

    .img-container {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 31px;
        height: auto;
        margin: 2px;
        background: linear-gradient(#E9F5F3, #CBD8EC);
    }

    .age {
        width: 24px;
        height: auto;
    }

    .login {
        padding-top: 30px;
    }

    header {
        box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.13);
    }

</style>
