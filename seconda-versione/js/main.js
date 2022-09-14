var app = new Vue({
    el: '#app',
    data: {
        discs: []
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/')
        .then(response => {
            this.discs = response.data;
        })
    }
});

