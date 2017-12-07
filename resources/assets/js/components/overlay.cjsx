React = require('react')
ReactDOM = require('react-dom')
styles = require('./../../sass/overlay-background.scss')

{ Component } = React

# set constant function to accessing our modules except node_modules
class OverlayBackground extends Component
  constructor: (props) ->
    super(props)

  componentDidMount: ->
    # add listener to connecting store
    # @listener = GeneralStore.addChangeListener(@_onChange.bind(@)) # this/@ should bind manuallyy
    console.log styles

  componentWillUnmount: ->
    # @listener.remove()

  _onChange: ->
    # set State every store has changed
    # @setState(
    #   general: GeneralStore.general
    #   mainApp: GeneralStore.mainApp
    # )

  render: ->
    <div className={styles.backgrounds}>
      <div className={styles.backgrounds} data-aos="fade-in" data-aos-duration="1500" data-aos-anchor=".section-her"></div>
    </div>

module.exports = OverlayBackground
