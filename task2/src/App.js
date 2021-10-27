import React, { Component } from 'react'
import Card from './Components/Card';

class App extends Component {
    constructor(props) {
        super(props)

        //state before loading and after loading and fetching data
        this.state = { allData: [], loader: false };
        this.afterLoadingState = this.afterLoadingState.bind(this);
    }

    afterLoadingState() {
        this.setState({ loader: true });

        //setTimeout is for loading time
        setTimeout(

            //This portion is for fetching data from the given api
            async function () {
                const link = "https://reqres.in/api/users?page=1";
                const response = await fetch(link);
                const jsonresponse = await response.json();
                this.setState({
                    allData: jsonresponse["data"],
                    loader: false      //when data are fetched,loader stops loading
                });

            }.bind(this), 2200
        )
    }

    render() {
        return (
            <div className="container">
                <nav className="navbar">
                    <div className="navitems p-3">
                        <span className="heading">LGM VIP</span>
                        <button className="button" onClick={this.afterLoadingState}>Get Data</button>
                    </div>
                </nav><br></br>

                <Card loader={this.state.loader}
                    data={this.state.allData}
                />
            </div>

        )
    }
}

export default App;