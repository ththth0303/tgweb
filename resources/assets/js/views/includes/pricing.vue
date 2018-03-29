<template>
<div id="pricing" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Pricing Table</h2>
            </div>
            <div class="col-sm-4" v-for="price in priceList">
                <div class="pricing">
                    <div class="price-head">
                        <span class="price-title">{{ price.title }}</span>
                        <div class="price">
                            <h3>{{ price.price }}<span class="duration">{{ price.unit }}</span></h3>
                        </div>
                    </div>
                    <ul class="price-content">
                        <li v-for="content in price.price_content">
                            <p>{{ content }}</p>
                        </li>
                    </ul>
                    <div class="price-btn">
                        <button class="outline-btn">Purchase now</button>
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
            priceList: {
                required: true,
                default: () => []
            }
        },
        mounted() {
            console.log('pricing component');
        }
    }
</script>
