<template>
    <layout>
        <div class="container">
            <form action="/prodotti" method="POST"  @submit.prevent="createProduct">
                <div class="form-group">
                    <label for="nome">Nome prodotto</label>
                    <input v-model="form.nome" type="text" class="form-control" id="nome" placeholder="Inserisci il nome del prodotto">
                </div>
                <div class="form-group">
                    <label for="ingredienti">Inserisci gli ingredienti</label>
                    <textarea v-model="form.ingredienti" class="form-control" id="ingredienti" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </layout>
</template>

<script>
import Layout from '../../Shared/Layout'
import {InertiaLink} from '@inertiajs/inertia'
import {Inertia} from '@inertiajs/inertia'


export default {
    components: {
        Layout,
        InertiaLink,
    },
    props: ['errors'],
    data(){
        return {
            form: {
                nome: '',
                ingredienti: ''
            }
        }
    },
    methods: {
        createProduct(){
            Inertia.post('/prodotti', this.form, {
                onSuccess: () => {
                    //
                },
                onError: (errors) => {
                    //
                },
            })

        }
    }
}
</script>
