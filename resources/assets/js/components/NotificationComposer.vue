<template>
    <div class="notification-composer">
        <button class="btn btn-primary" @click="sendNotification">Notify Me</button>
    </div>
</template>

<script>
export default {
    data () {
        return {
            notificationText: 'Test Notification'
        };
    },
    methods: {
        sendNotification() {
            this.$emit('notificationsent', {
                notification: this.notificationText
            });
        }
     }
};
</script>

<style lang="css" scoped>
</style>