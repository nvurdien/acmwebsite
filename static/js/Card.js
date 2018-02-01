
//NOTE: PLEASE MAKE SURE IMAGES ARE IN img FOLDER!

/**
* Card Generator
*
* @param image
* @param name
* @param title
* @param description
* @param email
* @param null github
* @param null linkedin
*
*/
const Card = ({image, name, title, description, email, github = null, linkedin = null}) => {
    return (
      <div>
      <div className="uk-card uk-card-default uk-card-hover uk-animation-toggle">
          <div className="uk-card-header">
              <div className="uk-grid-small uk-flex-middle" uk-grid="">
                  <div className="uk-width-auto">
                      <img className="uk-border-circle" alt={name + "'s headshot image"} width="75" height="75" src={"img/" + image} />
                  </div>
                  <div className="uk-width-expand">
                      <h3 className="uk-card-title uk-margin-remove-bottom">{name}</h3>
                      <p className=" uk-margin-remove-top uk-label">{title}</p>
                  </div>
              </div>
          </div>
          <div className="uk-card-body">

              <p>{description}</p>
          </div>
          <div className="uk-card-footer">
            <a href={"mailto:" + email} className="uk-icon-button  uk-margin-small-right uk-animation-scale-up" uk-icon="icon: mail"></a>
            {github ? (<a href={github} target="_blank" className="uk-icon-button uk-margin-small-right uk-animation-scale-up" uk-icon="icon: github"></a>) : null}
            {linkedin ? (<a href={linkedin} target="_blank" className="uk-icon-button uk-margin-small-right uk-animation-scale-up" uk-icon="icon: linkedin"></a>) : null}
          </div>

      </div>
      </div>
    );
};

/**
* CardList Generator
*
* @param members * an array must include [id, image, name, title, description, email]
*
*/
const CardList = ({members}) => {
  return (
    <div className="uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small" uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; repeat: true" uk-grid="">
          {
              members.map((user, i) => {
              return (
                  <Card
                      key={members[i].id}
                      image={members[i].image}
                      name={members[i].name}
                      title={members[i].title}
                      description={members[i].description}
                      email={members[i].email}
                      github={members[i].github}
                      linkedin={members[i].linkedin}  />
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

<CardList members={Spring2018List} />

</div>, document.getElementById("spring2018-members"));

/**
* Shows the Fall Board Members
*/

ReactDOM.render(<div>

<CardList members={Fall2017List} />

</div>, document.getElementById("fall2017-members"));
