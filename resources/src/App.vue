<template>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Título</td>
                    <td>Comentarios</td>
                    <td>Fecha</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="comment in comments.data" :key="comment.id">
                    <td>{{ comment.id }}</td>
                    <td>{{ comment.Título }}</td>
                    <td>{{ comment.comment_text.substring(0, 30) }}</td>
                    <td>{{ comment.created_at}}</td>
                </tr>
            </tbody>
        </table>
        

        <pagination :data="comments" @pagination-change-page="getResults"></pagination>
    </div>
</template>


<script>
export default{
    data(){
        return{
            comments: {}
        }
    },
    mounted(){
        this.getResults();
        ///axios.get('/api/comments').then(response =>{
        ///    this.comments = response.data.data;
        ///});
    },
    methods: {
        getResults(page = 1) {
            axios.get('/api/comments?page=' + page)
            .then(response => {
                this.comments = response.data;
            });
        }
    }
}

</script>