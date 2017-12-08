React = require('react')
ReactDOM = require('react-dom')
Wrapper = require('./wrapper.cjsx')
materialize = require('materialize-loader') #https://www.npmjs.com/package/materialize-loader
styles = require('./../../sass/home.scss')

ReactDOM.render(
  React.createElement(Wrapper)
  document.getElementById('root')
)
