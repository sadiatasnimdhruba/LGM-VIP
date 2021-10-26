//import React from 'react'
import React, { useState } from "react";

const App = () => {


    const [users, setUsers] = useState([]);
    const loadusers = async () => {
        const response = await fetch("https://reqres.in/api/users?page=1");
        const jsonResponse = await
            response.json();
        setUsers(jsonResponse["data"]);
    };
    return (
        <div className="container">
            <nav className="navbar">
                <div className="navitems p-3">
                    <span className="heading">LGM VIP</span>
                    <button className="button" onClick={loadusers}>Get data</button>
                </div>
            </nav><br></br>

            <div className="row info">

                {users.map(user =>
                (
                    <div className="col-lg-4" key={user.id}>
                        <img src={user.avatar} width="300" />
                        <div className="desc">
                            <h5>Name: {user.first_name} {user.last_name}</h5>
                            <h5>email: {user.email}</h5>
                        </div><br></br>


                    </div>

                ))}


            </div>
        </div>
    );
};

export default App