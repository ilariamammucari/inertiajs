<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <inertia-link class="nav-link" href="/">Home</inertia-link>
                        </li>
                        <li class="nav-item">
                            <inertia-link class="nav-link" href="/prodotti">Prodotti</inertia-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <article>
            <slot />
        </article>
    </main>
</template>

<script>
import {InertiaLink} from '@inertiajs/inertia-vue'

export default {
    components:{
        InertiaLink
    },
}
</script>
