<template>
<div id="contact" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Get in touch</h2>
            </div>
            <div class="col-sm-4" v-for="contact in contactList" v-if="!contact.social">
                <div class="contact">
                    <i :class="contact.icon"></i>
                    <h3>{{ contact.title }}</h3>
                    <p>{{ contact.content }}</p>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <form class="contact-form">
                    <input type="text" class="input" placeholder="Name">
                    <input type="email" class="input" placeholder="Email">
                    <input type="text" class="input" placeholder="Subject">
                    <textarea class="input" placeholder="Message"></textarea>
                    <button class="main-btn">Send message</button>
                </form>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        contactList: {
            required: true,
            default: () => []
        }
    },
    mounted() {
    }
}
</script>
