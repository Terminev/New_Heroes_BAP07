<template>
    <div>
        <Header> </Header>

        <a :href="'/annonce/'" class="flex button-back">
            <img src="/storage/img/arrow_left.png" alt="favorite img" /> Retour
        </a>
        <h1>Je creer une annonce</h1>

        <div class="annonce-content">
            <form @submit.prevent="submit">

                <div class="h-11 mt-8 mb-8">
                    <h3>Service :</h3>
                    <jet-input id="announcement_title" type="text" placeholder="Service" class="input block w-full"
                        v-model="form.announcement_title" required autofocus autocomplete="announcement_title" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Type de contrat :</h3>
                    <jet-input id="type_of_contract" type="text" placeholder="CDD/CDI" class="input block w-full"
                        v-model="form.type_of_contract" required autofocus autocomplete="type_of_contract" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Où se situe votre entreprise:</h3>
                    <jet-input id="localisation" type="text" placeholder="localisation" class="input block w-full"
                        v-model="form.localisation" required autofocus autocomplete="localisation" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Domaine d'activité :</h3>
                    <jet-input id="domaine" type="text" placeholder="Dans quelle domaine vous cherchez"
                        class="input block w-full" v-model="form.domaine" required autofocus autocomplete="domaine" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Temps de travail :</h3>
                    <jet-input id="time_work" type="number" placeholder="Combien d'heure par semaine"
                        class="input block w-full" v-model="form.time_work" required autofocus
                        autocomplete="time_work" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Nombre de post ouvert :</h3>
                    <jet-input id="number_of_jobs" type="number" placeholder="nombre de post resant"
                        class="input block w-full" v-model="form.number_of_jobs" required autofocus
                        autocomplete="number_of_jobs" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Rémuneration :</h3>
                    <jet-input id="pay" type="number" placeholder="Salaire/mois" class="input block w-full"
                        v-model="form.pay" required autofocus autocomplete="pay" />
                </div>

                <div class="h-11 mt-8 mb-16">
                    <h3>Déscription du post :</h3>
                    <textarea id="announcement_description"
                        placeholder="Inscrivez ici tous ce qui vous passe par la tête" class="input block w-full"
                        v-model="form.announcement_description" required autofocus
                        autocomplete="announcement_description" />
                    </div>

                <div class="flex items-center justify-center">

                    <jet-button class="create-annonce-button w-full flex justify-center" :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing">
                        CREER UNE ANNONCE
                    </jet-button>

                </div>
            </form>
        </div>

    </div>
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

    export default defineComponent({
        components: {
            Header,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
        },

        props: ['user'],

        data() {
            return {
                form: [],
                // this.$inertia.form({
                //     compagnies_id: this.user.id,
                //     announcement_title: '',
                //     domaine: '',
                //     localisation: '',
                //     announcement_description: '',
                //     pay: '',
                //     type_of_contract: '',
                //     time_work: '',
                //     number_of_jobs: '',
                // })
            }
        },

        methods: {

            submit() {

                this.form = []

                var compagnies_id = this.user.id
                var announcement_title = document.getElementById('announcement_title').value
                var domaine = document.getElementById('domaine').value
                var localisation = document.getElementById('localisation').value
                var announcement_description = document.getElementById('announcement_description').value
                var pay = document.getElementById('pay').value
                var type_of_contract = document.getElementById('type_of_contract').value
                var time_work = document.getElementById('time_work').value
                var number_of_jobs = document.getElementById('number_of_jobs').value

                this.form.push({
                    'compagnies_id': compagnies_id,
                    'announcement_title': announcement_title,
                    'domaine': domaine,
                    'localisation': localisation,
                    'announcement_description': announcement_description,
                    'pay': pay,
                    'type_of_contract': type_of_contract,
                    'time_work': time_work,
                    'number_of_jobs': number_of_jobs,
                })


                this.$inertia.post(this.route('annonce_compagnie.store'), this.form)
            }
        }

    })

</script>

<style scoped>
    h1 {
        padding-top: 12px;
        padding-bottom: 16px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    .button-back {
        color: #C9C9C9;
        align-items: center;
        justify-content: end;
        padding-top: 12px;
        padding-right: 12px;
    }

    .button-back img {
        object-fit: contain;
        padding-right: 4px;
    }

    .annonce-content {
        padding: 4px 25px;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .input{
        border: 1px solid black;
    }

    .create-annonce-button{
        padding: 6px 43px;
        margin-top: 24px;
        margin-bottom: 10px;
        font-size: 14px;
        background-color: #001598;
        color: #FFFFFF;
        border-radius: 4px;
        max-width: 250px;
    }

</style>
