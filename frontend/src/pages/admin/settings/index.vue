<template> This is the settings page </template>
<script>
import { useMenu } from '../../../stores/use-menu';
export default {
    setup() {
        useMenu().onSelectedKeys('admin-settings');
    }
}
</script>
