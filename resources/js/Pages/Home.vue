<template>
    <h1>Hello {{ name }}</h1>
    <p>In this series, we will use the following framewrok</p>
    <ul>
        <li v-for="data of framework" v-text="data"></li>
    </ul>
</template>

<script>
export default {
    props:{
        name:String,
        framework:Array,
    }
}
</script>