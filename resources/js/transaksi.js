import Vue from 'vue'
import axios from 'axios'
​
Vue.filter('currency', function (money) {
    return accounting.formatMoney(money, "Rp ", 2, ".", ",")
});
new Vue({
    el: '#dw',
    data: {
        sukucadang: {
            id: '',
            qty: '',
            nama_suku_cadang: ''
        }
    },
    watch: {
        //apabila nilai dari product > id berubah maka
        'sukucadang.id': function() {
            //mengecek jika nilai dari product > id ada
            if (this.sukucadang.id) {
                //maka akan menjalankan methods getProduct
                this.getSukucadang()
            }
        }
    },
    //menggunakan library select2 ketika file ini di-load
    mounted() {
        $('#sukucadang_id').select2({
            width: '100%'
        }).on('change', () => {
            //apabila terjadi perubahan nilai yg dipilih maka nilai tersebut 
            //akan disimpan di dalam var product > id
            this.sukucadang.id = $('#sukucadang_id').val();
        });
    },
    methods: {
        getSukucadang() {
            //fetch ke server menggunakan axios dengan mengirimkan parameter id
            //dengan url /api/product/{id}
            axios.get(`/api/sukucadang/${this.sukucadang.id}`)
            .then((response) => {
                //assign data yang diterima dari server ke var product
                this.sukucadang = response.data
            })
        }
    }
});