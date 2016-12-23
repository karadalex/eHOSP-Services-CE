<template>
    <div id="bot">
        <div class="col-xs-12">
            <div class="input-group">
                <input v-model="messageToSend" type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button v-on:click="sendMessage" class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
        <div class="col-xs-12">
            <div id="BotResponseArea"></div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                messageToSend: '',
                responseMessage: ''
            }
        },
        ready() {
            console.log('Bot Component ready.')
        },
        methods: {
            sendMessage: function () {
                var requestTextBody = {
                    'text': this.messageToSend
                };
                this.$http.post('/api/v1/bot', requestTextBody)
                    .then(response => {
                        this.responseMessage = response.data;
                        $('#BotResponseArea').html(this.responseMessage);
                        console.log(response.data);
                });
            }
        }
    }
</script>
