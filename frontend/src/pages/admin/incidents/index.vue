<template> This is the event page </template>
<script>
import { useMenu } from '../../../stores/use-menu';
export default {
    setup() {
        useMenu().onSelectedKeys('admin-incidents');
    },
}
</script>