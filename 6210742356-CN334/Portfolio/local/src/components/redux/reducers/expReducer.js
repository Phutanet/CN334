

const initialState = {
        modalShow: null,
        modalCreateShow: null,
        nameProject: null,
        linkProject: null,
        projects: [],
        loading: true,
        id: null
}

export default function (state = initialState, action) {
    switch (action.type) {
        case SET_MODALSHOW:
            return {
                ...state,
                modalShow: action.payload
            }
        case SET_MODALCREATESHOW:
            return {
                ...state,
                modalCreateShow: action.payload

            }
        case SET_PROJECTS:
            return {
                ...state,
                projects: action.payload,
                loading: false

            }
        case SET_NAME_PROJECT:
            return {
                ...state,
                nameProject: action.payload,

            }    
        case SET_LINK_PROJECT:
            return {
                ...state,
                linkProject: action.payload,

            }
        default:
            return state;          
    }
}