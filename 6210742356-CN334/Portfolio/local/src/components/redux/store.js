import { createStore, combineReducers, applyMiddleware, compose } from 'redux'
import thunk from 'redux-thunk'
import expReducer from './reducers/expReducer';

const initialState = {

};

const middleware = [thunk];

const reducers = combineReducers ({
    exp : expReducer,
})

const store = createStore(reducers, initialState, compose(applyMiddleware(...middleware),
    typeof window.__REDUX_DEVTOOLS_EXTENSION__ === "undefined"? a => a
    : window.__REDUX_DEVTOOLS_EXTENSION__ &&
    window.__REDUX_DEVTOOLS_EXTENSION__()));

export default store;