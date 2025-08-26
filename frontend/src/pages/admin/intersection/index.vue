<template> This is the intersection page </template>
<script>
import { useMenu } from "../../../stores/use-menu";
export default {
    setup() {
        useMenu().onSelectedKeys('admin-intersection');
    },
};
</script>