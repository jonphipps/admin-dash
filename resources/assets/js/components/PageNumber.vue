<template>

    <div class="pull-right" v-show="$parent.pages.length > 1">

        <div class="grid-results">

            page {{ $parent.current_page }} of   {{ $parent.last_page }} pages

        </div>

    </div>


</template>