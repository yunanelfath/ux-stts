React = require('react')
ReactDOM = require('react-dom')
Wrapper = require('./wrapper.cjsx')
materialize = require('materialize-loader') #https://www.npmjs.com/package/materialize-loader
styles = require('./../../sass/home.scss')
stylesOverride = require('./../../sass/jawaban.scss')
AppDispatcher = require('./../action/dispatcher.cjsx')
$ = require('jquery')

AppDispatcher.dispatch(
  actionType: 'personality_change'
  attributes: attributes: questionItems: $.map(window.questionDatas.questionItems, (e, idx)=>
    return [e]
    )
)
ReactDOM.render(
  React.createElement(Wrapper)
  document.getElementById('root')
)
