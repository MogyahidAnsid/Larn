<template>
    sample sa
</template>

<script>
    export default {
        mounted() {
            Echo.channel('notification')
                .listen('MessageNotificationEvent', (e) => {
                    alert(e.message)
                }
            );
        },
    }
</script>