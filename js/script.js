var app = new Vue(
    {
        el: '#root',
        data: {
            albums: [],
            genres: [],
            selectedGenre: 'all'
        },
        methods: {
            getAlbums() {
                axios
                .get('http://localhost:8888/php-ajax-dischi/api.php' + '?genre=' + this.selectedGenre)
                .then(response => {
                    this.albums = response.data;
                    console.log(response.data);
                    this.getGenres();
                })
                .catch(error => console.log(error));
            },
            getGenres() {
                this.albums.forEach(thisAlbum => {
                    if (!this.genres.includes(thisAlbum.genre)) {
                        this.genres.push(thisAlbum.genre)
                    }
                });
            }
        },
        mounted() {
            this.getAlbums()
        }
    }
);

