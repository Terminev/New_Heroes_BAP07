<template>
    <jet-form-section @submitted="updateProfileInformation">
        <template #title>
            Informations du compte
        </template>

        <template #description>
            Mettre à jour les informations du profil de votre compte.
        </template>

        <template #form>
            <!-- Profile Photo -->
            <div class="col-span-6 sm:col-span-4" v-if="$page.props.jetstream.managesProfilePhotos">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            ref="photo"
                            @change="updatePhotoPreview">

                <jet-label for="photo" value="Photo" />

                <!-- Current Profile Photo -->
                <div class="mt-2" v-show="! photoPreview">
                    <img :src="user.profile_photo_url" :alt="user.name" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" v-show="photoPreview">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                        :style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <jet-secondary-button class="mt-2 mr-2" type="button" @click.prevent="selectNewPhoto">
                    Select A New Photo
                </jet-secondary-button>

                <jet-secondary-button type="button" class="mt-2" @click.prevent="deletePhoto" v-if="user.profile_photo_path">
                    Remove Photo
                </jet-secondary-button>

                <jet-input-error :message="form.errors.photo" class="mt-2" />
            </div>

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Nom :" />
                <jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autocomplete="name" />
                <jet-input-error :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="last_name" value="Prénom :" />
                <jet-input id="last_name" type="text" class="mt-1 block w-full" v-model="form.last_name" autocomplete="last_name" />
                <jet-input-error :message="form.errors.last_name" class="mt-2" />
            </div>

            <!-- localisation -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="localisation" value="Adress postale :" />
                <jet-input id="localisation" type="text" class="mt-1 block w-full" v-model="form.localisation" autocomplete="localisation" />
                <jet-input-error :message="form.errors.localisation" class="mt-2" />
            </div>

            <!-- phone -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="phone" value="Numéro de téléphone :" />
                <jet-input id="phone" type="text" class="mt-1 block w-full" v-model="form.phone" autocomplete="phone" />
                <jet-input-error :message="form.errors.phone" class="mt-2" />
            </div>
            
            <!-- Age -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="age" value="Age :" />
                <jet-input id="age" type="text" class="mt-1 block w-full" v-model="form.age" autocomplete="age" />
                <jet-input-error :message="form.errors.age" class="mt-2" />
            </div>

            <!-- Name of the company -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="company_name" value="Nom de l'entreprise :" />
                <jet-input id="company_name" type="text" class="mt-1 block w-full" v-model="form.company_name" autocomplete="company_name" />
                <jet-input-error :message="form.errors.company_name" class="mt-2" />
            </div>

            <!-- Siret -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="siret" value="Le numéro de Siret :" />
                <jet-input id="siret" type="text" class="mt-1 block w-full" v-model="form.siret" autocomplete="siret" />
                <jet-input-error :message="form.errors.siret" class="mt-2" />
            </div>

            <!-- Number of employe -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="number_employe" value="Le nombre d'employés :" />
                <jet-input id="number_employe" type="text" class="mt-1 block w-full" v-model="form.number_employe" autocomplete="number_employe" />
                <jet-input-error :message="form.errors.number_employe" class="mt-2" />
            </div>

            <!-- Name representing -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name_representing" value="Le nom représenté :" />
                <jet-input id="name_representing" type="text" class="mt-1 block w-full" v-model="form.name_representing" autocomplete="name_representing" />
                <jet-input-error :message="form.errors.name_representing" class="mt-2" />
            </div>

            <!-- Number of employe -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="industry" value="Industie :" />
                <jet-input id="industry" type="text" class="mt-1 block w-full" v-model="form.industry" autocomplete="industry" />
                <jet-input-error :message="form.errors.industry" class="mt-2" />
            </div>

            <!-- Email -->
            <!-- <div class="col-span-6 sm:col-span-4">
                <jet-label for="email" value="Email" />
                <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" />
                <jet-input-error :message="form.errors.email" class="mt-2" />
            </div> -->
        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

    export default defineComponent({
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        props: ['user'],

        data() {
            return {
                form: this.$inertia.form({
                    _method: 'PUT',
                    name: this.user.name,
                    last_name: this.user.last_name,
                    localisation: this.user.localisation,
                    phone: this.user.phone,
                    age: this.user.age,
                    email: this.user.email,
                    photo: null,
                    company_name: this.user.company_name,
                    siret: this.user.siret,
                    number_employe: this.user.number_employe,
                    name_representing: this.user.name_representing,
                    industry: this.user.industry,
                }),

                photoPreview: null,
            }
        },

        methods: {
            updateProfileInformation() {
                if (this.$refs.photo) {
                    this.form.photo = this.$refs.photo.files[0]
                }

                this.form.post(route('user-profile-information.update'), {
                    errorBag: 'updateProfileInformation',
                    preserveScroll: true,
                    onSuccess: () => (this.clearPhotoFileInput()),
                });
            },

            selectNewPhoto() {
                this.$refs.photo.click();
            },

            updatePhotoPreview() {
                const photo = this.$refs.photo.files[0];

                if (! photo) return;

                const reader = new FileReader();

                reader.onload = (e) => {
                    this.photoPreview = e.target.result;
                };

                reader.readAsDataURL(photo);
            },

            deletePhoto() {
                this.$inertia.delete(route('current-user-photo.destroy'), {
                    preserveScroll: true,
                    onSuccess: () => {
                        this.photoPreview = null;
                        this.clearPhotoFileInput();
                    },
                });
            },

            clearPhotoFileInput() {
                if (this.$refs.photo?.value) {
                    this.$refs.photo.value = null;
                }
            },
        },
    })
</script>
