import React from 'react'

function Card({ loader, data }) {

    //For showing the loader
    return loader ? (
        <div align="center">
            <img src="../loader.gif" />
        </div>
    ) :

        //for showing the data after loading
        (
            <div className="row info">
                {data.map(user => (
                    <div className="col-lg-4 data" key={user.id}>
                        <img src={user.avatar} width="300" />
                        <div className="desc">
                            <h5>Name: {user.first_name} {user.last_name}</h5>
                            <h5>email: {user.email}</h5>
                        </div><br></br>
                    </div>
                ))}


            </div>)
}

export default Card;