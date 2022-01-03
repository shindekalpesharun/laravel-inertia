<template>
    <Layout :username="username">
        <h1 class="text-3xl">Hello</h1>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";
export default {
    components: { Layout },
    props: {
        username: String,
    },
};
</script>
