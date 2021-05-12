<template>
    <layout>
        <div class="container">
    <h1>
        sono la show
    </h1>
            <div class="card text-center mt-5" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">{{prodotti.nome}}</h5>
                    <p class="card-text">{{prodotti.ingredienti}}</p>
                    <button @click="deleteProduct" class="btn btn-danger">Cancella</button>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '../../Shared/Layout'
import {InertiaLink} from '@inertiajs/inertia-vue'
import {Inertia} from '@inertiajs/inertia'

export default {
    components: {
        Layout,
        InertiaLink,
    },
    props: ['prodotti'],
    methods: {
        deleteProduct(){
            Inertia.delete(`/prodotti/${this.prodotti.id}`, {
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
