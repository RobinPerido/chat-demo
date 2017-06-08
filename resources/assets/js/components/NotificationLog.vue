<template lang="html">
    <div class="notifications">
        <notification class="notification" v-for="notification in notifications" :key="notification" :notification="notification"></notification>
    </div>
</template>

<script>
export default {
    props: ['notifications']
};
</script>

<style lang="css" scoped>
</style>