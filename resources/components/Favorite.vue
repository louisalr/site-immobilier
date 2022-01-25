<template>

     <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(offre)">
            <i  class="fa fa-heart"></i>
        </a>
        <a href="#" v-else @click.prevent="favorite(offre)">
            <i  class="fa fa-heart-o"></i>
        </a>
    </span>

</template>

<script>

    export default {
        props: ['offre', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(offre) {
                axios.post('/ajouterfavoris/'+offre)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(offre) {
                axios.post('/retirerfavoris/'+offre)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>