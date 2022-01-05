<template>
    <div>
        <Header> </Header>

        <h1>Je creer une annonce</h1>
        <a :href="'/annonce/'" class="flex button-back">
            <img src="/storage/img/arrow_left.png" alt="favorite img" /> Retour
        </a>

        <div class="annonce-content">
            <form @submit.prevent="submit">

                <div class="h-11 mt-8 mb-8">
                    <h3>Service :</h3>
                    <jet-input id="announcement_title" type="text" placeholder="Service" class="block w-full"
                        v-model="form.announcement_title" required autofocus autocomplete="announcement_title" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Type de contrat :</h3>
                    <jet-input id="type_of_contract" type="text" placeholder="CDD/CDI" class="block w-full"
                        v-model="form.type_of_contract" required autofocus autocomplete="type_of_contract" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Domaine d'activité :</h3>
                    <jet-input id="domaine" type="text" placeholder="Dans quelle domaine vous cherchez"
                        class="block w-full" v-model="form.domaine" required autofocus autocomplete="domaine" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Temps de travail :</h3>
                    <jet-input id="time_work" type="number" placeholder="Combien d'heure par semaine"
                        class="block w-full" v-model="form.time_work" required autofocus autocomplete="time_work" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Nombre de post ouvert :</h3>
                    <jet-input id="number_of_jobs" type="number" placeholder="nombre de post resant"
                        class="block w-full" v-model="form.number_of_jobs" required autofocus
                        autocomplete="number_of_jobs" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <h3>Rémuneration :</h3>
                    <jet-input id="pay" type="number" placeholder="Salaire/mois" class="block w-full" v-model="form.pay"
                        required autofocus autocomplete="pay" />
                </div>

                <div class="h-11 mt-8 mb-8">
                    <!-- Il faudra changer cette input pour mettre le truc html où on peut styliser directement dans le site  -->
                    <h3>Déscription du post :</h3>
                    <jet-input id="announcement_description" type="text"
                        placeholder="Inscrivez ici tous ce qui vous passe par la tête" class="block w-full"
                        v-model="form.announcement_description" required autofocus
                        autocomplete="announcement_description" />
                </div>

                <div class="flex items-center justify-end">

                    <jet-button class="w-full flex justify-center" :class="{ 'opacity-25': form.processing }"
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

        data() {
            return {
                form: this.$inertia.form({
                    announcement_title: '',
                    domaine: '',
                    localisation: '',
                    announcement_description: '',
                    pay: '',
                    type_of_contract: '',
                    time_work: '',
                    number_of_jobs: '',
                }),
            }
        },

        methods: {
            submit() {
                console.log(this.form)
                this.$inertia.get(this.route('annonce_compagnie.create'), this.form)
            }
        }

    })

</script>

<style scoped>
    h1 {
        padding-top: 25px;
        padding-bottom: 16px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    .button-back {
        color: #C9C9C9;
    }

    .button-back img {
        object-fit: contain;
        padding-right: 4px;
    }

</style>
