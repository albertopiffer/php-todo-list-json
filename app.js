const { createApp } = Vue

createApp({
    data() {

        return {
            tasks: [],

            inputValue: '',
        }

    },

    methods: {

        fetch() {
            axios
                .get('./server.php')
                .then((res) => {
                    console.log(res.data.response)
                    for (let i = 0; i < res.data.response.length; i++) {
                        this.tasks.push(res.data.response[i])
                    }

                })
        },

        addTask() {
            const newTask = {
                text: this.inputValue,
                done: false,
            }
            this.tasks.push(newTask)
            this.inputValue = ''
        },

        removeTask(startIndex) {
            this.tasks.splice(startIndex, 1)
        },

        invertiDone(task) {
            task.done = !task.done;
        },

    },

    mounted() {
        this.fetch();
    },

}).mount('#app')
