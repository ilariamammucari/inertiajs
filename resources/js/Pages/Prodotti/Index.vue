<template>
    <layout>
        <div class="container">
            <h1 class="text-center mt-3">Prodotti</h1>
            <inertia-link href="/prodotti/create" class="btn btn-success">Nuovo Piatto</inertia-link>

            <div class="card text-center mt-5" style="width: 20rem;" v-for="prodotto in prodotti" :key="prodotto.id">
                <div class="card-body">
                    <h5 class="card-title">{{prodotto.nome}}</h5>
                    <div class="bottoni d-flex justify-content-around align-content-center">
                        <inertia-link :href="`/prodotti/${prodotto.id}`" class="btn btn-info">Dettagli</inertia-link>
                        <inertia-link :href="`/prodotti/${prodotto.id}/edit`" class="btn btn-warning">Modifica</inertia-link>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '../../Shared/Layout'
import {InertiaLink} from '@inertiajs/inertia-vue'
import {Inertia} from "@inertiajs/inertia";

export default {
    components: {
        Layout,
        InertiaLink,
    },
    props: ['prodotti'],
}
</script>
