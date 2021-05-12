<template>
    <layout>
        <div class="container">
            <h1>
                sono edit
            </h1>

            <form action="#"  method="PUT" @submit.prevent="updateProduct">
                <div class="form-group">
                    <label for="nome">Nome del prodotto</label>
                    <input v-model="form.nome" type="text" class="form-control" id="nome" placeholder="Inserisci il nome">
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
    props: ['prodotti'],
    data(){
        return {
            form: {
                nome: this.prodotti.nome,
                ingredienti: this.prodotti.ingredienti
            }
        }
    },
    methods: {
        updateProduct(){
            Inertia.put(`/prodotti/${this.prodotti.id}`, this.form, {
                onSuccess: () => {
                    //
                },
                onError: (errors) => {
                    //
                },
            })

        },
    }
}
</script>
