let env = process.env.NODE_ENV || 'development';

let config = {
    development: {
        API_URL: 'http://localhost:8000/api/client'
    },
    production: {
        API_URL: 'https://dunglu-back.herokuapp.com/api/client'
    },
};

module.exports = config[env];