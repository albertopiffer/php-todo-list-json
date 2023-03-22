const { createApp } = Vue

createApp({
    data() {

        return {
            tasks: [
                {
                    text: 'task1',
                    done: false,
                },

                {
                    text: 'task2',
                    done: true,
                },

                {
                    text: 'task3',
                    done: false,
                },

                {
                    text: 'task4',
                    done: false,
                },
            ],

            inputValue: '',
        }

    },

    methods: {
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
}).mount('#app')
