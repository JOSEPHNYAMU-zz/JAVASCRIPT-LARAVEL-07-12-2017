<template>
    <div class="container">
        <form>
            <div class="form-group">
                <input type="text" v-model="blog.title" @keydown.enter="create" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <textarea required class="form-control" @keydown.enter="create" v-model="blog.body" id="exampleTextarea" rows="3">Blog Content</textarea>
            </div>
            <button type="submit" @click="create" class="btn btn-primary pull-right">ADD BLOG</button>
        </form>



        <div class="blogs-list">
            <ul class="list-unstyled">
                <li v-for="blog in blogs" :key="blog.id">
                  {{ blog.title }}
                    {{ blog.body }}
                </li>
            </ul>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            this.fetchData();
            console.log(123);
        },
        data(){
            return {
                blogs: [],
                blog: {
                    title: '',
                    body: ''
                }
            }
        },
        methods: {
            fetchData (){
                axios.get('/api/blogs')
                    .then((res) => {
                    this.blogs = res.data
                        })
                    .catch((err) => {
                    console.log(err)
                    })
            },
            create () {
                axios.post('/api/blogs', this.blog)
                    .then((res) => {
                    this.blogs.unshift(res.data)
                        this.blog.title = '',
                            this.blog.body = ''
                    })
                    .catch((err) => {

                    console.log(err)
                })
            }
        }
    }
</script>
