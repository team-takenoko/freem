<template>
    <button @click="onClick" class="btn btn-light">
        Good! <span class="badge badge-light">{{good}}</span>
    </button>
</template>

<script>
    export default {
        props: ['goodNum'],
        data: function() {
            return {
                good: this.goodNum,
            }
        },
        methods: {
            onClick: function(){
                var url = location.pathname;
                var self = this;
                axios.post(url, this.request).then(res => {
                    if(res.data.result){
                        self.good++;
                        console.log('OK');
                    }
                    else{
                        console.log('NG');
                    }
                });
            }
        }
   }
</script>
