import React, { Component } from 'react';
import axios from 'axios';
class Login extends Component {
  login(username, password) {
    axios.post('/api/login', {
        username: username,
        password: password,
    }).then(response => {
        localStorage.setItem('uwu-token', 'Bearer ' + response.data.token)
    })
  }
  render() {
    
  }

}