<template>
    <carousel
        :per-page="1"
        class="rounded shadow"
        :pagination-padding="15"
        pagination-color="#F9C1B6"
        :navigation-enabled="true"
        :pagination-enabled="false"
        pagination-active-color="#F06449"
        :navigation-click-target-size="75"
        navigation-next-label="<img class='w-24 opacity-25' src='/images/right.png'>"
        navigation-prev-label="<img class='w-24 opacity-25' src='/images/left.png'>">
        <slot></slot>
    </carousel>
</template>

<script>
    export default {
        //
    }
</script>
