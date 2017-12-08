React = require('react')
ReactDOM = require('react-dom')
AppDispatcher = require('./../action/dispatcher.cjsx')
GeneralStore = require('./../stores/general.cjsx')
# OverlayBackground = require('./overlay.cjsx')
# UploadComponent = require('./../../../../../js/components/upload.cjsx')

{ Component } = React

# set constant function to accessing our modules except node_modules
Wrapper = (GeneralStore, AppDispatcher) =>
  class WrapperTemplate extends Component
    constructor: (props) ->
      super(props)

      # set default state picked from store
      @state = {
        questioner: GeneralStore.personality
        mainApp: GeneralStore.mainApp
      }

    componentDidMount: ->
      # add listener to connecting store
      @listener = GeneralStore.addChangeListener(@_onChange.bind(@)) # this/@ should bind manuallyy
      console.log @state.questioner

    componentWillUnmount: ->
      @listener.remove()

    _onChange: ->
      # set State every store has changed
      @setState(
        questioner: GeneralStore.personality
        mainApp: GeneralStore.mainApp
      )

    dispatchEvent: (attributes, actionType) =>
      # register action into dispatcher
      AppDispatcher.dispatch(
        actionType: if actionType then actionType else 'general-attributes-setter'
        attributes: attributes
      )

    render: ->
      { questioner, mainApp } = @state

      jawabanItemRow = (item, idx) =>
        <li key={idx}>{item}</li>
      titleItemRow = (item, idx) =>
        <div className="code code--small code--left aos-init aos-animate" data-aos="fade-up" key={idx}>
          <code className="html hljs xml">
            <ul>
              <li>{item.question}</li>
            </ul>
          </code>
        </div>

      questionItemRow = (items, idx) =>
        <section className="section section--code" key={idx}>
          <div className="container tenaga-pengajar">
            <h2 className="section-title">{items[0].category_name}</h2>
            {
              items.map(titleItemRow)
            }
          </div>
        </section>

      <div>
        <div className='backgrounds overlay'>
          <div className='background aos-animate' data-aos="fade-in" data-aos-duration="1500" data-aos-anchor=".section-her"></div>
        </div>
        <header className='hero'>
          <div className='hero-center'>
            <h1 className='hero__logo aos-animate' data-aos="zoom-in">STTS</h1>
            <h2 className='hero__text aos-animate' data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">Survey Kepuasan Kinerja</h2>
          </div>
          <span className="hero__scroll aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">Click To Start<i className="chevron bottom"></i></span>
        </header>

        <div className="jawab-container">
          <div className="btn-container">
            <button>back</button>
          </div>
          <div className="jawaban-items">
            <ul>
              {
                JSON.parse(questioner.questionItems[0][0].answer_items).map(jawabanItemRow)
              }
            </ul>
          </div>
          <div className="btn-container">
            <button>next</button>
          </div>
        </div>
        {
          questioner.questionItems.map(questionItemRow)
        }
      </div>

module.exports = Wrapper(GeneralStore, AppDispatcher)
