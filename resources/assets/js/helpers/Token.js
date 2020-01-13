class Token {

    payload(token) {
      const payload = token.split('.')[1];
      return this.decode(payload);
    }
  
    decode(payload) {
      return JSON.parse(atob(payload));
    }
  
    isValid(token) {
      const payload = this.payload(token);
  
      if (payload) {
        return payload.iss == "http://saborlatino.test/api/auth/login" ? true : false
      }
  
      return false;
    }
  
  }
  
  export default Token = new Token();