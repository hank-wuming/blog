<template>
    <div>
        <button @click="testHello">{{ hello }}</button>
        <ul>
            <li v-for="skill in skills">{{ skill }}</li>
        </ul>
        <input v-model="top" value="test" name="top" title="top" id="top"/>
    </div>
</template>

<script>
    let data = {hello: 'test555', skills: ['test', 'test2']};
    export default {
        props: ['top'],
        data: function () {
            return data;
        },
        methods: {
            testHello: function () {
                alert(this.top);
                this.$http.get('/ajax').then(
                    response => data.skills = response.data
                );
            }
        },
    }
</script>
