export default {
    state: {
        department: []
    },

    getters: {
        getDepartmentFormGetters(state) {
            return state.department
        }
    },

    actions: {
        allDepartmentFromDatabase(context) {
            axios.get("/categories")
                .then((response) => {
                    console.log(response.data.departments)
                    context.commit("departments", response.data.departments) // department  will be run from mutation
                })
                .catch((error) => {
                    console.log(error)
                })
        }
    },

    mutations: {
        departments(state, data) {
            return state.department = data
        }
    }
}
