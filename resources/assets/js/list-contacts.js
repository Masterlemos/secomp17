//Vue.component('example', require('./components/Example.vue'));
Vue.config.devtools = false;
const app = new Vue({
    el: '#app',
    data: {
    	url: '/contacts',
    	contacts: [],
    	prev: '',
    	next: ''
   	},
    mounted() {
     	let self = this;

	    axios.get('/getAllAjax').then(json => {
	    	self.next = json.data.next_page_url;
	    	self.prev = json.data.prev_page_url;
	    	self.contacts = json.data.data; 
	    });
  	},
  	methods: {
        nextPage(e) {
        	e.preventDefault();
        	let self = this;
        	if (this.next == undefined) return;
         	axios.get(this.next).then(json => {
		    	self.next = json.data.next_page_url;
		    	self.prev = json.data.prev_page_url;
		    	self.contacts = json.data.data; 
	    	});
        },
        prevPage(e) {
        	e.preventDefault();
        	let self = this;
        	if (this.prev == undefined) return;
			axios.get(this.prev).then(json => {
		    	self.next = json.data.next_page_url;
		    	self.prev = json.data.prev_page_url;
		    	self.contacts = json.data.data; 
	    	});
        }
    }
});
