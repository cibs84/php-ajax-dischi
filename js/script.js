var app = new Vue(
    {
        el: '#root',
        data: {
            albums: []
        },
        mounted() {
            axios
                .get('http://localhost:8888/php-ajax-dischi/database.php')
                .then(response => {
                    this.albums = response.data;
                    console.log(this.albums);
                })
                .catch(error => console.log(error));
        }
    }
);

