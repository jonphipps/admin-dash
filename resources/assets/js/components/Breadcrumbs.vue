<template>

    <ol class="breadcrumb">

        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a v-bind:href="url">{{ plural }}</a></li>
        <li class="active">{{ plural }}</li>

    </ol>

</template>

<script>

    export default {

        props: ['url', 'name', 'plural']


    }


</script>