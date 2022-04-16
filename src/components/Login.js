import { Button, Container, Form, Navbar, Nav } from 'react-bootstrap';
import React, { useState } from 'react';
import img from '../images/img.PNG';
import './Login.css';

const Login = () => {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    // console.log(email);
    // console.log(password);

    const login = (e) => {
        e.preventDefault();
        const userData = { email, password };

        // console.log(userData); // object

        fetch("https://reqres.in/api/login", {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(userData)
        }).then((result) => {

            // console.log(JSON.stringify(userData)); // json 
            // console.log(result);

            result.json().then((response) => {
                // console.log(response);
                alert(JSON.stringify(response));
            })
        })
    }

    return (
        <>
            <Navbar collapseOnSelect expand="lg" bg="light" variant="light">
                <Container>
                    <Navbar.Brand href="" style={{ color: "#023047" }}> <b>ATools<span style={{ color: "#fc9634" }}>.</span></b> </Navbar.Brand>
                    <Navbar.Toggle aria-controls="responsive-navbar-nav" />
                    <Navbar.Collapse id="responsive-navbar-nav" className="justify-content-end">
                        <Nav>
                            <Nav.Link href="#deets"> <Button style={{ backgroundColor: "#023047", border: "none" }}>Start Free Trial</Button></Nav.Link>
                            <Nav.Link eventKey={2} href="#memes">
                                <Button style={{ backgroundColor: "#fb8500", border: "none" }}>SIGN UP</Button>
                            </Nav.Link>
                        </Nav>
                    </Navbar.Collapse>
                </Container>
            </Navbar>


            <div className="container" >

                <div className="row justify-content-center" style={{ marginTop: "10%" }} >

                    <div className='col-lg-5'>
                        <img src={img} alt="error!" className='img-fluid' />
                    </div>

                    <div className='col-lg-5' >
                        <form onSubmit={login}>
                            <h2 className='row justify-content-center'>LOGIN</h2>
                            <br />
                            <Form.Group className="mb-3" controlId="formBasicEmail">
                                <Form.Label>Email address</Form.Label>
                                <Form.Control type="email" placeholder="Enter email" name="email"
                                    value={email}
                                    onChange={(e) => {
                                        setEmail(e.target.value)
                                    }} />
                            </Form.Group>

                            <Form.Group className="mb-3" controlId="formBasicPassword">
                                <Form.Label>Password</Form.Label>
                                <Form.Control type="password" placeholder="Password" name="password"
                                    value={password}
                                    onChange={(e) => {
                                        setPassword(e.target.value)
                                    }} />
                            </Form.Group>

                            <Form.Group className="mb-3" controlId="formBasicCheckbox">
                                <Form.Check type="checkbox" label="Remember Password" />
                            </Form.Group>

                            <div className="d-grid mb-3">
                                <Button style={{ backgroundColor: "#023047", border: "none" }} type="submit" >
                                    LOGIN
                                </Button>
                            </div>

                            <a style={{ textDecoration: "none" }} href="">Forgot Password?</a>
                        </form>
                    </div>

                </div>
            </div>

        </>
    )
}

export default Login;