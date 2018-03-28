<template>
<div id="blog" class="section md-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Recents news</h2>
            </div>
            <div class="col-md-4"  v-for="blog in blogList" :key="blog.id">
                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" :src="blog.image" alt="">
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li><i class="fa fa-user"></i>{{ blog.users.name }}</li>
                            <li><i class="fa fa-clock-o"></i>{{ formatTime(blog.created_at) }}</li>
                            <li><i class="fa fa-comments"></i>{{ blog.views }}</li>
                        </ul>
                        <h3>{{ blog.title }}</h3>
                        <p>{{ blog.content | strlimit(30)}}</p>
                        <a href="blog-single.html">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: {
            blogList: {
                required: true,
                default: () => []
            }
        },
        mounted() {
            //
        },
        methods: {
            formatTime: (time) => {
               let myDate = new Date(time);
               let part = myDate.toDateString().split(' ');
               return part[2] + ' ' + part[1];
           }
        }
    }
</script>
