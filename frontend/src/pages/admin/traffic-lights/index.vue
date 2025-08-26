<template> This is the traffic lights page </template>
<script>
import { useMenu } from '../../../stores/use-menu';
export default {
    setup() {
        useMenu().onSelectedKeys('admin-traffic-lights');
    },
};
</script>