<template>
    <div>
        <h1>{{ title }}</h1>
        <p>{{ content }}</p>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        content: String,
    },
};
</script>
