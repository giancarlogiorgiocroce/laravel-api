<template>
<div>
    <h1 class="my_container">
        Sono una prima pagina custom!
    </h1>
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="card my-3"
                style="width: 18rem;"
                v-for="(post, index) in posts"
                :key="index">
                <div class="card-body">
                    <h5 class="card-title">{{ post.title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Categoria: {{ post.category.name }}
                    </h6>
                    <ul v-if="post.tags.length > 0">
                        <li class="exception">Tags:</li>
                        <li v-for="tag in post.tags"
                            :key="tag.id">
                            {{ tag.name }}
                        </li>
                    </ul>
                    <p class="card-text"><strong>Descrizione:</strong><br>{{ post.content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'App',
    data(){
        return{
            apiUrlPosts: 'http://127.0.0.1:8000/api/posts',
            posts: null,
            categories: null,
        }
    },
    methods:{
        getApiPosts(){
            axios.get(this.apiUrlPosts)
            .then(res => {
                this.posts = res.data.posts;
                this.categories =res.data.posts.category;
                console.log(res.data.posts);
            })
        },
        getLogs(questo){
            console.log(questo);
        }
    },
    mounted(){
        this.getApiPosts();
    },

}
</script>

<style scoped lang="scss">
h5{
    text-transform: uppercase;
}
ul{
    list-style: none;
    .exception{
        margin-left: -20px;
    }
}
</style>
