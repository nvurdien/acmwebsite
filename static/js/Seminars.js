
//NOTE: PLEASE MAKE SURE IMAGES ARE IN img FOLDER!

/**
* Card Generator
*
* @param room
* @param title
* @param date_time
* @param presenter
* @param description
*
*/
const Seminar = ({room, title = null, date_time, presenter, description = null}) => {
    return (
      <div>
          <div className="uk-card uk-card-default uk-card-body uk-card-hover">
              <p className="uk-card-badge uk-margin-remove-top uk-label">{room}</p>
              <div className="uk-card-body">
                  <h3 className="uk-card-title uk-margin-remove-bottom">{title ? title : 'Seminar Title'}</h3>
                  {presenter}
                  <p className="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">{date_time}</time></p>
                  <p>{description ? description : 'Description'}</p>
              </div>
          </div>
      </div>
    );
};

/**
* CardList Generator
*
* @param members * an array must include [room, title, date_time, presenter, description]
*
*/
const SeminarList = ({seminars}) => {
  return (
    <div className="uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center" uk-grid="">
          {
              seminars.map((user, i) => {
              return (
                  <Seminar
                      key={seminars[i].id}
                      room={seminars[i].room}
                      title={seminars[i].title}
                      date_time={seminars[i].date_time}
                      presenter={seminars[i].presenter}
                      description={seminars[i].description}
                      />
              );
              })
          }
      </div>
  )
};

/**
* Shows the Spring Board Members (hide this if it's not spring yet!)
*/

ReactDOM.render(<div>

<SeminarList seminars={SeminarsList} />

</div>, document.getElementById("seminars"));
