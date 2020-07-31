import React from 'react';
import ReactDOM from 'react-dom';

function Person(props){
    return (
    <div className="person">
        <h1>{props.name}</h1>
        <p>Age: {props.age}</p>
    </div>
    );
}

const app = (
    <div>
        <Person name="Jack" age="24"/>
        <Person name="Sara" age="30"/>  
    </div>
);

ReactDOM.render(
    app,
    document.querySelector("#people")
);